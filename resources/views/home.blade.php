@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto">
    @include('sections.product-category-section')

    @include('sections.product-section')
</div>
@include('sections.review-section')

@endsection