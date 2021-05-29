@extends('store_owner.layout.app')

{{-- begin:: style used by this page --}}
{{-- <link rel="stylesheet" href="/library/dropzone/basic.css"> --}}
{{-- <link rel="stylesheet" href="/library/dropzone/dropzone.css"> --}}
{{-- end:: style used by this page --}}
{{-- begin:: script used by this page --}}
{{-- <script src="/vendor/jquery/jquery.min.js"></script> --}}
{{-- <script src="/library/dropzone/dropzone.js"></script> --}}
{{-- end:: script used by this page --}}

@section('content')
<div class="card">
    <!-- form start -->
    {{-- enctype="multipart/form-data" --}}
    <form id="quickForm" method="POST">
      <div class="card-body">
        <div class="form-group">
          <label for="productName">Name</label>
          <input type="text" name="name" class="form-control" id="productName" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="productDescription">Description</label>
            <textarea name="description" class="form-control" id="productDescription" placeholder="Enter description" required></textarea>
        </div>
        <div class="form-group">
            <label for="productPrice">Price</label>
            <input type="number" name="price" class="form-control" id="productPrice" placeholder="Enter price" required>
        </div>
        <div class="form-group">
            <label for="productStocks">Stocks</label>
            <input type="number" name="stocks" class="form-control" id="productStocks" placeholder="Enter stocks" required>
        </div>
        <div class="form-group">
          <label for="productStocks">Image</label>
          <input type="file" name="image[]" class="form-control" id="productImage" multiple placeholder="Upload image">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <script src="/vendor/jquery/jquery.min.js"></script>
  <script>
    $(document).ready(() => {
      const Owner = {
        create: (e) => {
          var formData = new FormData();
          formData.append('_token', '{{ csrf_token() }}');
          formData.append('name', $('#productName').val());
          formData.append('description', $('#productDescription').val());
          formData.append('price', $('#productPrice').val());
          formData.append('stocks',  $('#productStocks').val());
          formData.append('product_images[]', $('#productImage')[0].files[0]);        
          e.preventDefault();
  
          $.ajax({
            url: '/owner/api/products',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: (res) => {
              console.log(res);
            }
          });
        }
      };
  
      $(document).on('submit', '#quickForm', (e) => Owner.create(e));
    });
  </script>
@endsection
