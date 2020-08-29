@extends('template')
@section('title','Produk Hukum')
@section('content')
<div class="site-section site-blocks-cover">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Produk Hukum</span>
            </h2>
          </div>
        </div>
        
        <div class="row">
        @foreach($data as $datas)
         <div class="col-lg-2 col-md-3">
         </div>
        <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
             
              <div class="feature-1-content">
                <h2>{{$datas->nama}}</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p> -->
                <p><a href="{{ url('uploads/file/'.$datas->file) }}" class="btn btn-primary px-4 rounded-0">Download</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3">
         </div>
        @endforeach
        </div>


<!--
        <div class="row">
         <div class="col-lg-2 col-md-3">
         </div>
          <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              
              <div class="feature-1-content">
                <h2>Produk 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Download</a></p>
              </div>
            </div> 
          </div>
          <div class="col-lg-2 col-md-3">
         </div>

        </div>
        
        <div class="row">
         <div class="col-lg-2 col-md-3">
         </div>
          <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              
              <div class="feature-1-content">
                <h2>Produk 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Download</a></p>
              </div>
            </div> 
          </div>
          <div class="col-lg-2 col-md-3">
         </div>
        </div>
-->
            <div class="text-center">
                {!! $data->links(); !!}
            </div>
        
      </div>
    </div>
    @endsection