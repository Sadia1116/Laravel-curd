
@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">name</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $product->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">quanity</label>
                <input type="text" name="quanity" class="form-control" placeholder="quanity" value="{{ $product->quanity }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">price</label>
                <input type="text" name="price" class="form-control" placeholder="price" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
