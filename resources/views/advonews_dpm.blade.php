@extends('template')
@section('title','Advonews')
@section('content')

<div class="news-updates site-blocks-cover">
      <div class="container">
         
        <div class="row">
          <div class="col-lg-12">
             <div class="section-heading">
             <!-- <a href="#">Read All News</a> -->
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="post-entry-big">
              <h2 class="text-black">Advo News</h2>
              @foreach($data as $datas)
                  <a href="#" class="img-link"><img src="{{ url('uploads/file/'.$datas->pict) }}" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta"> 
                      <!--<a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span> -->
                      <h3 class="post-heading"><a href="#">{{$datas->judul}}</a></h3>
                    </div>
                    <a href="{{ url('uploads/file/'.$datas->file) }}">Download File</a>
                  </div> @endforeach
                </div>
              </div>
              <div class="col-lg-6">
                <div class="post-entry-big horizontal d-flex mb-4">
                @foreach($iya as $iyas)
                  <a href="news-single.html" class="img-link mr-4"><img src="{{ url('uploads/file/'.$iyas->pict) }}" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                    <h3 class="post-heading"><a href="news-single.html">{{$iyas->judul}}</a></h3>
                      <!-- <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, --> <a href="{{ url('uploads/file/'.$iyas->file) }}">Download File</a>
                    </div>
                    @endforeach
                  </div>
                </div>
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

        </div>
      </div>
    </div>


@endsection