@extends('admin.layout.app')

@section('content')
    <div class="w-100 text-right container pt-1 mb-2">
        <a href="{{ route('admin.products.create') }}" type="button" class="btn btn-success btn-flat"><i class="fas fa-plus"></i> Create</a>
    </div>
    <div class="card">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stocks</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Test Product</td>
                        <td>100</td>
                        <td>100</td>
                        <td>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-inline-block btn-flat btn-sm"><i
                                        class="fas fa-eye"></i> View</button>
                                <button type="button" class="btn btn-info btn-inline-block btn-flat btn-sm"><i
                                        class="fas fa-edit"></i> Edit</button>
                                <button type="button" class="btn btn-danger btn-inline-block btn-flat btn-sm"><i
                                        class="fas fa-trash"></i> Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
