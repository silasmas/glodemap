@extends("layouts.template",['titre'=>'Accueil'])


@section("content")
 <!-- BANNER
        ================================================== -->
        <section class="p-0 parallax cover-background top-position1 full-screen dark-overlay" data-overlay-dark="7"
         data-background="{{ asset('assets/img/banner/banner-09.jpg') }}"
         style='background-image: url("assets/img/banner/banner-09.jpg"); min-height: 271px;'>
            <div class="container">
                <div class="pt-6 text-center row align-items-center justify-content-center min-vh-100 pt-md-0">
                    <div class="pt-6 pb-12 col-lg-7 mb-1-9 mb-lg-0 py-sm-6">
                        <div class="mb-2 title-style2">
                            <span class="sub-title">GLODEMAP</span>
                        </div>
                        <h1 class="mb-4 text-white display-18 display-sm-14 display-md-11 display-xl-5">Une solution d'entreprise en RDC</h1>
                        <div class="mt-2-6">
                            <div class="align-middle d-inline-block">
                                <a class="video_btn-style1 popup-social-video video_btn small" href="https://www.youtube.com/watch?v=iGC5W-0grMs"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="text-white align-middle d-none d-sm-inline-block font-weight-700 ms-4 text-start">Regarder<span class="text-uppercase d-block">la vidéo introductive</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT
        ================================================== -->
        <section class="p-0 overflow-visible bg-transparent about-style2 mt-n70">
            <div class="container">
                <div class="about-inner border-radius-10">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="py-5 overflow-hidden bg-secondary px-1-9 px-lg-8 position-relative rounded-top-left rounded-top-sm-right h-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="mb-0 text-white h4 pe-5"><a href="">Transport</a></h3>
                                    <a href="{{ route('detailService',['id'=>"1"]) }}" class="text-white display-19 lh-1">&#10230;</a>
                                    <i class="text-white bi bi-car-front opacity3 display-1 position-absolute lh-1 left-n5 bottom-n10"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="py-5 overflow-hidden bg-dark px-1-9 px-lg-8 rounded-top-sm-right position-relative h-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="mb-0 text-white h4 pe-5"><a href="">Douanes</a></h3>
                                    <a href="{{ route('detailService',['id'=>"2"]) }}" class="text-white display-19 lh-1">&#10230;</a>
                                    <i class="text-white bi bi-shield-check opacity3 display-1 position-absolute lh-1 left-n5 bottom-n10"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="py-5 overflow-hidden bg-secondary px-1-9 px-lg-8 position-relative rounded-top-md-right h-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="mb-0 text-white h4 pe-5"><a href="">Santé</a></h3>
                                    <a href="{{ route('detailService',['id'=>"3"]) }}" class="text-white display-19 lh-1">&#10230;</a>
                                    <i class="text-white bi bi-hospital opacity3 display-1 position-absolute lh-1 left-n5 bottom-n10"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2-2 p-sm-2-9 p-md-6 p-lg-7 p-xl-9">
                        <div class="row align-items-center">
                            <div class="order-2 mt-5 col-lg-6 mt-lg-0 wow fadeIn order-lg-1" data-wow-delay="200ms">
                                <div class="pe-xl-5">
                                    <div class="title-style2 text-start mb-1-9">
                                        <span class="sub-title">Qui sommes-nous</span>
                                        <h2 class="mb-0 h1">GLODEMAP</h2>
                                    </div>
                                    <p>est une entreprise de commerce général évoluant dans les secteurs des :</p>
                                    <ul class="mb-0 list-style1">
                                        <li>Douanes</li>
                                        <li>Transport</li>
                                        <li>Santé</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="order-1 col-lg-6 wow fadeIn order-lg-2" data-wow-delay="400ms">
                                <div class="ps-xl-5">
                                    <img src="{{ asset('assets/img/content/about-03.jpg') }}" class="border-radius-10 tilt" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-10 position-absolute right bottom-15 z-index-1 ani-top-bottom d-none d-lg-block opacity1"><img src="{{ asset('assets/img/icon/icon-05.svg') }}" alt="..."></div>
        </section>

        <!-- PORTFOLIO
        ================================================== -->
        <section class="bg-dark mt-n70">
            {{-- <div class="container pt-40">
                <div class="text-center title-style2 mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
                    <span class="sub-title white">Nos réalisations</span>
                    <h2 class="mb-0 text-white h1"></h2>
                </div>
            </div>
            <div class="container-fluid wow fadeIn" data-wow-delay="200ms">
                <div class="portfolio-carousel owl-carousel owl-theme">
                    <div class="portfolio-style4 position-relative">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/portfolio/07.jpg') }}" class="border-radius-10" alt="...">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="h5"><a href="portfolio-single.html">Business Team</a></h3>
                            <span>Business</span>
                        </div>
                    </div>
                    <div class="portfolio-style4 position-relative">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/portfolio/08.jpg') }}" class="border-radius-10" alt="...">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="h5"><a href="portfolio-single.html">Business Advice</a></h3>
                            <span>Finance</span>
                        </div>
                    </div>
                    <div class="portfolio-style4 position-relative">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/portfolio/09.jpg') }}" class="border-radius-10" alt="...">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="h5"><a href="portfolio-single.html">Our Executives</a></h3>
                            <span>Marketing</span>
                        </div>
                    </div>
                    <div class="portfolio-style4 position-relative">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/portfolio/10.jpg') }}" class="border-radius-10" alt="...">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="h5"><a href="portfolio-single.html">Team Proposal</a></h3>
                            <span>Business</span>
                        </div>
                    </div>
                    <div class="portfolio-style4 position-relative">
                        <div class="position-relative">
                            <img src="{{ asset('img/portfolio/11.jpg') }}" class="border-radius-10" alt="...">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="h5"><a href="portfolio-single.html">Clients Advice</a></h3>
                            <span>Finance</span>
                        </div>
                    </div>
                    <div class="portfolio-style4 position-relative">
                        <div class="position-relative">
                            <img src="{{ asset('img/portfolio/12.jpg') }}" class="border-radius-10" alt="...">
                        </div>
                        <div class="portfolio-content">
                            <h3 class="h5"><a href="portfolio-single.html">Workplace Results</a></h3>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>

        <!-- SERVICES
        ================================================== -->
        <section class="bg-light">
            <div class="container">
                <div class="text-center title-style2 mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
                    <span class="sub-title">Nos services</span>
                    <h2 class="mb-0 h1">Nous sommes là pour vous servir</h2>
                </div>
                <div class="row mt-n1-9">
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="300ms">
                        <div class="bg-transparent border-0 card card-style3">
                            <div class="p-0 bg-transparent card-body">
                                <div class="card-front">
                                    <i class="mb-4 bi bi-car-front text-secondary display-14"></i>
                                    <h3 class="mb-3 h4">Transport</h3>
                                    <p class="mb-0">Un charroi de transport rapide et bien organisé .</p>
                                </div>
                                <div class="card-back bg-img cover-background" data-background="{{ asset('assets/img/content/service-02.jpg') }}">
                                    <div class="card-butn"><a href="{{ route('detailService',['id'=>"1"]) }}" class="butn md">Voir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="100ms">
                        <div class="bg-transparent border-0 card card-style3">
                            <div class="p-0 bg-transparent card-body">
                                <div class="card-front">
                                    <i class="mb-4 bi bi-hospital text-secondary display-14"></i>
                                    <h3 class="mb-3 h4">Médical</h3>
                                    <p class="mb-0">Nous avons un centre hospitalier  qui fait la fierté du coin avec des services impeccables.</p>

                                </div>
                                <div class="card-back bg-img cover-background" data-background="{{ asset('assets/img/content/service-01.jpg') }}">
                                    <div class="card-butn"><a href="{{ route('detailService',['id'=>"2"]) }}" class="butn md">Voir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="500ms">
                        <div class="bg-transparent border-0 card card-style3">
                            <div class="p-0 bg-transparent card-body">
                                <div class="card-front">
                                    <i class="mb-4 bi bi-shield-check text-secondary display-14"></i>
                                    <h3 class="mb-3 h4">Douanes</h3>
                                    <p class="mb-0">Nous faisons le dédouanement des marchandises en importation et en exportation.</p>
                                </div>
                                <div class="card-back bg-img cover-background" data-background="{{ asset('assets/img/content/service-03.jpg') }}">
                                    <div class="card-butn"><a href="{{ route('detailService',['id'=>"3"]) }}" class="butn md">Voir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="700ms">
                        <div class="bg-transparent border-0 card card-style3">
                            <div class="p-0 bg-transparent card-body">
                                <div class="card-front">
                                    <i class="mb-4 icon-presentation text-secondary display-14"></i>
                                    <h3 class="mb-3 h4">Saving Investments</h3>
                                    <p class="mb-0">We offers plan and assemble managing for you from startups.</p>
                                </div>
                                <div class="card-back bg-img cover-background" data-background="img/content/service-04.jpg">
                                    <div class="card-butn"><a href="saving-investments.html" class="butn md">read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="900ms">
                        <div class="bg-transparent border-0 card card-style3">
                            <div class="p-0 bg-transparent card-body">
                                <div class="card-front">
                                    <i class="mb-4 icon-hotairballoon text-secondary display-14"></i>
                                    <h3 class="mb-3 h4">Detail Report</h3>
                                    <p class="mb-0">We offers plan and assemble managing for you from startups.</p>
                                </div>
                                <div class="card-back bg-img cover-background" data-background="img/content/service-05.jpg">
                                    <div class="card-butn"><a href="detail-report.html" class="butn md">read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="1100ms">
                        <div class="bg-transparent border-0 card card-style3">
                            <div class="p-0 bg-transparent card-body">
                                <div class="card-front">
                                    <i class="mb-4 icon-genius text-secondary display-14"></i>
                                    <h3 class="mb-3 h4">Business Consulting</h3>
                                    <p class="mb-0">We offers plan and assemble managing for you from startups.</p>
                                </div>
                                <div class="card-back bg-img cover-background" data-background="img/content/service-06.jpg">
                                    <div class="card-butn"><a href="business-consulting.html" class="butn md">read more</a></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <img src="{{ asset('assets/img/bg/bg-shape6.png') }}" class="position-absolute right-n5 top-n5 opacity5 ani-left-right d-none d-lg-block" alt="...">
            <img src="{{ asset('assets/img/bg/bg-shape7.png') }}" class="position-absolute left-n5 bottom-n5 opacity5 ani-left-right d-none d-lg-block" alt="...">
        </section>

        <!-- BECOME A CLIENT
        ================================================== -->
        <section class="background-position-right bg-img background-no-repeat" data-background="{{ asset('assets/img/bg/bg-05.jpg') }}">
            <div class="container">
                <div class="row overlap-column">
                    <div class="col-lg-6 bg-img cover-background border-radius-10 tilt d-none d-lg-block wow fadeIn" data-wow-delay="100ms" data-overlay-dark="0" data-background="{{ asset('assets/img/content/form-img.jpg') }}"></div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="200ms">
                        <div class="become-client-form p-1-6 p-sm-2-9 border-radius-10">
                            <div class="text-center title-style2 text-lg-start mb-1-9">
                                <span class="sub-title">Contact</span>
                                <h2 class="mb-0 h1">Remplissez ce formulaire</h2>
                            </div>
                            <form class="quform" action="quform/contact.php" method="post" enctype="multipart/form-data" onclick="">
@csrf
                                <div class="quform-elements">

                                    <div class="row">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Your email here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <textarea class="form-control h-100" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->
                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn" type="submit"><span>Envoyer</span></button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CLIENTS
        ================================================== -->


    @include("parties.client")
    @include("parties.team")

    <!-- TESTIMONIAL
        ================================================== -->
        @include("parties.temoignage")


        <!-- BLOG
        ================================================== -->
        <section>
            <div class="container">
                <div class="text-center title-style2 mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
                    {{-- <span class="sub-title">discover the blog</span>
                    <h2 class="mb-0 h1">Read Latest News</h2> --}}
                </div>

                {{-- <div class="row g-xl-5 mt-n2-9">
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                        <article class="bg-transparent border-0 card card-style7 ms-3">
                            <div class="card-img position-relative">
                                <img src="img/blog/blog-01.jpg" class="border-radius-10" alt="...">
                                <a href="#!" class="rounded category">business</a>
                            </div>
                            <div class="px-0 pb-0 bg-transparent card-body pt-1-9">
                                <span class="mb-2 text-secondary d-block font-weight-500"><span class="ti-calendar small me-2"></span>June 10, 2021</span>
                                <h3 class="mb-4 h5"><a href="blog-post.html">Five things you need to know about business today</a></h3>
                                <a href="blog-post.html" class="font-weight-600">Read More &#10230;</a>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="400ms">
                        <article class="bg-transparent border-0 card card-style7 ms-3">
                            <div class="card-img position-relative">
                                <img src="img/blog/blog-02.jpg" class="border-radius-10" alt="...">
                                <a href="#!" class="rounded category">consulting</a>
                            </div>
                            <div class="px-0 pb-0 bg-transparent card-body pt-1-9">
                                <span class="mb-2 text-secondary d-block font-weight-500"><span class="ti-calendar small me-2"></span>June 8, 2021</span>
                                <h3 class="mb-4 h5"><a href="blog-post.html">Eliminate your fears and doubts about business</a></h3>
                                <a href="blog-post.html" class="font-weight-600">Read More &#10230;</a>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="600ms">
                        <article class="bg-transparent border-0 card card-style7 ms-3">
                            <div class="card-img position-relative">
                                <img src="img/blog/blog-03.jpg" class="border-radius-10" alt="...">
                                <a href="#!" class="rounded category">finance</a>
                            </div>
                            <div class="px-0 pb-0 bg-transparent card-body pt-1-9">
                                <span class="mb-2 text-secondary d-block font-weight-500"><span class="ti-calendar small me-2"></span>June 6, 2021</span>
                                <h3 class="mb-4 h5"><a href="blog-post.html">Understanding the background of business</a></h3>
                                <a href="blog-post.html" class="font-weight-600">Read More &#10230;</a>
                            </div>
                        </article>
                    </div>
                </div> --}}
            </div>
        </section>


@endsection
