@extends('layouts.master')

@section('content_1')


<article>
<img src="images/aa.jpg" style="width:1350px;height:550px;">
<br>
<br>

   <div style="position: relative;margin-left:4%;">
  <img src="images/aa.png" style="position:relative;width:200px;height:50px;">
<img src="images/bb.png" style="position:relative;width:240px;height:80px;">
<img src="images/cc.png" style="position:relative;width:222px;height:60px;">
<img src="images/ee.png" style="position:relative;width:210px;height:50px;">
<img src="images/rr.png" style="position:relative;width:200px;height:50px;">
<button type="button" class="btn btn-link" style="background-color:white;color:#336600;border: solid #336600 1px;"><span style="">See more</span></button>

	</div>
<br>
<br>
<br>
<br>

<div class="dropdown" >
  <a class="btn btn-secondary  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
 style="position:relative;margin-left:70%;width:18em;">
    All categories
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Science</a>
    <a class="dropdown-item" href="#">IT</a>
     <a class="dropdown-item" href="#">Design</a>
      <a class="dropdown-item" href="#">Mathematics</a>
    <a class="dropdown-item" href="#">Physic</a>
     <a class="dropdown-item" href="#">Historic</a>
      <a class="dropdown-item" href="#">Human's sciences</a>
       <a class="dropdown-item" href="#">Managment</a>

  </div>
</div>
<br>
<aside>

     <div style="border:solid white 1px;position:relative;margin-left:1%;margin-right:3%;border-radius:10px;">
     	<br>
     	<br>
     	<h3 style="text-align:center;">Starting soon</h3>
     	<br>
	<div class="card" style="width: 18rem;position:relative;margin-left:2%;">
  <img class="card-img-top" src="images/math.jpg" alt="Card image">
  <div class="card-body">
     <h5 class="card-title" style="color:black;">Apprendre mieux<br>Mathematic</h5>
    <p class="card-text">hgfjh dgdkgh klzt fdse qsgdd ij ,klj dfhndv hjyh frdcxd cvcfdxr jbjcdbv djh jhbv.</p>
    <a href="#" class="btn btn-primary"  id="mous">See more</a>
  </div>
</div>
<div class="card" style="width: 18rem;position:relative;margin-left:1%;">
  <img class="card-img-top" src="images/ege.jpg" alt="Card image cap" style="height:188px;">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">Historic cours<br>Ancient Egypt</h5>
    <p class="card-text">hdgfjsfjdh djfhjghkdfjg fkgjfkdjglf kghfkghkfg gfhkghdghkdf fghkfg fgh.</p>
    <a href="#" class="btn btn-primary" id="mous">See more</a>
  </div>
</div>
<div class="card" style="width: 18rem;position:relative;margin-left:1%;">
  <img class="card-img-top" src="images/science.jpg" alt="Card image cap" style="height:188px;">
  <div class="card-body">
   <h5 class="card-title" style="color:black;">Biology's science</h5><br>
    <p class="card-text">cxxvsh fjgjfj kdfdhf dfdgf ldfdlgj ggdsd khfdkfh lkf kgfjdghjfh kfhvkjdfhv jdhgdjg .</p>
    <a href="#" class="btn btn-primary"  id="mous">See more</a>
  </div>
</div>
<div class="card" style="width: 18rem;position:relative;margin-left:1%;">
  <img class="card-img-top" src="images/business.jpg" alt="Card image cap" style="height:188px;">
  <div class="card-body">
   <h5 class="card-title" style="color:black;">Data analytic</h5><br>
    <p class="card-text">cxxvsh fjgjfj kdfdhf dfdgf ldfdlgj ggdsd khfdkfh lkf kgfjdghjfh kfhvkjdfhv jdhgdjg .</p>
    <a href="{{url('second')}}" class="btn btn-primary"  id="mous" target="black">See more</a>
  </div>
</div>
<br>
<br>
<button type="button" class="btn btn-link" style="background-color:white;color:#336600;border: solid #336600 1px;position:relative;margin-left:90%;"><span style="">See more</span></button>
<br>
<br>

</div>
</aside>
<br>
<aside>
	 <div style="border:solid white 1px;position:relative;margin-left:1%;margin-right:3%;border-radius:10px;">
     	<br>
     	<br>
     	<h3 style="text-align:center;">Most visited</h3>
     	<br>
	<div class="card" style="width: 18rem;position:relative;margin-left:2%;height:240%;top:-3px;">
  <img class="card-img-top" src="images/science.jpg" alt="Card image cap">
  <div class="card-body" style="">
     <h5 class="card-title" style="color:black;">Historical<br>Wares</h5>
    <p class="card-text">hgfjh dgdkgh klzt fdse qsgdd ij ,klj dfhndv hjyh frdcxd cvcfdxr jbjcdbv djh jhbvhfhdsgdf lgffcvbn piuyzdfb z'e(-èiok,n fdsxcvb .</p>
    <a href="#" class="btn btn-primary"  id="mous">See more</a>
  </div>
</div>
<div class="card" style="width: 18rem;position:relative;margin-left:1%;">
  <img class="card-img-top" src="images/Dinf.jpg" alt="Card image cap" style="height:188px;">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">Developpement<br>Informatic</h5>
    <p class="card-text">hdgfjsfjdh djfhjghkdfjg fkgjfkdjglf kghfkghkfg gfhkghdghkdf fghkfg fgh.</p>
    <a href="#" class="btn btn-primary" id="mous">See more</a>
  </div>
</div>

<div class="card" style="width: 18rem;position:relative;margin-left:1%;">
  <img class="card-img-top" src="images/phy.jpg" alt="Card image cap" style="height:188px;">
  <div class="card-body">
   <h5 class="card-title" style="color:black;">Cours Physic</h5><br>
    <p class="card-text">cxxvsh fjgjfj kdfdhf dfdgf ldfdlgj ggdsd khfdkfh lkf kgfjdghjfh kfhvkjdfhv jdhgdjg .</p>
    <a href="#" class="btn btn-primary"  id="mous">See more</a>
  </div>
</div>
<div class="card" style="width: 18rem;position:relative;margin-left:1%;">
  <img class="card-img-top" src="images/law.jpg" alt="Card image cap" style="height:188px;">
  <div class="card-body">
   <h5 class="card-title" style="color:black;">Business law</h5><br>
    <p class="card-text">cxxvsh fjgjfj kdfdhf dfdgf ldfdlgj ggdsd khfdkfh lkf kgfjdghjfh kfhvkjdfhv jdhgdjg .</p>
    <a href="#" class="btn btn-primary"  id="mous">See more</a>
  </div>
</div>
<br>
<br>
<button type="button" class="btn btn-link" style="background-color:white;color:#336600;border: solid #336600 1px;position:relative;margin-left:90%;"><span style="">See more</span></button>
<br>
<br>

</div>


</aside>




</article>
<br>
<button type="button" class="btn btn-link" style="background-color:white;color:#336600;border: solid #336600 1px;position:relative;margin-left:87%;"><span style="">More cours</span></button>
<br>
<br>



		<br>
		<br> 
		<hr>

@endsection