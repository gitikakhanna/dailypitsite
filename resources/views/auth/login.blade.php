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

    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Why Choose Us?</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-4 col-12 text-center">
                    <div class="number text-center">
                        01
                    </div>
                    <div class="text-block mt-3">
                        <strong>Amazing features</strong>
                        <p>Dailypit provides the dynamic interface to the customers, which ensures quick customization and selection of service providers on the basis of location, specialization, pricing, availability etc.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12 text-center">
                    <div class="number text-center">
                        02
                    </div>
                    <div class="text-block mt-3">
                        <strong>Our Mission</strong>
                        <p>We work on the mission of adding value for money to our clients operations as well as profitability by continuously meeting the requirements, besides synchronizing them with detailed service level agreements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12 text-center">
                    <div class="number text-center">
                        03
                    </div>
                    <div class="text-block mt-3">
                        <strong>Our Support</strong>
                        <p>We work on the mission of adding value for money to our clients operations as well as profitability by continuously meeting the requirements, besides synchronizing them with detailed service level agreements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- services show section --}}
    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Services</span></h2>
                        <p>Book a service at minimum cost</p>
                    </div>
                </div>
            </div>
            <div class="row">  
                <div class="col-12">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                        @php
                            $i=1;
                        @endphp
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            @forelse($services as $service)
                                <div class="carousel-item col-md-3 {{$i == 1?'active':''}}">
                                    @php
                                        $i++;
                                    @endphp
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <img class="img-fluid w-100" src="{{ asset('images/b3.jpg') }}" alt="" />
                                                </div>
                                                <div class="product-btm">
                                                    <a href="#" class="d-block">
                                                        <h4>{{App\Category::where('id', $service->category_id)->pluck('name')->first()}}</h4>
                                                        <p class="text-secondary">({{App\subcategories::where('id', $service->subcategory_id)->pluck('subcategory_name')->first()}})</p>
                                                    </a>
                                                    <div class="mt-3">
                                                        <span class="mr-4 text-success">Rs.{{$service->reg_price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty{{''}}
                            @endforelse
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>     
            </div>
        </div>
    </section>

    {{-- about us section --}}
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
                    <button type="button" class="main_btn text-white" data-toggle="modal" data-target="#joinnowModal">Join Now</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    <div class="modal fade" id="joinnowModal" tabindex="-1" role="dialog" aria-labelledby="joinnowModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="header-content">
                        <h5 class="modal-title" id="exampleModalLongTitle">Join Us</h5>
                        <p>Become a part of our community.</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Full Name" name="name">
                    <input type="email" class="form-control mt-2" placeholder="Email Id" name="emailid">
                    <input type="text" class="form-control mt-2" placeholder="Contact No" name="contactno">
                    <input type="text" class="form-control mt-2" placeholder="Address" name="address">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Join</button>
                </div>
            </div>
        </div>
    </div>    
@endsection
