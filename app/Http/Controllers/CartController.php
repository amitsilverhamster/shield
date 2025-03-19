<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Add product to cart
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'integer|min:1'
        ]);
        
        $productId = $request->product_id;
        $quantity = $request->quantity ?? 1;
        
        // Get cart from session or create new one
        $cart = Cart::firstOrCreate(
            ['user_id' => 1], // Since we don't have a user yet, use dummy ID
            ['products' => '[]']
        );
        
        // Get existing products
        $products = json_decode($cart->products, true) ?: [];
        $item['qty'] = 0;
        // Check if product already exists in cart
        $exists = false;
        foreach ($products as &$item) {
            if ($item['product_id'] == $productId) {
                $item['qty'] ++;
                $exists = true;
                break;
            }
        }
        
        // Add product if it doesn't exist
        if (!$exists) {
            $products[] = [
                'product_id' => $productId,
                'qty' => $quantity
            ];
        }
        
        // Update cart
        $cart->products = json_encode($products);
        $cart->save();
        
        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully!',
            'cart_count' => count($products)
        ]);
    }
    
    /**
     * Display the cart
     *
     * @return \Illuminate\Http\Response
     */
    public function showCart()
    {
        $cart = Cart::where('user_id', 1)->first(); // Using dummy user ID
        $products = $cart ? json_decode($cart->products, true) : [];
        
        return view('cart.index', compact('cart', 'products'));
    }

    /**
     * Get cart data for the dynamic cart page
     *
     * @return array
     */
    public function getCartData()
    {
        $cart = Cart::where('user_id', 1)->first(); // Using dummy user ID for now
        $cartItems = [];
        $subtotal = 0;
        
        if ($cart) {
            $products = json_decode($cart->products, true) ?: [];
            
            foreach ($products as $item) {
                $product = Product::find($item['product_id']);
                
                if ($product) {
                    // Parse the price data - handle both string and array cases
                    $priceData = null;
                    if (is_string($product->price)) {
                        $priceData = json_decode($product->price, true);
                    } elseif (is_array($product->price)) {
                        $priceData = $product->price;
                    }
                    
                    // Extract sale_price and regular_price from the first price entry
                    $salePrice = null;
                    $regularPrice = null;
                    
                    if (is_array($priceData) && count($priceData) > 0) {
                        $salePrice = isset($priceData[0]['sale_price']) ? floatval($priceData[0]['sale_price']) : null;
                        $regularPrice = isset($priceData[0]['regular_price']) ? floatval($priceData[0]['regular_price']) : null;
                    }
                    
                    // Fallback to direct properties if not found in price data
                    if ($salePrice === null && isset($product->sale_price)) {
                        $salePrice = floatval($product->sale_price);
                    }
                    
                    if ($regularPrice === null && isset($product->regular_price)) {
                        $regularPrice = floatval($product->regular_price);
                    }
                    
                    // Get the unit price (for qty=1)
                    $unitPrice = $salePrice ?? $regularPrice;
                    // Calculate the total price for this item
                    $totalPrice = $unitPrice * $item['qty'];
                    // Add to subtotal
                    $subtotal += $totalPrice;
                    
                    // Get the first image from the images array
                    $productImage = 'img/Channel-Duct-e1662964282865-300x300.webp'; // Default image
                    if ($product->images) {
                        // Check if images is already an array or if it's a JSON string
                        if (is_string($product->images)) {
                            $images = json_decode($product->images, true);
                            if (is_array($images) && count($images) > 0) {
                                $productImage = $images[0];
                            }
                        } else if (is_array($product->images) && count($product->images) > 0) {
                            $productImage = $product->images[0];
                        }
                    } else if ($product->featured_image) {
                        $productImage = $product->featured_image;
                    }
                    
                    $cartItems[] = [
                        'id' => $product->id,
                        'name' => $product->name,
                        'price' => $unitPrice, // Unit price only
                        'regular_price' => $regularPrice,
                        'sale_price' => $salePrice,
                        'quantity' => $item['qty'],
                        'image' => $productImage,
                        'sku' => $product->sku ?? 'SKU-'.$product->id,
                        'in_stock' => $product->in_stock ?? true,
                        'total_price' => $totalPrice, // Add the total price for this item
                    ];
                }
            }
        }
        
        return [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'itemCount' => count($cartItems)
        ];
    }
    
    /**
     * Remove an item from the cart
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function removeFromCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
        ]);
        
        $productId = $request->product_id;
        $cart = Cart::where('user_id', 1)->first();
        
        if ($cart) {
            $products = json_decode($cart->products, true) ?: [];
            $products = array_filter($products, function($item) use ($productId) {
                return $item['product_id'] != $productId;
            });
            
            // Re-index the array
            $products = array_values($products);
            
            $cart->products = json_encode($products);
            $cart->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Product removed from cart',
                'cart_count' => count($products)
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Cart not found'
        ], 404);
    }
    
    /**
     * Update cart item quantity
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateCartQuantity(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1'
        ]);
        
        $productId = $request->product_id;
        $quantity = $request->quantity;
        
        $cart = Cart::where('user_id', 1)->first();
        
        if ($cart) {
            $products = json_decode($cart->products, true) ?: [];
            
            foreach ($products as &$item) {
                if ($item['product_id'] == $productId) {
                    $item['qty'] = $quantity;
                    break;
                }
            }
            
            $cart->products = json_encode($products);
            $cart->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Cart updated'
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Cart not found'
        ], 404);
    }
}
