@extends('template')
@section('title','Aspirasi')
@section('content')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Aspirasi</h2>
              <p>Halaman penyampaian aspirasi mahasiswa</p>
            </div>
          </div>
        </div>
      </div> 

      <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Name</label>
                    <input type="text" id="name" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">NIM</label>
                    <input type="text" id="nim" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email</label>
                    <input type="text" id="email" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Jurusan</label>
                    <input type="text" id="Jurusan" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Angkatan</label>
                    <input type="text" id="angkatan" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Send Message" class="btn btn-primary btn-lg px-5">
                </div>
            </div>
        </div>
    </div>

</div>

@endsection