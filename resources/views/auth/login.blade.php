@extends('layouts.app')

@section('contents')
<main class="contents">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-xxs-2 mb-6" style="margin-top:20%;">
                <div class="card-body px-8 py-6">
                   <h2 class="card-title fs-30 font-weight-600 text-dark lh-16 mb-2">Log In</h2>
                   
                   <form class="form" action="{{ route('login') }}" method="POST">
                    @csrf
                      <div class="form-group mb-4">
                        <label for="username-1">Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg border-0" id="username-1" value="{{ old('email') }}" name="email" placeholder="Your email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" style="color:red" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group mb-4">
                         <label for="password-2">Password</label>
                         <div class="input-group input-group-lg">
                            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} border-0 shadow-none fs-13" id="password-2" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" style="color:red" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                         </div>
                      </div>
                      <div class="d-flex mb-4">
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remember-me-1" name="remember">
                            <label class="form-check-label" for="remember-me-1">
                            Stay signed in
                            </label>
                         </div>
                         <a href="password-recovery.html" class="d-inline-block ml-auto fs-13 lh-2 text-body">
                         <u>Forgot your password?</u>
                         </a>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Log in</button>
                   </form>
                   <div class="divider text-center my-2">
                      <span class="px-4 bg-white lh-17 text text-heading">
                      or 
                      </span>
                   </div>
                   <div class="row no-gutters mx-n2">
                      <div class="col-sm-12 px-2 mb-4">
                         <a href="{{ route('register') }}" class="btn btn-lg btn-block text-heading border px-0 bg-hover-accent">
                         Register
                         </a>
                      </div>
                      
                   </div>
                </div>
             </div>
        </div>
    </div>
</main>
@endsection
