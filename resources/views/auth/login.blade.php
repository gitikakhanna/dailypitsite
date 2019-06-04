@extends('layouts.app')
@section('content')
    {{-- slider section --}}
    <section class="home_banner_area mb-40" style="background: url('{{ asset('images/ac1280.png') }}');">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <p class="sub text-uppercase">Services and Products</p>
                        <h3><span>Find</span> Your <br />Service <span>Experts</span></h3>
                        <h4>Book services and buy products online.</h4>
                        <a class="main_btn mt-40" href="#">View Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- why dailypit section --}}
    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-money"></i>
                            <h3>Trusted Professionals</h3>
                        </a>
                        <p>Increased transparency between the service provider and the customer</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-truck"></i>
                            <h3>Matched to your needs</h3>
                        </a>
                        <p>Services availed at any time and anywhere in Delhi/NCR</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-support"></i>
                            <h3>No upfront charges</h3>
                        </a>
                        <p>No upfront fee is charged from the customer</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-blockchain"></i>
                            <h3>Engagement with the customers</h3>
                        </a>
                        <p>Higher customer satisfaction rate and value packed offers on services</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- customer reviews section --}}
    <section class="feature_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Customer Reviews</span></h2>
                        <p>Hear from the customers about Dailypit Services</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <div class="customer"><img src="{{ asset('images/user1.png') }}"></div>
                            <h3>Shubham Jain</h3>
                        </a>
                        <div class="bg-success rating pl-2 pr-2">4.8<i class="fa fa-star ml-1"></i></div>
                        <p>We provide only verified, background checked and high quality professionals</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <div class="customer"><img src="{{ asset('images/user1.png') }}"></div>
                            <h3>Gitika Khanna</h3>
                        </a>
                        <div class="bg-success rating pl-2 pr-2">4.8<i class="fa fa-star ml-1"></i></div>
                        <p>We provide only verified, background checked and high quality professionals</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <div class="customer"><img src="{{ asset('images/user1.png') }}"></div>
                            <h3>Himanshu Chauhan</h3>
                        </a>
                        <div class="bg-success rating pl-2 pr-2">4.8<i class="fa fa-star ml-1"></i></div>
                        <p>We provide only verified, background checked and high quality professionals</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- join us section --}}
    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row bg-light p-3 text-center">
                <div class="col-lg-8 col-12 d-flex align-items-center justify-content-center">
                    <h4>Are you a professional looking to grow your service business?</h4>
                </div>
                <div class="col-lg-4 col-12 text-center">
                    <a class="main_btn text-white">Join Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
