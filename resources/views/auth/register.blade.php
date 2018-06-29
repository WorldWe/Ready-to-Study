<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" >
     <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <title>Register</title>
</head>
<body>
    <header>
       <!--<img src="ready to study 3.png"-->
       <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav" style="background-color: #e3f2fd;">
         <div class="container">

  <a href="{{url('accueil')}}"><img src="images/ss.gif"></a>
  <!-- Navbar content -->
  
   <a class="navbar-brand" href="{{url('accueil')}}">Home</a>
   

  
   <a class="navbar-brand" href="#about">About</a>
   <a class="navbar-brand" href="#Sociaux">Contact us</a>
   <a class="navbar-brand" href="{{url('sinin')}}" target="blanc">Sign in</a>
   <a class="navbar-brand" href="{{url('register')}}">Register</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </nav>

</div>

</header>   
<br>
<br>
<br>




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
       <footer " >
            <table>
                <tr style="position:relative;margin-left:10%;">
            <th id="about"><aside id="foot" style="position: relative;margin-left:4%;">
                <a href="#"><button type="button" class="btn btn-link" style="background-color:white;color:black;font-size:20px;">Why this site web ?</button></a><br>
            <a href="#"><button type="button" class="btn btn-link" style="background-color:white;color:black;font-size:20px;">Do you want to know about us?</button></a><br>
            <a href="#"><button type="button" class="btn btn-link" style="background-color:white;color:black;font-size:20px;">Best way for working</button></a><br>
            <a href="#"><button type="button" class="btn btn-link" style="background-color:white;color:black;font-size:20px;">Services</button></a><br>
            <br>
            <a href="#nav"><button type="button" class="btn btn-link" style="background-color:white;color:black;font-size:20px;">Back at menu</button></a>
              </div>
            </aside></th>
        
            
            <th><aside id="foot" style="position:relative;margin-left:40%;">

          <span id="Sociaux" style="height:200px;">
            <h4 style="position:relative;margin-left:7%;">For Contact us :</h4>
            <div >
            <a href="https://twitter.com" target="black"><img src="images/twt.gif"></a>
            <a href="https://fr.linkedin.com" target="black"><img src="images/in.gif"></a>
            <a href="https://web.facebook.com/?_rdc=1&_rdr" target="black"><img src="images/faceb.gif"></a>
            <a href="https://www.youtube.com"><img src="images/ytb.gif"></a>  
            </div>
            </span>

<p style="font-size:16px;position:relative;margin-left:10%;">© 2018–2019 Ready to Study.<br> 
<span style="position:relative;margin-left:">R_S, Open R_S, and MicroMasters are registered trademarks of R_S Inc.</span><br> | 粤ICP备17044299号-2</p>
</aside>
</th>
</tr>
</table>

        </footer>



</body>
</html>