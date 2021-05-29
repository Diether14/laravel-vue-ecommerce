@extends('store_owner.layout.app')

{{-- begin:: style used by this page --}}
{{-- <link rel="stylesheet" href="/library/dropzone/basic.css"> --}}
<link rel="stylesheet" href="/library/dropzone/dropzone.css">
{{-- end:: style used by this page --}}
{{-- begin:: script used by this page --}}
{{-- <script src="/vendor/jquery/jquery.min.js"></script> --}}
<script src="/library/dropzone/dropzone.js"></script>
{{-- end:: script used by this page --}}

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
        <div class="form-group">
          <form action="/file-upload" class="dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple />
            </div>
          </form>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

@endsection

<script>
  $(document).ready(() => {
    Dropzone.options.myAwesomeDropzone = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 2, // MB
      accept: function(file, done) {
        if (file.name == "justinbieber.jpg") {
          done("Naha, you don't.");
        }
        else { done(); }
      }
    };
  });
</script>