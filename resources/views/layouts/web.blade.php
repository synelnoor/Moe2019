<html>
<head>
    <title>FISIP Prof.Dr.Moestopo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/animated.css') }}">
       <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/font-awesome/css/font-awesome.min.css') }}">

 <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/ionicons/ionicons.min.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Allan" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allerta" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet">

   
<style >


/*==========================================
PRE LOADER 
==========================================*/

.preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fefefe;
    z-index: 99999;
    height: 100%;
    width: 100%;
    overflow: hidden !important;
}

.loaded {
    width: 60px;
    height: 60px;
    position: absolute;
    left: 50%;
    top: 50%;
    background-image: url({{asset('/img/preloading.gif')}});
    background-repeat: no-repeat;
    background-position: center;
    -moz-background-size: cover;
    background-size: cover;
    margin: -20px 0 0 -20px;
}
.disnone{
  display: none;
}
.header {
 /* background-color: #ffff;ff8604*
 background-color: #f1f1f1;
  /*
background-image: linear-gradient(315deg, #d9d9d9 0%, #f6f2f2 74%);*/
/*background: #ECE9E6;  
background: -webkit-linear-gradient(to left, #FFFFFF, #ECE9E6);  
background: linear-gradient(to left, #FFFFFF, #ECE9E6); 
*/
  background-color:  #ffff;
  padding: 20px;
  text-align: left;
  box-shadow: 0 12px 12px 0;
  
}

ul.subscribe-stuff-up {
    list-style: none;
    margin: 0;
    padding: 0;
    
}
ul.subscribe-stuff-up li {
    float: left;
    margin: 0 3px 12px 0;
    padding: 5px;
    /* box-shadow: 0 2px 0px 0;*/
}
ul.subscribe-stuff-up li img {
    padding: 0;
    margin: 0;
    border: none;
    background: none;
}
ul.subscribe-stuff-up  li a{
  color: #ff8604;
}
ul.subscribe-stuff-up  li a:hover{
  color: red;
}


#navbar {
  font-family: 'Molengo', Georgia, Times, serif;
 font-size: 50px;
 line-height: 20px;
  /* overflow: hidden; #ff8604;*/
  background-color: #333;
  /*background-image: linear-gradient(to right, #ff8604 , #feb465);*/
  z-index: 2;
 box-shadow: 0 4px 8px 0;
   margin: 0 auto;
   /*border-bottom: 1px solid rgba(0, 0, 0, 0.05);*/
}
.navbar-brand{
    /*background-color: #ff8604;*/
}

#navbar a {
  float: center;
  display: block;
   color: #ff8604; 
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 12px;
  /*border-right:  2px solid #feb465;*/
}

#navbar a:hover {
  background-color: #feb465;
  color: black;
  border-bottom: 3px solid red;
}
#navbar i{

    color: #ff8604;
}
#navbar a:hover  i{
  
    color: red;
}

#navbar a.active {
  background-color: #feb465;
  color: #000;
}
.navbar-inverse {
    background-color: #ff8604;
    font-size:14px;
    color: #000;
    text-align: center;

}
.navbar {
    
    margin-bottom: 5px;
    border: 0px solid transparent;
}

.navbar-toggle.collapsed{
    background-color: #feb465;
}
.navbar-toggle .icon-bar {
    background-color: #000;

}
.dropdown-menu{

    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;
    display: none;
    float: left;
    min-width: 190px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color:   #f2f2f2;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
   
}
.nav.navbar-nav a{
    color:#000;
}
.dropdown-menu a{
    color:#000;
}

/* .dropdown:hover > .dropdown-menu>li>a {
    display: block;
    height: 50px;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
    z-index:100;
} */


.navbar-list a {
  color: black;
  text-decoration: none;
}




.sticky {
  background-color: #ff8604 !important;
  position: fixed;
  top: 0;
  width: 100%;
}
.sticky i{
  color: red !important;
}
.sticky a{
  color: #000 !important;
}

