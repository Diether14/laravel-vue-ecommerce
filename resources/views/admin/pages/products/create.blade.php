@extends('admin.layout.app')

@section('content')
<div class="card">
    <!-- form start -->
    <form id="quickForm">
      <div class="card-body">
        <div class="form-group">
          <label for="productName">Name</label>
          <input type="text" name="name" class="form-control" id="productName" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="productDescription">Description</label>
            <textarea name="description" class="form-control" id="productDescription" placeholder="Enter description"></textarea>
        </div>
        <div class="form-group">
            <label for="productPrice">Price</label>
            <input type="number" name="price" class="form-control" id="productPrice" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="productStocks">Stocks</label>
            <input type="number" name="stocks" class="form-control" id="productStocks" placeholder="Enter stocks">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection