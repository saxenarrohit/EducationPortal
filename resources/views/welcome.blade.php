@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
$(".search").click(function(){
		
		$(".icon").hide();
		$(".search").attr("placeholder","");
	});
	$("body").click(function(evt){
		if(evt.target.className!="search")
		{
		var t=$(".search").val();
		
		if(t==""){
		$(".icon").show();
		var u="\xa0\xa0\xa0\xa0\xa0\xa0Search For Courses";
		$(".search").attr("placeholder",u);}}
	
	});
});
</script>

<header id="home" class="container-fluid">
        <div class="header-content">
            <div class="row">
                 <div class="header-content-inner col-lg-8 col-lg-offset-2  ">
                <h1>GET STARTED!</h1>
                <hr> 
                <div class="input-append">
                    <span>
					<span class='fa fa-search icon' style="font-size:26px;color:black;position:absolute;left:223px;top:110px"></span>
                         <input type="text"  class="search" placeholder="Search For Courses">
                     
                         <button class="btn-danger btn-lg search_btn">Search</button>
                    </span>
                </div>
                <h2>OR</h2>
                <h3><a href="{{ url('/browse') }}" style="color:#f05f40; font-weight: bolder; ">Browse the courses</a></h3>

            </div>
            </div>
           
        </div>
</header>


<section id="why">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Why Us?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">
                    <div class="service-box">
                        <img src="images/student2.jpe">
                        <h3>Characteristics</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">
                    <div class="service-box">
                         <img src="images/student2.jpe">
                        <h3>Characteristics</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et </p>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 text-center">
                    <div class="service-box">
                         <img src="images/student2.jpe">
                        <h3>Characteristics</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et </p>
                    </div>
                </div>
               
            </div>
        </div>
 </section>

 <!-- services section ends- -->

 <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Newly Added Courses</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <a href="#">
                    <div class="col-lg-3 col-md-3 col-sm-4  col-xs-6  text-center">
                        <div class="service-box panel">
                            <img src="images/project.jpg" >
                            <h3>Title</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et </p>
                        </div>
                    </div>
                </a>
           
               <a href="#">
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
                    <div class="service-box panel">
                        <img src="images/js.png">
                        <h3>Title</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et </p>
                    </div>
                </div>
               </a>

               <a href="#">
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
                        <div class="service-box panel">
                            <img src="images/project.jpg">
                            <h3>Title</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et </p>
                        </div>
                    </div>
               </a> 
                
                 <a href="#">
                   <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
                    <div class="service-box panel">
                        <img src="images/js.png">
                        <h3>Title</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et </p>
                    </div>
                </div>
               </a>
               
            </div>
        </div>
 </section>
 <div class="container">
<div class="col-lg-12 col-md-12 col-xm-12 col-sm-12" style="margin:0;font-size:15px;position:relative;bottom:100px">
  
  <div class="well row" style="background-color:white;height:30px;"><a href="#" style="position:relative;top:-10px;left:30px">Click here for all the courses......</a></div>
</div></div>
 <!-- Newly Added Courses END -->

 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Popular Courses</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
         <div class="container">
            <div class="row">
                <a href="#">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
                        <div class="service-box panel">
                            <img src="images/project.jpg" >
                            <h3>Title</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et </p>
                        </div>
                    </div>
                </a>
           
               <a href="#">
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
                    <div class="service-box panel">
                        <img src="images/js.png">
                        <h3>Title</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et </p>
                    </div>
                </div>
               </a>

               <a href="#">
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
                        <div class="service-box panel">
                            <img src="images/project.jpg">
                            <h3>Title</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et </p>
                        </div>
                    </div>
               </a> 
                
                 <a href="#">
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
                    <div class="service-box panel">
                        <img src="images/js.png">
                        <h3>Title</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et </p>
                    </div>
                </div>
               </a>
               
            </div>
        </div>
 

 <!-- Popular Courses END -->

 <section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <h2>Education Portal</h2>
            
                <p>Here we write about us.<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit.</p>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <h2 class="text-center">Quick Links</h2>
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-6">
                         <ul>
                            <li><a href="#"> Courses</a></li>
                            <li><a href="#"> Courses</a></li>
                            <li><a href="#"> Courses</a></li>
                            <li><a href="#"> Courses</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-6">
                         <ul>
                            <li><a href="#"> FAQ</a></li>
                            <li><a href="#"> Terms</a></li>
                            <li><a href="#"> Courses</a></li>
                            <li><a href="#"> Courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <h2>Contact Us</h2>
                Noida<br>
                Uttar Pradesh, India<br><br>
                +919999999999<br>
                abc@gmail.com<br><br>
                
            </div>
        </div>
        
    </div>
     
 </section>



@endsection

