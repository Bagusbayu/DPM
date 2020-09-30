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
            
              <span>About Our University</span>
            </h2>
          </div>
          <div class="col-lg-8">
          @foreach($data as $datas)
            <p class="lead"> {{{$datas->about}}} </p>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe necessitatibus rem debitis architecto dolore? Nam omnis sapiente placeat blanditiis voluptas dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas beatae aliquam?</p> -->
            @endforeach
            <p><a href="/vm_poltekes">Read more</a></p>
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
                <span class="position mb-3 d-block">{{$okes->jurusan}} , {{$okes->angkatan}}</span>    
                <p>{{$okes->jabatan}}</p>
              </div>
            </div>
          </div>
          @endforeach
          <!--<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Personalize Learning</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Trusted Courses</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Tools for Students</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div> 
          </div> -->
        </div>
      </div>
    </div>

<div class="site-section">
  <div class="container">


    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-6 mb-5">
        <h2 class="section-title-underline mb-3">
          <a href="/ormawa"><span>ORMAWA</span></a>
        </h2>
        <p></p>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
          <div class="owl-slide-3 owl-carousel">
          @foreach($apa as $apas)
              <div class="course-1-item">
                <figure class="thumnail">
                  <a href="course-single.html"><img src="{{ url('uploads/file/'.$apas->file) }}" alt="Image" class="img-fluid"  style="width:349.98px;height:233.13px;"></a>
                  <!-- <div class="price">$99.00</div> -->
                  <div class="category"><h3>{{$apas->nama}}</h3></div>  
                </figure>
                <div class="course-1-content pb-4">
                 <!--  <h2>How To Create Mobile Apps Using Ionic</h2>  -->
                  <div class="rating text-center mb-3">
                   <!-- <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span> -->
                  </div>
                  <p class="desc mb-4">{{$apas->deskripsi}}</p>
                  <!--<p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p> -->
                </div>
              </div>
              @endforeach
  <!--
              <div class="course-1-item">
                <figure class="thumnail">
                  <a href="course-single.html"><img src="assets/images/course_2.jpg" alt="Image" class="img-fluid"></a>
                < <div class="price">$99.00</div>
                  <div class="category"><h3>Web Design</h3></div>  
                </figure>
                <div class="course-1-content pb-4">
                  <!-- <h2>How To Create Mobile Apps Using Ionic</h2>
                  <div class="rating text-center mb-3"> 
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                  <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                  <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                </div>
              </div>
  
              <div class="course-1-item">
                <figure class="thumnail">
                  <a href="course-single.html"><img src="assets/images/course_3.jpg" alt="Image" class="img-fluid"></a>
                <!--  <div class="price">$99.00</div>
                  <div class="category"><h3>Arithmetic</h3></div>  
                </figure>
                <div class="course-1-content pb-4">
                <!--  <h2>How To Create Mobile Apps Using Ionic</h2> 
                  <div class="rating text-center mb-3"> <!--
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                  <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                  <p><a href="courses-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                </div>
              </div>

              <div class="course-1-item">
                <figure class="thumnail">
                    <a href="course-single.html"><img src="assets/images/course_4.jpg" alt="Image" class="img-fluid"></a>
                  <!--<div class="price">$99.00</div>
                  <div class="category"><h3>Mobile Application</h3></div>  
                </figure>
                <div class="course-1-content pb-4">
                <!--<  <h2>How To Create Mobile Apps Using Ionic</h2>
                  <div class="rating text-center mb-3"> <!--
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div> 
                  <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                  <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                </div>
              </div>
  
              <div class="course-1-item">
                <figure class="thumnail">
                    <a href="course-single.html"><img src="assets/images/course_5.jpg" alt="Image" class="img-fluid"></a>
                  <!-- <div class="price">$99.00</div>
                  <div class="category"><h3>Web Design</h3></div>  
                </figure>
                <div class="course-1-content pb-4">
                  <!-- <h2>How To Create Mobile Apps Using Ionic</h2>
                  <div class="rating text-center mb-3"> <!--
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                  <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                  <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                </div>
              </div>
  
              <div class="course-1-item">
                <figure class="thumnail">
                    <a href="course-single.html"><img src="assets/images/course_6.jpg" alt="Image" class="img-fluid"></a>
                 <!-- <div class="price">$99.00</div>
                  <div class="category"><h3>Mobile Application</h3></div>  
                </figure>
                <div class="course-1-content pb-4">
                  <!-- <h2>How To Create Mobile Apps Using Ionic</h2>
                  <div class="rating text-center mb-3"><!-- 
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                  <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                  <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                </div>
              </div> -->
  
          </div>
  
      </div>
    </div>

    
    
  </div>
</div>


<!--
<div class="section-bg style-1" style="background-image: url('assets/images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-mortarboard"></span>
            <h3>Our Philosphy</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-school-material"></span>
            <h3>Academics Principle</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
              Dolore, amet reprehenderit.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-library"></span>
            <h3>Key of Success</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
              Dolore, amet reprehenderit.</p>
          </div>
        </div>
      </div>
    </div>
-->

<div class="news-updates">
      <div class="container">
         
        <div class="row">
          <div class="col-lg-9">
             <div class="section-heading">
              <h2 class="text-black">Advo News</h2>
              <a href="/advonews_dpm">Read All News</a>
            </div>
            <div class="row">
              <div class="col-lg-6">
              @foreach($bos as $boss)
                <div class="post-entry-big">
                  <a href="news-single.html" class="img-link"><img src="{{ url('uploads/file/'.$boss->pict) }}" alt="Image" class="img-fluid"></a>
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
                  <a href="news-single.html" class="img-link mr-4"><img src="{{ url('uploads/file/'.$wars->pict) }}" alt="Image" class="img-fluid" style="width:90px;height:89.77px"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <!-- <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span> -->
                      <h3 class="post-heading"><a href="news-single.html">{{$wars->judul}}</a></h3>
                      
                    </div>
                    <a href="{{ url('uploads/file/'.$wars->file) }}">Download File</a>
                  </div>
                </div> @endforeach
<!--
                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="news-single.html" class="img-link mr-4"><img src="assets/images/blog_2.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                  </div>
                </div>

                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="news-single.html" class="img-link mr-4"><img src="assets/images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
         <div class="col-lg-3">
            <div class="section-heading">
              <h2 class="text-black">Pemira</h2>
              <a href="/pemira_dpm">Read All</a>
            </div>
            <div class="col-lg-6">
            @foreach($gas as $gass)
            <img src="{{ url('uploads/file/'.$gass->pict) }}" alt="Image" class="img-fluid" style="width:90px;height:89.77px">
            @endforeach
            </div>
            <!--
            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                <span class="play">
                  <span class="icon-play"></span>
                </span>
                <img src="assets/images/course_5.jpg" alt="Image" class="img-fluid">
              </a> -->
          </div>
        </div>
      </div>
    </div>

@endsection