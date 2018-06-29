<!DOCTYPE html>
<html>
<head>

  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.min.css')}}" >
   <link rel="stylesheet" type="text/css" href="{{ asset ('style.css')}}">
   <link rel="stylesheet" type="text/html" href="sinin.html">
   <link rel="stylesheet" type="text/html" href="Register.html">
   <link rel="stylesheet" type="text/html" href="second.html">
  <title>Ready to study</title>
</head>
<body>


  <header>
       <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav" style="position:relative;background-color: #e3f2fd;">
         <div class="container">


       <a href="{{url('loginacc')}}"><img src="images/ss.gif"></a>

           <a class="navbar-brand" href="{{url('loginacc')}}" style="position:relative;margin-left: 4%;">Home</a>

  
   <a class="navbar-brand" href="#about" style="position:relative;margin-left:3%;">About</a>
   <a class="navbar-brand" href="#Sociaux" style="position:relative;margin-left:3%;">Contact us</a>
    <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="position:relative;margin-right:10%;top:16px;margin-left:10%;width:400px;">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"  style="position:relative;top:-23px;margin-left:97%;">Search</button>
  </form>
  
   <a class="navbar-brand" href="{{url('pnani')}}" style="position:relative;margin-right:50px;margin-left:100px;">my space</a>
   <a class="navbar-brand" href="{{url('accueil')}}" target="black" style="position:relative;margin-right:50%;">logout</a>
 
  </nav>

</div>
</nav>
</header>


      @yield ('content_1')

        <footer style="position: relative;top:-1000%;" >
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






<script src="bootstrap/js/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
