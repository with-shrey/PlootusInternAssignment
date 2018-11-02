@extends('layouts.app')

@section('content')
    <div class="container  justify-content-center ">
        <div class="row card card-body col-md-8 offset-2">
            <form  method="POST" action="{{ route('login_submit') }}">
                @if($errors->has("login"))
                <div class="alert alert-danger">
                    <strong>Oops!</strong> {{ $errors->first('login') }}
                </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Email</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  placeholder="Email" required>
                    <span class="has-warning text-danger">{{  $errors->has('email') ?$errors->first('email'): '' }}</span>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                    <span class="has-warning text-danger">{{  $errors->has('password') ?$errors->first('password'): '' }}</span>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

    </div>
@endsection