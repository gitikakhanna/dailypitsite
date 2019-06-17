@extends('layouts.app')
@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center" style="background: url('{{ asset('images/contactus1.jpg') }}'); background-size: contain;">
              <div class="container text-white">
                  <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                    </div>
                    <div class="page_link text-white">
                        <a href="/" class="text-white">Home</a>
                        <a href="/contactus" class="text-white">Contact Us</a>
                    </div>
                  </div>
              </div>
        </div>
    </section>
    <section class="feature-area section_gap_bottom_custom mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="main_title">
                        <h2><span>About Us</span></h2>
                    </div>
                    <p>
                      DailyPit is a one-stop and leading company dedicated to providing Computers, Printers, CCTV, Water Purifier & AC repair, maintenance & AMC services. We have diversified and innovatively developed service level model that connects our prospective users with us. At DailyPit, we not only work hard to provide you with state of the art maintenance and repairs but also ensure the quality. We follow and adhere strictly to our service level agreements and guidelines.
                    </p>
                    <p>
                      DailyPit was conceptualized to provide a common and effective podium, which is equally transparent in its functionality. We bridge the gap that may otherwise exist between the service provider and the customers to an extent, where they get the comfort at their office set-ups and even homes. We maintain connectivity to the professionals as well as qualified service providers, which reiterates our long-standing commitment to the customers. DailyPit provides the dynamic interface to the customers, which ensures quick customization and selection of service providers on the basis of location, specialization, pricing, availability etc.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- features section --}}
    <section class="feature-area section_gap_bottom_custom mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="main_title">
                        <h2><span>Features</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5 features-bottom mt-3 pl-1 pr-1">
                    Enhanced engagement with the customers
                    <div class="feature-number">
                        1
                    </div>
                </div>
                <div class="col-12 offset-lg-7 col-lg-5 features-bottom mt-3 pl-1 pr-1 text-right">
                    Increased transparency between the service provider and the customer
                    <div class="feature-number right-no">
                        2
                    </div>
                </div>
                <div class="col-12 col-lg-5 features-bottom mt-3 pl-1 pr-1">
                    Higher customer satisfaction rate
                    <div class="feature-number">
                        3
                    </div>
                </div>
                <div class="col-12 offset-lg-7 col-lg-5 features-bottom mt-3 pl-1 pr-1 text-right">
                    Good quality service
                    <div class="feature-number right-no">
                        4
                    </div>
                </div>
                <div class="col-12 col-lg-5 features-bottom mt-3 pl-1 pr-1">
                    Time efficient services 
                    <div class="feature-number">
                        5
                    </div>
                </div>
                <div class="col-12 offset-lg-7 col-lg-5 features-bottom mt-3 pl-1 pr-1 text-right">
                    Value packed offers on the services
                    <div class="feature-number right-no">
                        6
                    </div>
                </div>
                <div class="col-12 col-lg-5 features-bottom mt-3 pl-1 pr-1">
                    High flexibility levels
                    <div class="feature-number">
                        7
                    </div>
                </div>
                <div class="col-12 offset-lg-7 col-lg-5 features-bottom mt-3 pl-1 pr-1 text-right">
                    Quick and efficient services
                    <div class="feature-number right-no">
                        8
                    </div>
                </div>
                <div class="col-12 col-lg-5 features-bottom mt-3 pl-1 pr-1">
                    No upfront fee is charged from the customer
                    <div class="feature-number">
                        9
                    </div>
                </div>
                <div class="col-12 offset-lg-7 col-lg-5 features-bottom mt-3 pl-1 pr-1 text-right">
                    Services availed at any time and anywhere in Delhi/NCR
                    <div class="feature-number right-no">
                        10
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection