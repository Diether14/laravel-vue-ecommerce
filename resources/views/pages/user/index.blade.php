@extends('app')
@section('content')
@include('common.header')

    <div class="container">
        <form action="#">
            <div class="row mt-4">
                <div class="col-12">
                    <h2 class="h4 text-uppercase mb-4">Login</h2>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="firstName2">Email / Phone</label>
                    <input class="form-control form-control-lg" id="firstName2" type="text" placeholder="Enter your email address / phone number">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="firstName2">Password</label>
                    <input class="form-control form-control-lg" id="firstName2" type="text" placeholder="Enter your password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <button class="btn btn-dark" type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>

@include('common.footer')
@endsection