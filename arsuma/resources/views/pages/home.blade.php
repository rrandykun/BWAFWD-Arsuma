@extends('layouts.app')

@section('title')
    ARSUMA
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Explore the Beautiful Malang
            <br> As Easy One Click</h1>
        <p class="mt-3">You will see beautiful<br> moment you never see before</p>
        <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <!-- Content -->
    <main>
        <!-- Statistics -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-6 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-6 col-md-2 stats-detail">
                    <h2>30</h2>
                    <p>Places</p>
                </div>
                <div class="col-6 col-md-2 stats-detail">
                    <h2>50</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-6 col-md-2 stats-detail">
                    <h2>30</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try<br> before in this world</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular1.jpg');">
                            <div class="travel-country">MALANG</div>
                            <div class="travel-location">PANTAI NGUDEL</div>
                            <div class="travel-button mt-auto">
                                <a href="/detail" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular2.jpg');">
                            <div class="travel-country">MALANG</div>
                            <div class="travel-location">MASJID AGUNG JAMI'</div>
                            <div class="travel-button mt-auto">
                                <a href="/detail" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular3.jpg');">
                            <div class="travel-country">MALANG</div>
                            <div class="travel-location">KAMPUNG WARNA WARNI</div>
                            <div class="travel-button mt-auto">
                                <a href="/detail" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular4.jpg');">
                            <div class="travel-country">MALANG</div>
                            <div class="travel-location">GUNUNG BROMO</div>
                            <div class="travel-button mt-auto">
                                <a href="/detail" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Networks -->
        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us<br> more than just a trip</p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ url('frontend/images/partners.png')}}" alt="Partners" class="img-partner" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them<br> the best experience</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-66 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimonial1.png')}}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Randy Arsuma P</h3>
                                <p class="testimonial">" It was glorious and I could not stop to say wohooo for every single moment Dankeeeeee "</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">Trip to Gunung Bromo</p>
                        </div>
                    </div>
                    <div class="col-sm-66 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimonial2.png')}}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Muhammad A. Rasyad</h3>
                                <p class="testimonial">" Jalan-jalan, Umma. Jalan-jalan, Buya "</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">Trip to Gunung Bromo</p>
                        </div>
                    </div>
                    <div class="col-sm-66 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimonial3.png')}}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Madina Rizkya</h3>
                                <p class="testimonial">" The trip was amazing and I saw something beautiful that makes me want to discover more "</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">Trip to Gunung Bromo</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection