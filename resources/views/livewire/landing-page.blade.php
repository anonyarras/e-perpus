
  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Lihat List <em>Buku</em> Kami </h2>
          </div>
        </div>
      </div>
      <div class="row">
          @foreach ($buku as $b )


        <div class="col-lg-3 col-sm-6">

            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>{{$b->judul}}</h4>
                <p>{{$b->kategori->nama_kategori}}</p>
              </div>
              <div class="showed-content">
                <img src="{{asset('storage/buku')}}/{{$b->image}}" class=""  alt="">

              </div>
            </div>

        </div>
        @endforeach
      </div>
    </div>
  </div>

