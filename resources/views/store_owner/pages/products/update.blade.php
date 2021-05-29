@extends('store_owner.layout.app')

@section('content')
<div class="card">
    <!-- form start -->
    <form id="quickForm">
      <div class="card-body">
        <div class="form-group">
          <label for="productName">Name</label>
          <input type="text" name="name" class="form-control" id="productName" value="Test Product" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label>Categories</label>
          <select class="form-control select2" multiple="multiple" data-placeholder="Select Categories"
                  style="width: 100%;">
            <option>Shoes</option>
            <option>Shirts</option>
            <option>Pants</option>
          </select>
        </div>
        <div class="form-group">
            <label for="productDescription">Description</label>
            <textarea name="description" class="form-control" id="productDescription" placeholder="Enter description">This is a product.</textarea>
        </div>
        <div class="form-group">
            <label for="productPrice">Price</label>
            <input type="number" name="price" class="form-control" id="productPrice" value="100" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="productStocks">Stocks</label>
            <input type="number" name="stocks" class="form-control" id="productStocks" value="100" placeholder="Enter stocks">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection

@section('styles')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
@endsection

@section('scripts')
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(() => {
      const Product = {
        update: (e) => {
            const url_string = window.location.href
            const url = new URL(url_string);
            const urlSplit = url.pathname.split('/');
            const id = urlSplit[4];
            e.preventDefault();

            const data = {
                '_token': '{{ csrf_token() }}',
                '_method': 'POST',
                'name': $('#productName').val(),
                'description': $('#productDescription').val(),
                'price': $('#productPrice').val(),
                'stocks':  $('#productStocks').val()
            };

            $.ajax({
                url: '/owner/api/products/'+id,
                method: 'PUT',
                data: data,
                success: (res) => {
                    // console.log(res);
                    window.location.href = '/owner/products';
                }
            });
        }
      };

      $(document).on('submit', '#quickForm', (e) => Product.update(e));
    });
  </script>
@endsection