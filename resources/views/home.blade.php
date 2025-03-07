@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
        <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">
        <div class="container position-relative">
            <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                <h2>CAEI MEDICAL SERVICES</h2>
                <p>Votre bien-être est notre engagement. <br>Bienvenue chez CAEI Medical Services, où la santé prend toute son importance.</p>
            </div><!-- End Welcome -->
            <div class="content row gy-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                        <h3>Pourquoi choisir La Tunisie ?</h3>
                        <p>
                            La Tunisie, référence en accompagnement médical, allie expertise, infrastructures modernes et accueil chaleureux. Choisir la Tunisie, c’est opter pour des soins de qualité dans une destination reconnue pour son excellence en santé.
                        </p>
                        <div class="text-center">
                            <a href="{{ url('/about') }}" class="more-btn"><span>En savoir plus</span> <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row gy-4">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Prestations certifiées</h4>
                                    <p>Chez CAEI Medical Services, nous nous engageons à offrir des prestations certifiées, conformes aux normes les plus exigeantes en matière de qualité et de sécurité, afin de garantir le bien-être optimal de nos patients.</p>
                                </div>
                            </div><!-- End Icon Box -->
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                    <i class="bi bi-gem"></i>
                                    <h4>Ullamco laboris ladore pan</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                            </div><!-- End Icon Box -->
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Labore consequatur incidid dolore</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                </div>
                            </div><!-- End Icon Box -->
                        </div>
                    </div>
                </div>
            </div><!-- End Content -->
        </div>
    </section><!-- /Hero Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-container">
                        <div class="faq-item faq-active">
                            <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                            <div class="faq-content">
                                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item">
                            <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item">
                            <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                            <div class="faq-content">
                                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item">
                            <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item">
                            <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                            <div class="faq-content">
                                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item">
                            <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                            <div class="faq-content">
                                <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                    </div>
                </div><!-- End Faq Column-->
            </div>
        </div>
    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                    <h3>Testimonials</h3>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                }
                            }
                        </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo & Founder</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Designer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Jena Karlis</h3>
                                            <h4>Store Owner</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Matt Brandon</h3>
                                            <h4>Freelancer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/gallery-1.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/gallery-2.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/gallery-3.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/gallery-4.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/gallery-5.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/gallery-6.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/gallery-7.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/gallery-8.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->
            </div>
        </div>
    </section><!-- /Gallery Section -->
@endsection
