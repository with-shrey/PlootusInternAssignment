@extends('layouts.app')

@section('content')
    <div class="container  justify-content-center ">
        <div class="row card card-body col-md-8 offset-2">
            <form  method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Email</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  placeholder="Email">
                    <span class="has-warning text-danger">{{  $errors->has('email') ?$errors->first('email'): '' }}</span>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                    <span class="has-warning text-danger">{{  $errors->has('password') ?$errors->first('password'): '' }}</span>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Repeat Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Re-enter Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

    </div>
@endsection