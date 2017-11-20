
<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


  
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
  <script src="js/functionality.js"></script>
  
  
<style>

.block{
	background: #22283E;
}

ul {
    list-style: none;
    display: flex;
    word-spacing: 0px;
    padding: 3px 20%;
}

ul li {
    padding: 5px 26px;
	color: white;
}

.case-menu{
	
    display: block;
    background: #22283E;

}

.block .para p{
	text-align: center;
	color: white;
}

.block .para{
	
    display: block;
    background: #22283E;
    margin-top:-21px;
}

.block .para p {
    color: white;
    font-size: 162%;
    margin-top: -10%;
   
}

.img-content{
	background: #f5f5f5;
}

.img-content p{
	text-align: center;
	color: #646464;
	font-size: 25px;
}

.heading{
	color: white;
    margin: 19px 0px;
    padding: 5% 25%;
    font-family: sans-serif;
    font-size: 59px;
	font-weight: 100;
}

p{
	color: white;
    margin: 19px 0px;
    padding: 5% 25%;
    font-family: sans-serif;
}

.button {
    background-color: #0081ba;
    color: #fff !important;
    border: none;
    cursor: pointer;
    display: inline-block;
    font-size: 15px;
    font-weight: 600;
    font-family: Proxima,Helvetica,sans-serif;
    line-height: 17px;
    padding: 20px 75px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-radius: 3px;
    transition: background-color .2s;
	text-decoration: none;
}

.btn1 {
    background-color: #ffffff;
    color: #0081ba;
    border: none;
    cursor: pointer;
    display: inline-block;
    font-size: 15px;
    font-weight: 600;
    font-family: Proxima,Helvetica,sans-serif;
    line-height: 17px;
    padding: 20px 75px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-radius: 3px;
    transition: background-color .2s;
	text-decoration: none;
}



a.button {
    margin: -4% 30%;
}

a.btn1 {
    margin: 0px -29%;
}

body{
    display: block;
    margin: 0px;

}

.content {
    background: #22283E;
    display: block;
    height: 55%;
}
	
.cite-container {
    margin: -51px 40%;
	font-size: 21px;
	color: #646464;
}
img.quote-headshot{
	    border-radius: 50px;
    margin: -4% 34%;
}	
	.img-content{
		background: #f5f5f5;
    height: 70%;
	}
	
</style>
 
  </head>
  
 <body> 
 
 <div class="content">

<div class="case-menu">
   <ul>
      <li>Products</li>
	  <li>Customers</li>
	  <li>Services</li>
	  <li>Buy Now</li>
	  <li>Resources</li>
	  <li>Careers</li>
     <li>SIGN UP</li>
	 <li>LOG IN</li>
   
   </ul>
</div>

<div class="block">

<div class="para">



<h1 class="heading">Our Customers</h1>
<p>Learn how our customers use the world’s leading Experimentation
Platform to deliver exceptional experiences to their visitors.</p>



<a href="#" smooth-scroll="" class="button">Read Case Studies</a>


<a class="btn1" href="#">Watch ►</a>

</div>

</div>


<div class="img-content">

<div class="cont">
<p>We’re trying to take a stressful, painful experience and make it as easy as possible, and Optimizely helps us do that.</p>

</div>
<div class="quote">
        <img class="quote-headshot" src="04.jpg" height="95" width="95">
        <div class="cite-container">
          <cite>Mike Cruz,</cite>
          <cite>VP of Engineering at Trunk Club</cite>
        </div>
      </div>

</div>

</div>
</body>