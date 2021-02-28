@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <!-- breadcrum -->
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <!-- content kiri -->
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Gunung Bromo</h1>
                        <p>Kota Malang</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ url('frontend/images/bromo.jpg')}}" alt="Gunung Bromo" class="xzoom" id="xzoom-default" xoriginal="{{ url('frontend/images/zoom.jpg')}}">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="{{ url('frontend/images/zoom.jpg')}}">
                                    <img src="{{ url('frontend/images/details.jpg')}}" alt="" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/bromo.jpg')}}">
                                </a>
                                <a href="{{ url('frontend/images/zoom.jpg')}}">
                                    <img src="{{ url('frontend/images/details.jpg')}}" alt="" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/bromo.jpg')}}">
                                </a>
                                <a href="{{ url('frontend/images/zoom.jpg')}}">
                                    <img src="{{ url('frontend/images/details.jpg')}}" alt="" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/bromo.jpg')}}">
                                </a>
                                <a href="{{ url('frontend/images/zoom.jpg')}}">
                                    <img src="{{ url('frontend/images/details.jpg')}}" alt="" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/bromo.jpg')}}">
                                </a>
                                <a href="{{ url('frontend/images/zoom.jpg')}}">
                                    <img src="{{ url('frontend/images/details.jpg')}}" alt="" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/images/bromo.jpg')}}"></a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329
                            meter di atas permukaan laut.</p>
                        <p>Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera seluas sekitar 10 kilometer persegi. </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="{{ url('frontend/images/ic_event.png')}}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Berkuda</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{ url('frontend/images/ic_bahasa.png')}}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{ url('frontend/images/ic_food.png')}}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content kanan -->
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="{{ url('frontend/images/member1.png')}}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/member2.png')}}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/member3.png')}}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/member4.png')}}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/member5.png')}}" alt="" class="member-image mr-1">
                            <img src="{{ url('frontend/images/members.png')}}" alt="" class="member-image mr-1">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">
                                    22 March 2021
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">
                                    4D 3N
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type of Trip</th>
                                <td width="50%" class="text-right">
                                    Open Trip
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    Rp. 100.000 / person
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="/checkout" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href=" {{ url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
<script src=" {{ url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $(".xzoom, .xzoom-gallery").xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush