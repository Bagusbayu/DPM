@extends('template')
@section('title','Ormawa Info')
@section('content')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">ORMAWA</h2>
              <p>daftar ORMAWA</p>
            </div>
          </div>
        </div>
      </div> 


      <div class="site-section"> 
        <div class="container">
       
            <div class="row">
            @foreach($data as $datas)
                <div class="col-lg-4 col-md-6 mb-4">
                
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="course-single.html"><img src="{{ url('uploads/file/'.$datas->file) }}" alt="Image" class="img-fluid" style="width:349.98px;height:233.13px;"></a>
                        
                        <div class="category"><h3><center>{{$datas->nama}}</center></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2><p class="desc mb-4">{{$datas->deskripsi}}</p></h2>

                        </div>
                    </div>
                    
                </div>
                @endforeach
 <!--               <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="course-single.html"><img src="assets/images/course_2.jpg" alt="Image" class="img-fluid"></a>
                        
                        <div class="category"><h3><center>Anggota Unknown</center></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2><p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p></h2>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="course-single.html"><img src="assets/images/course_3.jpg" alt="Image" class="img-fluid"></a>
                        
                        <div class="category"><h3><center>Anggota Unknown</center></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2><p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p></h2>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="course-single.html"><img src="assets/images/course_4.jpg" alt="Image" class="img-fluid"></a>
                        
                        <div class="category"><h3><center>Anggota Unknown</center></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2><p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p></h2>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="course-single.html"><img src="assets/images/course_5.jpg" alt="Image" class="img-fluid"></a>
                        
                        <div class="category"><h3><center>Anggota Unknown</center></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2><p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p></h2>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="course-single.html"><img src="assets/images/course_6.jpg" alt="Image" class="img-fluid"></a>
                        
                        <div class="category"><h3><center>Anggota Unknown</center></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2><p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p></h2>

                        </div>
                    </div>
                </div> -->
               

            </div>
        </div>
     </div>

@endsection