.sticky + .content {
  padding-top: 60px;
}
.hide{
    display:none;
}
/*transition*/
@import "compass/css3";
.module {
  /*width: 48%;
  min-height: 200px;*/
  background: #000;
  position: relative;
  float: left;
  /*padding: 20px;*/
  /*margin-right: 4%;
  margin-bottom: 4%;*/
  &:nth-child(even) {
    margin-right: 0;
  }
  box-shadow: 0 1px 3px rgba(black, 0.2);
  /*transform: translateY(100px);*/
  transform: translate3d(0, 100px, 0);
  /* added translateY position to module to prevent the module loading at 0 then jumping down before sliding up (on mobile) */
  /* replaced translateY with translate3d for iOS hardware-acceleration*/
}


 
.come-in {
  /*transform: translateY(100px);*/
  transform: translate3d(0, 100px, 0);
  animation: come-in 4.8s ease forwards;
}
.come-in:nth-child(odd) {
  animation-duration: 5.6s;
}
.already-visible {
  /*transform: translateY(0);*/
  transform: translate3d(0, 0, 0);
  animation: none;
}

@keyframes come-in {
  to { transform: translate3d(0, 0, 0); }
}


a{
  color: #ff8604;
}
a:hover{
  color: red;
}

.box-reg{
  height: 300px; width: 100%; background: black;
   border: 2px solid red;
  padding: 10px;
  border-radius: 25px;
}
.box-ar{
  /*height: 300px; width: 100%; background: black;*/
  margin-left: auto; 
  margin-right:auto; 
  margin-top: 20px;
  margin-bottom: 20px;
   /*background-color: #000;*/
   
}
.box-in{
  text-align: center;
  border: 1px solid yellow;
  padding: 10px;
  border-radius: 30px;
  background-color: #ff8604;
  box-shadow: 0 4px 8px 0;
}
.box-ar i{
  color:#fff;
}
.box-ar a:hover i{
  color:red;
}
.box-ar a:hover p{
  color:red;
}
.box-ar p{
  color:#fff;
  font-size: 40px;
  font-family: 'Molengo', Georgia, Times, serif;
}
.artik{
   /*box-shadow: 0 4px 8px 0*/;
   background-color:#f1f1f1; 
   border-bottom: 1px solid #ccc;
   padding: 10px;
}
/*event*/
.row-striped:nth-of-type(odd){
  background-color: #ffff;
  border-left: 4px #ff8604 solid;
}

.row-striped:nth-of-type(even){
  background-color: #ffffff;
  border-left: 4px #efefef solid;
}

.row-striped {
    padding: 15px 0;
}

</style>
@yield('styles')
        
    
</head>
<body style="overflow: hidden;">
  <div id="lood" class='preloader'><div class='loaded'>&nbsp;</div></div>
    
{{--@include('includes.navbar2')--}}
    
    
            
     @include('includes.menav')
          

   
   <div class="content">
    <div class="container-fluid" style=" margin-bottom: 0px; margin-top: 0px;">
        <div class="row">
            
            
                @yield('content')

               

            
        </div>
    </div>
    </div>


  @include('includes.prafooter')

  <div id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; FISIP UNIVERSITAS PROF.DR.MOESTOPO(BERAGAMA) </p>
            </div>
        </div>
    </div>
</div>





    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript"src="{{asset('js/owl.carousel.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
              <script>
              new WOW().init();
              </script>
   

   <script type="text/javascript">
     var load = document.getElementById("lood");
     setTimeout(function(){ 
      load.classList.add("disnone");

      }, 1000);
   </script>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

var brand = document.getElementById("brand");

var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
    //brand.classList.add("hide");
  }
}
</script>

<script>
$('ul.nav li.dropdown').hover(function() {
    //console.log('hoew')
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>





@yield('scripts2')
</body>
</html>

