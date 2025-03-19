@extends('layouts.app')
@section('title', 'Products')
@section('content')
@php
$bgImage = asset('img/grey-triangle-16-9.webp');
@endphp
<section class="mt-8">
@include('sections.dynamic.product-section')

</section>
@endsection