@extends('layouts.app')
@extends('layouts.master')

@section('content_1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 <br>
 <br>
 <br>
 <article>
<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
  @csrf
  <div class="form-group" style="position:relative;margin-left:20%;margin-right:20%;">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email" style="position:relative;margin-right:25%;">
  </div>
  <div class="form-group" style="position:relative;margin-left:20%;margin-right:20%;">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style=" position:relative;margin-right:15%;">
  </div>
  <div class="form-group form-check" style="position:relative;margin-left:20%;">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
     <label class="form-check-label" for="exampleCheck1">Remember password</label>
  </div>
   <button type="button" class="btn btn-link" style="background-color:white;color:green;position:relative;margin-left:20%;"><u>Password forgetten?</u></button>
    <br>
    <br>
  <button type="submit" class="btn btn-outline-success my-2 my-sm-0" style="position:relative;margin-left:20%;" >Sign in</button>
  </form>
  <br>
  <br>
  <p style="position:relative;margin-left:20%;font-size:25px;">It's your first time ?</p> <a href="file:///C:/Users/HGF/Desktop/Register.html" target="black"><button type="button" class="btn btn-link" style="position:relative;margin-left:19%;%;background-color:white;color:green;"><span style="font-size:25px;">Click here</span></button></a>


</article>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>