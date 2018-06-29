@extends('layouts.master')

@section('content_1') 
 <br>
 <br>
 <br>
 <article>
  <div class="card-header"></div>

                <div class="card-body">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                  @csrf
                        <div class="form-group " style="position:relative;margin-left:20%;margin-right:20%;">
                            <label for="exampleInputEmail1" >{{ __('E-Mail Address') }}</label>

                            <div >
                                <input id="exampleInputEmail1" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus aria-describedby="emailHelp" placeholder="Your email" style="position:relative;margin-right:25%;">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group " style="position:relative;margin-left:20%;margin-right:20%;" >
                            <label for="password" >{{ __('Password') }}</label>

                            <div >
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password" style=" position:relative;margin-right:15%;">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


  
                          <div class="form-group form-check" style="position:relative;margin-left:20%;">
                            <div >
                                <div >
                                    <label class="form-check-label" for="exampleCheck1" >
                                        <input type="checkbox" name="remember"  class="form-check-input" id="exampleCheck1" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div >
                            <div >
                              <button type="submit" class="btn btn-outline-success my-2 my-sm-0" style="position:relative;margin-left:20%;" >{{ __('Login') }}</button>
                                  
                                  </button>
                              <button type="button" class="btn btn-link" style="background-color:white;color:green;position:relative;margin-left:20%; " href="{{ route('password.request') }}">
                                    
                                    
                                 {{ __('Forgot Your Password?') }}</button>
                                 
                                  
                            </div>
                        </div>  
   
    
                        </form>
  <br>
  <br>
  <p style="position:relative;margin-left:20%;font-size:25px;">It's your first time ?</p> <a href={{ url('register')}} target="black"><button type="button" class="btn btn-link" style="position:relative;margin-left:19%;%;background-color:white;color:green;"><span style="font-size:25px;">Click here</span></button></a>
</div>
@endsection
