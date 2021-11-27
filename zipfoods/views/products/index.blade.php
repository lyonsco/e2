@extends('templates/master')

@section('title')
    All Products
@endsection

@section('content')
    <h2>All Products</h2>
    <div id='product-index'>
        @foreach ($products as $product)
            <a class='product-link' href='/product?sku={{ $product['sku'] }}'>
                <div>
                    <div class='product-name'>{{ $product['name'] }}</div>
                    <img class='product-thumb' src="/images/products/{{ $product['sku'] }}.jpg">
                </div>
            </a>
        @endforeach
    </div>

    <form method='POST' id='new_product' action='/products/new'>
        <h3>Add New Product</h3>
        <div class='form-group'>
            <label for='product_name'>Product Name</label>
            <input type='text' class='form-control' name='product_name' id='product_name'>
        </div>
        <div class='form-group'>
            <label for='sku'>Sku</label>
            <input type='text' class='form-control' name='sku' id='sku'>
        </div>
        <div class='form-group'>
            <label for='description'>Description</label>
            <textarea name='description' id='description' class='form-control'></textarea>
        </div>
        </div>
        <div class='form-group'>
            <label for='price'>Price</label>
            <input type='text' class='form-control' name='price' id='price'>
        </div>

        <button type='submit' class='btn btn-primary'>Submit New Product</button>
    </form>

@endsection
