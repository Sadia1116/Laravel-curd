
@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">name</label>
            <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $product->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">quantity</label>
            <input type="text" name="quantity" class="form-control" placeholder="quantity" value="{{ $product->quantity }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">price</label>
            <input type="text" name="price" class="form-control" placeholder="price" value="{{ $product->price }}" readonly>
        </div>
    
    </div>
    
    </div>
@endsection