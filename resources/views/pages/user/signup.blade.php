@extends('app')
@section('content')
@include('common.header')

    <div class="container">
        <form action="{{route('signup')}}" method="POST">
            @csrf
            <div class="row mt-4">
                <div class="col-12">
                    <h2 class="h4 text-uppercase mb-4">Create your account</h2>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="name">Name</label>
                    <input class="form-control form-control-lg" id="name" name="name" type="text" placeholder="Enter your email address / phone number">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="email">Email</label>
                    <input class="form-control form-control-lg" name="email" id="email" type="email" placeholder="Enter your email address / phone number">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="password">Password</label>
                    <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Enter your password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="password_confirmation">Confirm Password</label>
                    <input class="form-control form-control-lg" name="password_confirmation" id="password_confirmation" type="password" placeholder="Enter your password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <button class="btn btn-dark" type="submit">Signup</button>
                </div>
            </div>
        </form>
    </div>

@include('common.footer')
@endsection
