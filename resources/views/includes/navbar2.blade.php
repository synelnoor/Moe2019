
@section('styles')

<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header2 {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar2 {
  overflow: hidden;
  background-color: #333;
}

#navbar2 a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar2 a:hover {
  background-color: #ddd;
  color: black;
}

#navbar2 a.active {
  background-color: #4CAF50;
  color: white;
}

/* .content {
  padding: 16px;
} */

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
@endsection




<div class="header2">
  <h2>Scroll Down</h2>
  <p>Scroll down to see the sticky effect.</p>
</div>

<div id="navbar2">
  <a class="active" href="javascript:void(0)">Home</a>
  <a href="javascript:void(0)">News</a>
  <a href="javascript:void(0)">Contact</a>
</div>



@section('scripts2')
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar2");
console.log('nav',navbar)
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
@endsection