<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UB Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset_user/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/bootstrap-datepicker.css') }}">
    
    
    <link rel="stylesheet" href="{{ asset('asset_user/fonts/flaticon/font/flaticon.css') }}">
  
    <link rel="stylesheet" href="{{ asset('asset_user/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_user/css/jquery.fancybox.min.css') }}">
    

    <link rel="stylesheet" href="{{ asset('asset_user/css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/icon.png') }}">
    
    @laravelPWA
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">info@domain.com</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo"><a href="{{ route('template.index') }}">Unibraw</a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li>
                      <a href="#home-section" class="nav-link">Home</a>
                    </li>
                    <li>
                      <a href="#about-section" class="nav-link">Tentang UB</a>
                    </li>
                    <li>
                      <a href="#fakultas-section" class="nav-link">Fakultas</a>
                    </li>
                    <li>
                      <a href="#inventory-section" class="nav-link">Inventory</a>
                    </li>
                    <li>
                      <a href="#contact-section" class="nav-link">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover overlay" style="background-image: url({{ asset('images/unibraw.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5"id="home-section">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-8">
            <h1 class="text-uppercase">Universitas Brawijaya</h1>
            <span class="sub-text mb-3 d-block"><em>Universitas di Malang, Jawa Timur</em></span>
          </div>
        </div>
      </div>
    </div>  

    
    <div class="site-section  border-bottom">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="far fa-building" style="font-size: 62px;"></span></div>
              <div class="media-body">
                <h5 class="mt-0">{{$fakultas}}</h5>
                Fakultas
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="fas fa-graduation-cap" style="font-size: 45px;"></span></div>
              <div class="media-body">
                <h5 class="mt-0">{{$jurusan}}</h5>
                Jurusan
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="fas fa-school" style="font-size: 45px;"></span></div>
              <div class="media-body">
                <h5 class="mt-0">{{$ruangan}}</h5>
                Ruangan
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="fas fa-shopping-bag" style="font-size: 62px;"></span></div>
              <div class="media-body">
                <h5 class="mt-0">{{$barang}}</h5>
                Barang
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="fas fa-pencil-alt" style="font-size: 54px;"></span></div>
              <div class="media-body">
                <h5 class="mt-0">{{$total}}</h5>
                Total Barang 
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="fas fa-tools"  style="font-size: 54px;"></span></div>
              <div class="media-body">
                <h5 class="mt-0">{{$broken}}</h5>
                Total Barang Rusak
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>



    <div class="site-section about-section" id="about-section">
      <div class="container">
        <div class="row align-items-center mb-5 pb-5">
          <div class="col-lg-7 img-years mb-5 mb-lg-0">
            <img src="images/sejarah_ub.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto">
            <span class="sub-title">Learn To Know</span>
            <h3 class="mb-4">About Us</h3>
            <p class="mb-4">Universitas Brawijaya adalah perguruan tinggi di Indonesia yang berdiri pada tahun 1963 di Kota Malang, Jawa Timur melalui Ketetapan Menteri Pendidikan dan Ilmu Pengetahuan no.1 tanggal 5 Januari 1963. Tanggal tersebut kemudian ditetapkan sebagai Dies Natalis UB.</p>
          </div>
        </div>

        
      </div>
    </div>
    
    
    <div class="site-section" id="fakultas-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Universitas Brawijaya</span>
            <h2 class="font-weight-bold text-black">Fakultas</h2>
            <p class="mb-5">Universitas Brawijaya menawarkan pendidikan yang sesuai untuk kepemimpinan global pada era yang berkembang pesat.</p>
          </div>
        </div>
       
        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/filkom.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>
                @foreach($filkom as $f)
                  {{ $f->name }}
                @endforeach
              </h2>
              <span class="sub-title d-block mb-3">
                <span style="font-size: 20px;">{{ $jurusanFilkom }}</span>
                Jurusan
              </span>
              <p>Fakultas Ilmu Komputer Universitas Brawijaya atau disingkat FILKOM merupakan salah satu fakultas di Universitas Brawijaya yang baru saja diresmikan pada Januari 2015.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/hukum.jpeg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>
                @foreach($hukum as $h)
                  {{ $h->name }}
                @endforeach
              </h2>
              <span class="sub-title d-block mb-3">
                <span style="font-size: 20px;">{{ $jurusanHukum }}</span>
                Jurusan
              </span>
              <p>Fakultas Hukum Universitas Brawijaya atau disingkat FH-UB adalah salah satu fakultas di Universitas Brawijaya, Malang, yang merupakan fakultas paling tua di UB.</p>
              
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/fia.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>
                @foreach($fia as $fi)
                  {{ $fi->name }}
                @endforeach
              </h2>
              <span class="sub-title d-block mb-3">
                <span style="font-size: 20px;">{{ $jurusanFia }}</span>
                Jurusan
              </span>
              <p>Fakultas Ilmu Administrasi Universitas Brawijaya atau biasa disingkat dengan FIA merupakan salah satu fakultas tertua yang berada di kampus UB.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/teknik.png" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>
                @foreach($teknik as $tk)
                  {{ $tk->name }}
                @endforeach
              </h2>
              <span class="sub-title d-block mb-3">
                <span style="font-size: 20px;">{{ $jurusanTeknik }}</span>
                Jurusan
              </span>
              <p>Fakultas Teknik Universitas Brawijaya atau disingkat FT-UB adalah salah satu fakultas di Universitas Brawijaya, Malang.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/dokter.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>
                @foreach($fk as $fk)
                  {{ $fk->name }}
                @endforeach
              </h2>
              <span class="sub-title d-block mb-3">
                <span style="font-size: 20px;">{{ $jurusanFk }}</span>
                Jurusan
              </span>
              <p>Fakultas Kedokteran Universitas Brawijaya atau disingkat FK-UB adalah salah satu fakultas di Universitas Brawijaya, Malang.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="person">
              <div class="bio-img">
                <figure>
                  <img src="images/fisip.png" alt="Image" class="img-fluid">
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2>
                @foreach($fisip as $fp)
                  {{ $fp->name }}
                @endforeach
              </h2>
              <span class="sub-title d-block mb-3">
                <span style="font-size: 20px;">{{ $jurusanFisip }}</span>
                Jurusan
              </span>
              <p>Fakultas Ilmu Sosial dan Politik Universitas Brawijaya atau disingkat FISIP-UB adalah salah satu fakultas di Universitas Brawijaya, Malang.</p>
              
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section" id="inventory-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Universitas Brawijaya</span>
            <h2 class="font-weight-bold text-black">Data Inventory</h2>
            <p class="mb-5">Universitas Brawijaya memiliki banyak data inventory di setiap fakultas.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 table-responsive">
            <!--
            <form method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" name="search" class="form-control" title="Cari berdasarkan nama ruangan / nama barang" placeholder="Search" value="{{ request()->get('search') }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
            -->
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Ruangan</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Fakultas</th>
                  <th scope="col">Total</th>
                  <th scope="col">Broken</th>
                  <th scope="col">Photo</th>
                </tr>
              </thead>
              <tbody>
                @forelse($inventory as $br => $barang)
                <tr>
                  <td width="5%">{{ $br + $inventory->firstitem() }}</td>
                  <td width="15%">{{ $barang->name }}</td>
                  <td width="13%">{{ $barang->nama_ruangan }}</td>
                  <td width="17%">{{ $barang->nama_jurusan }}</td>
                  <td width="17%">{{ $barang->nama_fakultas }}</td>
                  <td width="5%">{{ $barang->total }}</td>
                  <td width="5%">{{ $barang->broken }}</td>
                  <td width="13%">
                    <center>
                    <img src="{{ asset('images/'.$barang->photo) }}" id="showgambar" style="max-width:100px;max-height:100px;" />
                    </center>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="8"><center>Data kosong</center></td>
                </tr>
                @endforelse
              </tbody>
            </table>
            <h6 class="page-title">Page Number</h6>
              {{ $inventory->links() }}
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Get In Touch</span>
            <h2 class="font-weight-bold text-black">Contact Us</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, explicabo, quasi. Magni deserunt sunt labore.</p>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-12 col-lg-12">
          
            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>

              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary rounded-0 btn-lg">
                </div>
              </div>

  
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>Universitas Brawijaya adalah perguruan tinggi di Indonesia yang berdiri pada tahun 1963 di Kota Malang, Jawa Timur melalui Ketetapan Menteri Pendidikan dan Ilmu Pengetahuan no.1 tanggal 5 Januari 1963. Tanggal tersebut kemudian ditetapkan sebagai Dies Natalis UB.</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Tentang UB</a></li>
                  <li><a href="#">Fakultas</a></li>
                  <li><a href="#">Barang</a></li>
                </ul>
              </div>
            </div>

            
          </div>
          <div class="col-lg-4">
           

            <div class="mb-5">
              <h3 class="footer-heading mb-4">Recent News</h3>
              <div class="block-25">
                <ul class="list-unstyled">
                  <li class="mb-3">
                    <a href="#" class="d-flex">
                      <figure class="image mr-4">
                        <img src="images/filkom.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="small text-uppercase date">Jan 16, 2018</span>
                        <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet consectetur elit</h3>
                      </div>
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="#" class="d-flex">
                      <figure class="image mr-4">
                        <img src="images/hukum.jpeg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="small text-uppercase date">Jan 16, 2018</span>
                        <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet consectetur elit</h3>
                      </div>
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="#" class="d-flex">
                      <figure class="image mr-4">
                        <img src="images/fia.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="small text-uppercase date">Jan 16, 2018</span>
                        <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet consectetur elit</h3>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            
          </div>
          

          <div class="col-lg-4 mb-5 mb-lg-0">

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

              <form action="#" method="post" class="form-subscribe">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
                  </div>
                </div>
              </form>

            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>


          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="{{ asset('asset_user/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('asset_user/js/popper.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/aos.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('asset_user/js/jquery.easing.1.3.js') }}"></script>
  
  <script src="{{ asset('asset_user/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('asset_user/js/main.js') }}"></script>

  
  </body>
</html>