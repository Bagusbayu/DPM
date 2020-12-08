@extends("template")
@section('title','DPM Poltekkes Kemenkes Semarang')
@section("content")

<div class="hero-slide owl-carousel site-blocks-cover">
@foreach($iya as $iyas)
      <div class="intro-section" style="background-image: url({{ url('uploads/file/'.$iyas->pict) }});">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>{{$iyas->judul}}</h1>
            </div>
          </div>
        </div>
      </div>

     <!--  <div class="intro-section" style="background-image: url('assets/images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>You Can Learn Anything</h1>
            </div>
          </div>
        </div>
      </div>  -->
@endforeach
    </div>

<div class="section-bg style-1 site-blocks-cover" style="background-image: url('assets/images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
            
              <span>About Our Campus</span>
            </h2>
          </div>
          <div class="col-lg-8">
          @foreach($data as $datas)
            <p class="lead"> {!!$datas->about!!} </p>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe necessitatibus rem debitis architecto dolore? Nam omnis sapiente placeat blanditiis voluptas dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas beatae aliquam?</p> -->
            @endforeach
            <p><a href="/vm_poltekes">Read more</a></p>
          </div><br>
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
            
              <span>About DPM</span>
            </h2>
          </div>
          <div class="col-lg-8">
          @foreach($oi as $ois)
            <p class="lead"> {!!$ois->about!!} </p>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe necessitatibus rem debitis architecto dolore? Nam omnis sapiente placeat blanditiis voluptas dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas beatae aliquam?</p> -->
            @endforeach
            <p><a href="/vm_dm">Read more</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <a href="/struktur_dpm"><span >Struktur Anggota</span></a>
            </h2>
          </div>
        </div>
        <div class="row">
        @foreach($oke as $okes)
       <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
                <img src="{{ url('uploads/file/'.$okes->pict) }}" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>{{$okes->nama}}</h2>
                <span class="position mb-3 d-block"> {{$okes->angkatan}}, {{$okes->jurusan}}</span>    
                <p>{{$okes->jabatan}}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>


<div class="news-updates">
      <div class="container">
         
        <div class="row">
          <div class="col-lg-9">
             <div class="section-heading">
              <h2 class="text-black">Press Release</h2>
              <a href="/aktivitas_dpm">Read All News</a>
            </div>
            <div class="row">
              <div class="col-lg-6">
              @foreach($bos as $boss)
                <div class="post-entry-big">
                  <a href="#" class="img-link"><img src="{{ url('uploads/file/'.$boss->file) }}" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta"> 
                      <!-- <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>  -->
                      <h3 class="post-heading">
                      <a href="#">{{$boss->judul}}</a></h3>
                      
                    </div>
                    <a href="{{ url('uploads/file/'.$boss->file) }}"> Download File </a>
                  </div>
                </div>@endforeach
              </div>
              <div class="col-lg-6">
              @foreach($war as $wars)
                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="#" class="img-link mr-4"><img src="{{ url('uploads/file/'.$wars->file) }}" alt="Image" class="img-fluid" style="width:90px;height:89.77px"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <!-- <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span> -->
                      <h3 class="post-heading"><a href="#">{{($wars->judul)}}</a></h3>
                      <h6>{!! substr($wars->deskripsi, 0, 25) !!}{{ strlen($wars->deskripsi) > 25 ? "..." : "" }}</h6>
                      <a href="/aktivitas_dpm">Read More</a>
                    </div>
                    <a href="{{ url('uploads/file/'.$wars->file) }}">Download File</a>
                  </div>
                </div> @endforeach

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

<div class="site-section site-blocks-cover">
      <div class="container">
        <<div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <a href="/advonews_dpm"><span >Advo News</span></a>
            </h2>
          </div>
        </div>
        
        <div class="row">
        @foreach($war as $wars)
         <div class="col-lg-2 col-md-3">
         </div>
        <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
             
              <div class="feature-1-content">
                <h2>{{$wars->judul}}</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p> -->
                <p><a href="{{ url('uploads/file/'.$wars->file) }}" class="btn btn-primary px-4 rounded-0">Download</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3">
         </div>
        @endforeach
        </div>
      </div>
    </div>

     <div class="section-bg style-1" style="background-image: url('assets/images/IMG_12.JPG');">
        <div class="container">
        <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span></span>
                    </h2>
                    
        </div>
   </div>
      </div>

<div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="assets/images/dpm144.png" alt="Image" class="img-fluid"></p>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p> -->  
            <p><a href="/vm_poltekes">Learn More</a></p>
            <div class="ml-auto">
            <div>
              <a href="https://www.poltekkes-smg.ac.id/"><span class="icon-globe" style="font-size:36px"></span></a>&nbsp;&nbsp;
              <a href="https://pemirapolkesmar.com"><span class="fas fa-globe" style="font-size:36px"></span></a>&nbsp;&nbsp;
              <a href="http://twitter.com/dpmpolkesmar"><span class="icon-twitter" style="font-size:36px" ></span></a>&nbsp;&nbsp;
              <a href="https://www.instagram.com/dpmpoltekkessemarang/"><span class="icon-instagram" style="font-size:36px"></span></a>&nbsp;&nbsp;
              <a href="https://www.instagram.com/pemirapolkesmar/"><span class="icon-instagram" style="font-size:36px"></span></a>&nbsp;&nbsp;
              <a href="https://www.youtube.com/channel/UCi5CXDhtTd8kntsueNR_k6A"><span class="fab fa-youtube" style="font-size:36px"></span></a>&nbsp;&nbsp;
              <a href="https://www.youtube.com/channel/UCaraex2a8A8T0M8R8yebTdw"><span class="fab fa-youtube" style="font-size:36px"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>About Us</span></h3>
            <ul class="list-unstyled">
                <li><a href="/vm_poltekes">Visi & Misi Poltekkes Kemenkes Semarang</a></li>
                <li><a href="/vm_dm">Visi & Misi DPM</a></li>
                <li><a href="/struktur_dpm">Struktur Anggota DPM</a></li>
                <li><a href="/kbm">KBM</a></li>
                <li><a href="/produk_hukum">Produk Hukum</a></li>
                <li><a href="/aspirasi_dpm">Kanal Aspirasi</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Visit Us</span></h3>
              
              <ul class="list-unstyled">
              @foreach($dat as $iyas)
              <li><a>{!!$iyas->contact!!}</a></li>
                  <!--
                  <li><a href="#">Science &amp; Engineering</a></li>
                  <li><a href="#">Arts &amp; Humanities</a></li>
                  <li><a href="#">Economics &amp; Finance</a></li>
                  <li><a href="#">Business Administration</a></li>
                  <li><a href="#">Computer Science</a></li>-->
                  @endforeach
              </ul>
              
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
              @foreach($da as $iyas)
                  <li><a>{!!$iyas->contact!!}</a></li>
                  <!-- <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li> -->
                  @endforeach
              </ul>
          </div>
        </div>

@endsection