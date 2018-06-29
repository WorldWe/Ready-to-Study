@extends('layouts.loginmaster')

@section('content_1')

<title>Data analytic</title>
<article style="border-top:  0.5px #336600 outset;background-color: #ebebeb">
  

    <nav style="border: 0.25px #f5f5f5 solid; background-color:#ffffff; width: 1100px;height: 400px;border-radius:10px;  margin-left: 5%;">

  <div style="display: flex; flex-direction: row; position: relative; padding: 0.5em;">
    

<a href="{{ url('accueil')}}; "> Home  </a>

  <p> &gt; </p>
  <a href="file:///C:/Users/pc/Desktop/MOOC%201/BOOT.html">   All categories </a>
  <p> &gt; </p>
  <a href="file:///C:/Users/pc/Desktop/MOOC%201/BOOT.html"> IT </a>
  <p> &gt; </p>
  <a href="file:///C:/Users/pc/Desktop/MOOC%201/BOOT.html"> DATA analytics </a>

</div>



<aside style="display: flex; flex-direction: row; position: relative; min-height: 100vh; padding: 0.12em;margin-left: 75px; ">
<div style="height: 700% ;display: flex; flex-direction: column; position: relative;;">
    <img src="images/business.jpg" style="width:250px ;height:200px; border:  0.75px #336600 outset;">
    <img src="images/ee.png" style="width: 225px;height: 100px;position: relative;padding: 1em;margin-left: 10px;">
</div>
<div style="display: flex; flex-direction: column; position: relative; padding: 0.5em;float: center;margin-right: 150px;">
    <h2>DATA ANALYTICS</h2>
    <h5 style="display: flex;position: relative;padding: 1em;font-family: Comic Sans MS;">Learn how statistics plays a central role in the data science approach.</h5>
</div>
<div style="display: flex; flex-direction: column; position: relative;margin-right: 100px;margin-top:  100px;">
    <button type="button" class="btn btn-primary btn-lg" style="background-color: #336600">Starting SOON...</button>
</div>
</aside>

  </nav>
  <br>
  <aside style="display: flex; flex-direction: row; position: relative; min-height: 100vh; padding: 0.12em;">
  <nav style="border: 0.50px #737373 solid; background-color:#ffffff; width: 750px;height: 1100px;  margin-left: 7%;">
    <h4 style="font-family: Arial black;font-size: 0.8; position:relative;padding: 3em;">About this course</h4>
      <br>
      <p style="font-family: Times New Roman;font-size: large; position:relative;margin-top: -55px;margin-right: 30px;margin-left: 30px;">     This statistics and data analysis course will pave the statistical foundation for our discussion on data science.

You will learn how data scientists exercise statistical thinking in designing data collection, derive insights from visualizing data, obtain supporting evidence for data-based decisions and construct models for predicting future trends from data.</p>



<h4 style="font-family: Arial black;font-size: 0.8; position:relative;padding: 3em;">What you'll learn</h4>
      <br>
      <ul style="font-family: Times New Roman;font-size: large; position:relative;margin-top: -75px;margin-right: 30px;margin-left: 30px;">  
        <li>Data collection, analysis and inference</li>
        <li>Data classification to identify key traits and customers</li>
        <li>Conditional Probability-How to judge the probability of an event, based on certain conditions</li>
        <li>How to use Bayesian modeling and inference for forecasting and studying public opinion</li>
        <li>Basics of Linear Regression</li>
         </ul>

      <h4 style="font-family: Arial black;font-size: 0.8; position:relative;padding: 3em;">Meet the instructors</h4>
      <div style="display: flex; flex-direction: row; position: relative; min-height: 100vh; padding: 0.12em;margin-right: 75px;margin-left: 15px;">
        <div style="display: flex; flex-direction: column; position: relative; min-height: 100vh; padding: 0.12em;margin-left: 15px;">
          <img src="images/and.png" style="width: 100px;height: 100px;-moz-border-radius: 50px;-webkit-border-radius: 50px;border-radius: 50px;margin-top: -35px;">
          <p style="font-family: Arial black;font-size: 0.5; position:relative;margin-left: -15px;">Andrew Gelman</p>
          <p style="font-family: Arial;font-size: 15px; position:relative;margin-left: -20px;margin-right: 15px"> Professor of Statistics <br>and Political Science</p>
        </div>
        <div style="display: flex; flex-direction: column; position: relative; min-height: 100vh; padding: 0.12em;margin-left: 300px;">
          <img src="images/an.png" style="width: 100px;height: 100px;-moz-border-radius: 50px;-webkit-border-radius: 50px;border-radius: 50px;margin-top: -35px;">
          <p style="font-family: Arial black;font-size: 0.5; position:relative;margin-left: -15px;margin-right:15px; ">Lauren Hannah</p>
          <p style="font-family: Arial;font-size: 15px; position:relative;margin-left: -15px;margin-right: 15px"> Assistant Professor in   <br> the Department of Statistics</p>
        </div>
      </div>
    
  </nav>
 <nav style="border: 0.50px #737373 solid; background-color:#ffffff; width: 275px;height: 375px;margin-left: 3%;">
   <table>
<tbody><tr style="height: 50px;">
<td>Lenght:</td>
<td>5weeks</td>

</tr>
<tr style="height: 50px;">
<td>Effore:</td>
<td>7 to 10 hours per week</td>
</tr>
<tr style="height: 50px;">
<td>Price:</td>
<td>FREE</td>
</tr><tr style="height: 50px;">
<td>Institution:</td>
<td>université de LILLE</td>
</tr>
<tr style="height: 50px;">
<td>Level:</td>
<td>Introductory</td>
</tr>
<tr style="height: 50px;">
<td style="position: relative;margin-left: 2%;">Language:</td>
<td>French</td>
</tr>
<tr style="height: 50px; position: relative;padding: 0.5em;">
<td>Vidéo Transcript:</td>
<td>French</td>
</tr>

</tbody></table>
 </nav>
  </aside>
 
</article>
<hr> 
@endsection