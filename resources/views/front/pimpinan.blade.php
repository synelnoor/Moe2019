@extends('layouts.web')

@section('styles')
<style type="text/css">
  .i-am-centered { margin: auto; max-width: 300px;}
.center {
    margin: 0 auto;
    width: 80%;
}
.well{
   /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
   box-shadow: 0 4px 8px 0;
}
/*.col-md-3{
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}*/
</style>
@endsection

@section('content')

	<ul class="breadcrumb">
		<li>Profil</li>
		<li class="active">Pimpinan</li>
	</ul>


	<div class="container">

	 <h3>PIMPINAN FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</h3>
	<!-- Three columns of text below the carousel -->
      <div class="row "> 
        <div class="col-md-4 wow slideInUp"  data-wow-duration="2s" align="center" style="float: none; margin: 0 auto;" >
          <div class="well">
          @foreach($l1c1 as $it1)
            <img class="img-circle" src="{{$it1->file}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
            <h3>{{$it1->jabatan}}</h3>
            <p>{{$it1->nama}} </p>
          @endforeach
          
         </div>
        </div><!-- /.col-lg-4 -->  
      </div><!-- /.row -->
     
       <div class="row"  >
        @foreach($l2 as $it2)
        <div class="col-md-4  wow slideInUp"  data-wow-duration="3s" align="center" >
          <div class="well">
           <img class="img-circle" src="{{$it2->file}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h3>{{$it2->jabatan}}</h3>
          <p>{{$it2->nama}} </p>
         </div>
        </div><!-- /.col-md-4 --> 
        @endforeach
      </div><!-- /.row -->


      

       <div class="row">
      
      @foreach($l3 as $it3)
        <div class="col-md-3  wow flipInX"   align="center">
        <div class="well">
           <img class="img-circle" src="{{$it2->file}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h3>{{$it3->jabatan}}</h3>
          <p>{{$it3->nama}} </p>
         </div>
        </div><!-- /.col-md-4 --> 
        @endforeach
      
      
      </div><!-- /.row -->

     </div>
@endsection