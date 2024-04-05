@extends("layouts.template",['titre'=>'Detail'])

@section("content")
@include("parties.bannier")
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="pe-lg-4 pe-xl-5">
                    @include("parties.menulateral")

                    <div class="widget text-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="testimonial-style3 owl-carousel owl-theme">
                            <div>
                                <i class="ti-quote-left display-10 text-secondary mb-4 d-block"></i>
                                <p class="mb-1-6">I don't know what else to say. I would gladly pay over 600 dollars for business. Keep up the excellent work. It's incredible. It's the perfect solution for our business.</p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="me-3">
                                        <img src="{{ asset('assets/img/avatar/avatar-06.jpg') }}" class="rounded-circle" alt="...">
                                    </div>
                                    <div class="text-start">
                                        <h6 class="mb-0">Allena Jones</h6>
                                        <span class="small">Real Estate Assessor</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="ti-quote-left display-10 text-secondary mb-3 d-block"></i>
                                <p class="mb-1-6">I am really satisfied with my business. Your company is truly upstanding and is behind its product 100%. Thank you for making it painless, pleasant and most of all hassle free!</p>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <div class="me-3">
                                        <img src="{{ asset('assets/img/avatar/avatar-07.jpg') }}" class="rounded-circle" alt="...">
                                    </div>
                                    <div class="text-start">
                                        <h6 class="mb-0">Gregi Ambrose</h6>
                                        <span class="small">Languages Researcher</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="ti-quote-left display-10 text-secondary mb-3 d-block"></i>
                                <p class="mb-1-6">Thanks to business, we've just launched our 5th website! Thank you so much for your help. I don't always clop, but when I do, it's because of business.</p>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <div class="me-3">
                                        <img src="{{ asset('assets/img/avatar/avatar-08.jpg') }}" class="rounded-circle" alt="...">
                                    </div>
                                    <div class="text-start">
                                        <h6 class="mb-0">Jose Matsuda</h6>
                                        <span class="small">Mystery Shopper</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget wow fadeInUp" data-wow-delay="200ms">
                        <h4 class="h5 mb-1-6">Downloads</h4>
                        <ul class="downloads m-0 p-0">
                            <li><a href="#!"><i class="far fa-file-pdf"></i><span class="label font-weight-600">Company Profile</span></a></li>
                            <li><a href="#!"><i class="far fa-file-pdf"></i><span class="label font-weight-600">Our Case Study</span></a></li>
                        </ul>
                    </div>

                    <div class="bg-img secondary-overlay cover-background rounded wow fadeInUp" data-wow-delay="200ms" data-overlay-dark="85" data-background="{{ asset('assets/img/bg/bg-06.jpg') }}">
                        <div class="position-relative z-index-9 text-center py-5 px-1-9">
                            <i class="fas fa-headset text-white mb-4 display-14"></i>
                            <h5 class="text-white mb-4">How can we help?</h5>
                            <div class="separator-line-horrizontal-full bg-white opacity4 mb-4"></div>
                            <ul class="text-center mb-0 list-unstyled ps-0">
                                <li class="text-white mb-2"><i class="fa fa-phone small text-white me-2"></i><a href="#!" class="text-white">+1 234 567 890</a></li>
                                <li class="text-white"><i class="fa fa-envelope-open small text-white me-2"></i><a href="#!" class="text-white">addyour@emailhere</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8 order-1 order-lg-2 mb-5 mb-lg-0">

                <img src=" {{ asset('assets/img/content/service-details-01.jpg') }}" class="mb-2-9 rounded wow fadeIn" data-wow-delay="100ms" alt="...">

                <div class="wow fadeIn" data-wow-delay="200ms">
                    <h2 class="mb-3">Marketing Research</h2>
                    <p>Marketing research is the promoting and business measure for making and disseminating significant and important substance to draw in, obtain, and draw in an unmistakably characterized and comprehended objective crowd with the target of driving productive client activity.</p>
                    <p class="mb-2-9">A promoting procedure of making and disseminating important, applicable and steady substance to pull in and obtain an unmistakably</p>
                </div>

                <div class="row mb-2-9">

                    <div class="col-md-6 mb-1-9 mb-md-0 wow fadeIn" data-wow-delay="200ms">
                        <div class="media">
                            <i class="ti-email display-20 text-primary"></i>
                            <div class="media-body ms-4">
                                <h3 class="h5 mb-2">Email Reports</h3>
                                <p class="mb-0">We assist you to create up your fulfillment commercial enterprise and solution on your important endeavors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="400ms">
                        <div class="media">
                            <i class="ti-bell display-20 text-primary"></i>
                            <div class="media-body ms-4">
                                <h3 class="h5 mb-2">Forecasting</h3>
                                <p class="mb-0">We assist you to create up your fulfillment commercial enterprise and solution on your important endeavors.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mb-2-9 mt-n4">
                    <div class="col-md-4 mt-4 wow fadeInUp" data-wow-delay="200ms">
                        <img src="{{ asset('assets/img/content/service-details-02.jpg') }}" class="rounded" alt="...">
                    </div>
                    <div class="col-md-4 mt-4 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('assets/img/content/service-details-03.jpg') }}" class="rounded" alt="...">
                    </div>
                    <div class="col-md-4 mt-4 wow fadeInUp" data-wow-delay="400ms">
                        <img src="{{ asset('assets/img/content/service-details-04.jpg') }}" class="rounded" alt="...">
                    </div>
                </div>
                <div class="wow fadeIn" data-wow-delay="200ms">
                    <h3 class="mb-4">We provide advance solutions</h3>
                    <div id="accordion" class="accordion-style1">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Outstanding client service
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                <div class="card-body">
                                    In sound organizations, changing bearings or dispatching new ventures implies joining fundamental qualities and limits with new energy and backing.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Fabricate a great staff.
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                <div class="card-body">
                                    In sound organizations, changing bearings or dispatching new ventures implies joining fundamental qualities and limits with new energy and backing.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Utilize capital and cash flow wisely
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                <div class="card-body">
                                    In sound organizations, changing bearings or dispatching new ventures implies joining fundamental qualities and limits with new energy and backing.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
        <section class="bg-img cover-background mx-auto z-index-1 mx-auto w-lg-95 w-xxl-85 wow fadeIn" data-wow-delay="100ms" data-overlay-dark="55" data-background="{{ asset('assets/img/bg/bg-04.jpg') }}">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-9 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="d-inline-block align-middle mb-2-2 mb-lg-2-9">
                            <a class="popup-social-video video_btn small" href="https://www.youtube.com/watch?v=CiBu9_lkysA"><i class="fas fa-play"></i></a>
                        </div>
                        <h2 class="h1 text-white mb-0">Get Happy With Our Best Service <span class="text-secondary">24/7</span></h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="md">
            <div class="container">

                <div class="mb-2-9 mb-lg-6 text-center title-style2 wow fadeIn" data-wow-delay="200ms">
                    <div class="title-style3">
                        <span>Our Help</span>
                    </div>
                    <h2 class="mb-0">How We Help</h2>
                </div>

                <div class="row wow fadeIn" data-wow-delay="200ms">

                    <div class="col-12">
                        <div class="horizontaltab tab-style1">
                            <ul class="resp-tabs-list hor_1">
                                <li class="tab1 ml-1-9"><span class="count display-1 alt-font font-weight-700">01</span>
                                    <div class="tab-box">
                                        <h6>Planning</h6><span>Vision to plan</span>
                                    </div>
                                </li>
                                <li class="tab2 ml-1-9"><span class="count display-1 alt-font font-weight-700">02</span>
                                    <div class="tab-box">
                                        <h6>Marketing</h6><span>Plan to market</span>
                                    </div>
                                </li>
                                <li class="tab3"><span class="count display-1 alt-font font-weight-700">03</span>
                                    <div class="tab-box">
                                        <h6>Growth</h6><span>Start to growth</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="resp-tabs-container box-shadow-large bg-white hor_1">
                                <div class="first">

                                    <div class="bg-white box-shadow-large p-2-5 rounded">
                                        <div class="row">
                                            <div class="col-lg-6 mb-1-6 mb-lg-0">
                                                <img src="{{ asset('assets/img/content/tab-01.jpg') }}" class="rounded" alt="...">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="ps-lg-1-9">
                                                    <h5>Vision to planning</h5>
                                                    <p>Duis Integration aute irure design in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non design proident.</p>

                                                    <ul class="list-style4 ps-0 mb-0">
                                                        <li>Exclusive design</li>
                                                        <li>Life time supports</li>
                                                        <li>Solve your problem with us</li>
                                                        <li>We Provide Awesome Services</li>
                                                        <li>Your business deserves best software</li>
                                                    </ul>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="second">

                                    <div class="bg-white box-shadow-large p-2-5 rounded">
                                        <div class="row">
                                            <div class="col-lg-6 order-lg-1 order-2">
                                                <div class="pe-lg-1-9">
                                                    <h5>Plan to marketing</h5>
                                                    <p>Build integration aute irure design in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat design proident.</p>

                                                    <ul class="list-style4 ps-0 mb-0">
                                                        <li>Life time supports</li>
                                                        <li>Exclusive design</li>
                                                        <li>Solve your problem with us</li>
                                                        <li>We Provide Awesome Services</li>
                                                        <li>Your business deserves best software</li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="col-lg-6 order-lg-2 order-1 mb-1-6 mb-lg-0">
                                                <img src="{{ asset('assets/img/content/tab-02.jpg') }}" class="rounded" alt="...">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="third">

                                    <div class="bg-white box-shadow-large p-2-5 rounded">
                                        <div class="row">
                                            <div class="col-lg-6 mb-1-6 mb-lg-0">
                                                <img src="{{ asset('assets/img/content/tab-03.jpg') }}" class="rounded" alt="...">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="ps-lg-1-9">
                                                    <h5>Start to growth</h5>
                                                    <p>Duis Integration aute irure design in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non design proident.</p>

                                                    <ul class="list-style4 ps-0 mb-0">
                                                        <li>Exclusive design</li>
                                                        <li>Life time supports</li>
                                                        <li>Solve your problem with us</li>
                                                        <li>We Provide Awesome Services</li>
                                                        <li>Your business deserves best software</li>
                                                    </ul>

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
@endsection
