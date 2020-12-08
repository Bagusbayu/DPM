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
              @foreach($d as $iyas)
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
            <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    

  </div>