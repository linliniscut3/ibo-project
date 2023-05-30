<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IBO-Multiverse</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
      @if (Route::has('login'))
          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
              @auth
                  <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
              @else
                  <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                  @endif
              @endauth
          </div>
      @endif
    </div>
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>IBO Community</span></a></h1>

        <!-- ======image logo====== -->
        <!-- <a href="#"><img src="{{asset('img/logo.png')}}" alt="" class="logo"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#cta">Services</a></li>
          <li><a class="nav-link scrollto" href="{{URL('/team')}}">Our Team</a></li>
          <li><a class="nav-link scrollto" href="#News">News</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          
          <!-- Login -->
          <div class="login d-flex flex-wrap">
            <li><a href="{{URL('/admin/login')}}" target="_blank" ><span>login <i class="bi bi-lock-fill"></i></span></a></li>     
          </div>       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <!-- ======login====== -->
         
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to IBO Multiverse</h1>
      <h2>Let's grow together</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>รู้หรือไม่?</h3>
              <p>
                การเริ่มต้นครั้งยิ่งใหญ่ภายIBO Multiverse ถูกก่อตั้งขึ้นเพื่อนำเสนอ และ จัดเก็บข้อมูลผู้ที่กระทำความผิดที่อยู่ในรูปแบบของเว็ปไซต์
              </p>
              <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <a href=""><h4>IBO Multiverse</h4></a>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, reiciendis. Doloremque laudantium cumque vero dicta? Iste, totam optio eius quaerat blanditiis dolor odit, et ad, non distinctio maiores labore quidem?</p>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <a href=""><h4>IBO Game 24/7</h4></a>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab velit eaque odit optio ex accusantium cupiditate quis corrupti officia earum. Eos veniam repellendus impedit asperiores consequuntur. Beatae a enim totam?</p>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <a href=""><h4>Devastate</h4></a>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos incidunt deserunt aspernatur quos quam reprehenderit obcaecati! Temporibus doloribus, quaerat suscipit iste veniam repellat, nisi sunt omnis repudiandae rem neque dolorum?</p>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <a href=""><h4>School discord</h4></a>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum vitae delectus repellendus. Consectetur doloribus impedit, aspernatur suscipit asperiores ea exercitationem laborum odio corrupti, consequuntur doloremque? Officia repellat exercitationem beatae facere.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= services======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>โซนเด็กดื้อ</h3>
          <p> เด็กดื้อต้องโดนอะไรน้า กดตรงนี้เพื่อนดูรายชื่อเด็กดื้อ</p>
          <a class="cta-btn" href="{{URL('/users')}}" target="_blank">Click me!</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= News Section ======= -->
      <section id="News">
        
          <div class="container-news" data-aos="fade-in" data-aos-delay="100">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-12">
                    <div class="section-title-news">
                      <h4 class="m-0 text-uppercase font-weight-bold" style="color:black;">IBO News</h4>
                      <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                    </div>
                  </div>
                  
                  
                  <div class="col-lg-4">
                    <div class="myNews">
                      <div class="position-relative mb-3">
                        <img src="{{URL('img/png_20230525_011709_0000.png')}}" alt="" class="img-news">
                        <div class="bg-white">
                          <div class="text-news">
                            <img src="{{URL('img/team/Kob.png')}}" alt="" class="img-teller">
                            <span class="text-news" href=""><i class="bi bi-megaphone-fill" style="padding:5px;"></i>  Gang promoting!</span>
                            <a class="text-news" href="" style="float:right;"><small>Jan 01, 2045</small></a>
                            <div class="text-detail">
                              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae quasi rerum velit dolorum fugiat quos, tenetur at doloremque, id aliquid vel, error harum consequatur ducimus dolorem? Repellat, eaque consequuntur?</span>
                            </div>
                              <div class="read-more">
                                <div class="align-center">
                                  <span>Read more</span>
                                  <a href=""><i class="bi bi-arrow-right" style="float:right;"></i></a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  

                  <div class="col-lg-4">
                    <div class="myNews">
                      <div class="position-relative mb-3">
                        <img src="{{URL('img/png_20230525_011709_0000.png')}}" alt="" class="img-news">
                        <div class="bg-white">
                          <div class="text-news">
                            <img src="{{URL('img/team/Kob.png')}}" alt="" class="img-teller">
                            <span class="text-news" href=""><i class="bi bi-megaphone-fill" style="padding:5px;"></i>  Gang promoting!</span>
                            <a class="text-news" href="" style="float:right;"><small>Jan 01, 2045</small></a>
                            <div class="text-detail">
                              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae quasi rerum velit dolorum fugiat quos, tenetur at doloremque, id aliquid vel, error harum consequatur ducimus dolorem? Repellat, eaque consequuntur?</span>
                            </div>
                              <div class="read-more">
                                <div class="align-center">
                                  <span>Read more</span>
                                  <a href=""><i class="bi bi-arrow-right" style="float:right;"></i></a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  

                  <div class="col-lg-4">
                    <div class="position-relative mb-3">
                      <div class="myNews">
                        <img src="{{URL('img/png_20230525_011709_0000.png')}}" alt="" class="img-news">
                        <div class="bg-white">
                          <div class="text-news">
                            <img src="{{URL('img/team/Kob.png')}}" alt="" class="img-teller">
                            <span class="text-news" href=""><i class="bi bi-megaphone-fill" style="padding:5px;"></i>  Gang promoting!</span>
                            <a class="text-news" href="" style="float:right;"><small>Jan 01, 2045</small></a>
                            <div class="text-detail">
                              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae quasi rerum velit dolorum fugiat quos, tenetur at doloremque, id aliquid vel, error harum consequatur ducimus dolorem? Repellat, eaque consequuntur?</span>
                            </div>
                              <div class="read-more">
                                <div class="align-center">
                                  <span>Read more</span>
                                  <a href=""><i class="bi bi-arrow-right" style="float:right;"></i></a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  

                  <div class="col-lg-4">
                    <div class="myNews">
                      <div class="position-relative mb-3">
                        <img src="{{URL('img/png_20230525_011709_0000.png')}}" alt="" class="img-news">
                        <div class="bg-white">
                          <div class="text-news">
                            <img src="{{URL('img/team/Kob.png')}}" alt="" class="img-teller">
                            <span class="text-news" href=""><i class="bi bi-megaphone-fill" style="padding:5px;"></i>  Gang promoting!</span>
                            <a class="text-news" href="" style="float:right;"><small>Jan 01, 2045</small></a>
                            <div class="text-detail">
                              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae quasi rerum velit dolorum fugiat quos, tenetur at doloremque, id aliquid vel, error harum consequatur ducimus dolorem? Repellat, eaque consequuntur?</span>
                            </div>
                              <div class="read-more">
                                <div class="align-center">
                                  <span>Read more</span>
                                  <a href=""><i class="bi bi-arrow-right" style="float:right;"></i></a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="myNews">
                      <div class="position-relative mb-3">
                        <img src="{{URL('img/png_20230525_011709_0000.png')}}" alt="" class="img-news">
                        <div class="bg-white">
                          <div class="text-news">
                            <img src="{{URL('img/team/Kob.png')}}" alt="" class="img-teller">
                            <span class="text-news" href=""><i class="bi bi-megaphone-fill" style="padding:5px;"></i>  Gang promoting!</span>
                            <a class="text-news" href="" style="float:right;"><small>Jan 01, 2045</small></a>
                            <div class="text-detail">
                              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae quasi rerum velit dolorum fugiat quos, tenetur at doloremque, id aliquid vel, error harum consequatur ducimus dolorem? Repellat, eaque consequuntur?</span>
                            </div>
                              <div class="read-more">
                                <div class="align-center">
                                  <span>Read more</span>
                                  <a href=""><i class="bi bi-arrow-right" style="float:right;"></i></a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
      </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters" >

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class=" bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Members :</strong><br> The numbers of IBO Multiverse</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="69" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Teams :</strong><br> The strongest team</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi bi-collection"></i>
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>IBO's Network :</strong><br> Better communicate</p>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Counts Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          {{-- <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>IBO-Multiverse</h3>
              <p class="pb-3"><em>โลกของคอมมูนิตี้สีสัน และ มิตรภาพ</em></p>
              <h3>Contact</h3>
                <strong>Discord : </strong> Hang Man#9691<br>
                <strong>Facebook :</strong> Facebook ka<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bi-discord"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>More information</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Develope</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Designer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Developer</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2022-2023</span></strong>. All Rights Reserved
        <br>
        <div class="terms">
          <a href="" class="terms">Privacy Policy</a>
          | 
          <a href="" class="terms">Term of Service</a>
            
          <a href="" class="terms">Rules</a>
        </div>
      </div>
      <div class="credits">
       <a href="#home" class="credits">IBO Multiverse</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/purecounter/purecounter.js')}}" ></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}" ></script>

</body>

</html>