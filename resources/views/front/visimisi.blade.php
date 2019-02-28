@extends('layouts.web')


@section('styles')
<style type="text/css">
  
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
    <li>Beranda</li>
    <li class="active">Visi Misi</li>
  </ul>
<div class="container" style="padding-bottom: 140px;float: none; margin: 0 auto;">
<div class="page-header">
    <h3>VISI DAN MISI</h3>
</div>

 
  <div class="row">
    <div class="col-md-12 wow slideInUp"  data-wow-duration="2s" >
     
        <div class="col-md-4 box-in">
           <i class="fa fa-low-vision" style="font-size: 90px"></i>
        </div>
        <div class="col-md-8">
          <div class="well">
          <h3>VISI</h3>
          {!! $visimisi[0]->Visi !!}
          </div>
        </div>
      
    </div>

    <div class="col-md-12 wow slideInUp"  data-wow-duration="4s">
      <div class="col-md-8">
        <div class="well">
          <h3>MISI</h3>
          {!! $visimisi[0]->Misi !!}
        </div>
      </div>

      <div class="col-md-4 box-in pull-right">
           <i class="fa fa-tasks" style="font-size: 90px"></i>
      </div>
      
    </div>
    <div class="col-md-12 wow slideInUp"  data-wow-duration="4s">
       <div class="col-md-4 box-in">
           <i class="fa fa-bullseye" style="font-size: 90px"></i>
        </div>
      <div class="col-md-8">
      <div class="well">
        <h3>TUJUAN</h3>
        {!! $visimisi[0]->Tujuan !!}
      </div>
    </div>
    </div>
  </div>
  
</div>
@endsection