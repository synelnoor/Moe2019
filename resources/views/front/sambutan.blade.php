@extends('layouts.web')

@section('styles')
<style type="text/css">
  
.well{
   /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
   box-shadow: 0 4px 8px 0;
}

</style>
@endsection
@section('content')

		<ul class="breadcrumb">
		<li>Beranda</li>
		<li class="active">Sambutan</li>
		</ul>

		<div class="container">
			<div class="col-md-12" align="center" >
			  <h3 align="center" >SAMBUTAN PIMPINAN FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</h3>
			</div>
		
	
			<!-- <div class="col-md-4" style="padding-top: 50px; padding-right: 385px; padding-top: 20px;">	
			<div class="col-lg-3" align="center">
			 	<img class="img-circle" src="{{asset('/img/pimpinan/Himsar.jpg')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
			 	<h3>DEKAN</h3>
          		<p>Dr.Himsar Silaban, MM</p>	
			</div>
			</div>   -->

			
				<div class="col-md-12 wow slideInUp"  data-wow-duration="3s" align="center">
					<div class="col-md-3" style="float: none; margin: 0 auto;" >
						
						<img class="img-circle" src="{{$dos->file}}" style="width: 80%;" />
						<h3>{{$dos->jabatan}}</h3>
          				<p>{{$dos->nama}}</p>	
					</div>
				</div>
			


			<div class="col-md-12 wow slideInUp"  data-wow-duration="4s" align="center" style="padding-bottom: 30px;">
				<div class="well">
				<h2 align="center"><font size="5">{{$sam[0]->judul}}</font></h2>
				<p><font size="4">{{$sam[0]->sambutan}}</font></p>
				
				</div>
			</div>

</div>
@endsection
