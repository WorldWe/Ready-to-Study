@extends('layouts.master')

@section('content_1')
<article>

    <form  method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
    
  <div class="form-group" style="position:relative;margin-left:20%;margin-right:20%;">
    <label type="text">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1" style=" position:relative;margin-right:15%;">
    <br>
  
  
      <label >Email</label>
      <input type="Email" name="email" class="form-control"  id="exampleInputPassword1">
      <br>
      <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="" placeholder="8 caracters or more">
        <br>
         <label for="exampleInputPassword1">Confirm password</label>
        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" >
        </div>
        <br>
         <button type="submit" class="btn btn-outline-success my-2 my-sm-0" style="position:relative;margin-left:20%;" >Register</button>

        </form>

</article>
<br>
<br>
<br>
<br>
<br>



        <hr>
@endsection