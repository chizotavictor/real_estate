{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.app')

@section('contents')
<main class="contents">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-xxs-2 mb-6" style="margin-top:20%;">
                <div class="card-body px-8 py-6">
                   <h2 class="card-title fs-30 font-weight-600 text-dark lh-16 mb-2">Register</h2>
                   
                   <form class="form" action="{{ route('register') }}" method="POST">
                    @csrf
                        <div class="form-group mb-4">
                            <label for="">Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }} form-control-lg border-0" id="" value="{{ old('name') }}" name="name" placeholder="Your full name">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" style="color:red" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                      <div class="form-group mb-4">
                        <label for="">Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg border-0" id="" value="{{ old('email') }}" name="email" placeholder="Your email">
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

                      <div class="form-group mb-4">
                        <label for="password-2">Confirm Password</label>
                        <div class="input-group input-group-lg">
                           <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }} border-0 shadow-none fs-13" id="password_confirmation-2" name="password_confirmation" placeholder="Confirm Password">
                           @if ($errors->has('password_confirmation'))
                               <span class="invalid-feedback" style="color:red" role="alert">
                                   <strong>{{ $errors->first('password_confirmation') }}</strong>
                               </span>
                           @endif
                        </div>
                     </div>
                     
                      <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Register</button>
                   </form>
                   <div class="divider text-center my-2">
                      <span class="px-4 bg-white lh-17 text text-heading">
                      or 
                      </span>
                   </div>
                   <div class="row no-gutters mx-n2">
                      <div class="col-sm-12 px-2 mb-4">
                         <a href="{{ route('login') }}" class="btn btn-lg btn-block text-heading border px-0 bg-hover-accent">
                         Login
                         </a>
                      </div>
                      
                   </div>
                </div>
             </div>
        </div>
    </div>
</main>
@endsection
