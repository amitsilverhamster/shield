@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto">
    @include('sections.dynamic.product-category-section')
    @include('sections.dynamic.product-section')
</div>
@include('sections.review-section')
@endsection