@extends('template')
@section('title','struktur Kepemimpinan DPM')
@section('content')




<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Struktur Kepemimpinan DPM</h2>
              <p>Gambaran seluruh struktur kepemimpinan dan anggota dari DPM</p>
            </div>
          </div>
        </div>
      </div> 

<div class="site-section">
      <div class="container"> 
        <div class="row">
        @foreach($data as $datas)
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

            <div class="feature-1 border person text-center">
                <img src="{{ url('uploads/file/'.$datas->pict) }}" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>{{$datas->nama}}</h2>
                <span class="position mb-3 d-block">{{$datas->jurusan}} , {{$datas->angkatan}}</span>    
                <p>{{$datas->jabatan}}</p>
              </div>
            </div>
          </div> 
        @endforeach

        </div>
      </div>  
    </div>


@endsection