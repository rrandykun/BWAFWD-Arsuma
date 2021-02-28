@extends('layouts.checkout')

@section('title', 'Checkout')

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
                            <li class="breadcrumb-item">Details</li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <!-- content kiri -->
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who is Going?</h1>
                        <p>Trip to Gunung Bromo, Malang</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>
                                            Picture
                                        </td>
                                        <td>
                                            Name
                                        </td>
                                        <td>
                                            Nationality
                                        </td>
                                        <td>
                                            VISA
                                        </td>
                                        <td>
                                            Passport
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/ava1.png')}}" alt="" height="60">
                                        </td>
                                        <td class="align-middle">Madina Rizkya</td>
                                        <td class="align-middle">ID</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#"><img src="{{ url('frontend/images/ic_remove.png')}}" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/ava2.png')}}" alt="" height="60">
                                        </td>
                                        <td class="align-middle">Randy Arsuma P</td>
                                        <td class="align-middle">ID</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">
                                            <a href="#"><img src="{{ url('frontend/images/ic_remove.png')}}" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/ava3.png')}}" alt="" height="60">
                                        </td>
                                        <td class="align-middle">Muhammad A. Rasyad</td>
                                        <td class="align-middle">ID</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">
                                            <a href="#"><img src="{{ url('frontend/images/ic_remove.png')}}" alt=""></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form action="#" class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2 " id="inputUsername " placeholder="Username ">
                                <label for="inputVisa " class="sr-only ">VISA</label>
                                <select name="inputVisa " id="inputVisa" class="custom-select mb-2 mr-sm-2 ">
                                    <option value="VISA" selected>VISA</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>
                                <label for="doePassport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOS Passport">
                                </div>
                                <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                            </form>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You are only able to invite member that has registered in Arsuma.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- content kanan -->
                <div class=" col-lg-4 ">
                    <div class="card card-details card-right ">

                        <h2>Trip Information</h2>
                        <table class="trip-informations ">
                            <tr>
                                <th width="50% ">Members</th>
                                <td width="50% " class="text-right ">
                                    3 persons
                                </td>
                            </tr>
                            <tr>
                                <th width="50% ">Additional VISA</th>
                                <td width="50% " class="text-right ">
                                    Rp. 0, 00
                                </td>
                            </tr>
                            <tr>
                                <th width="50% ">Trip Price</th>
                                <td width="50% " class="text-right ">
                                    Rp. 300.000, 00
                                </td>
                            </tr>
                            <tr>
                                <th width="50% ">Total Price</th>
                                <td width="50% " class="text-right ">
                                    Rp. 300.000, 00
                                </td>
                            </tr>
                            <tr>
                                <th width="50% ">Total (+Unique Code)</th>
                                <td width="50% " class="text-right text-total">
                                    <span class="text-blue">Rp.&nbsp;300.</span><span class="text-orange">457,
                                        00</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payments Instructions</h2>
                        <p class="payment-instruction">
                            Please complete the payment before you continue the wonderful trip.
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/ic_bank.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Arsuma ID</h3>
                                    <p>
                                        032 713 1580
                                        <br> Bank Syariah Indonesia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/ic_bank.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Arsuma ID</h3>
                                    <p>
                                        0857 5552 2988
                                        <br> Bank Muamalat
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="join-container ">
                        <a href="/success" class="btn btn-block btn-join-now mt-3 py-2 ">I Have Made Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="/detail" class="text-muted">
                            Cancel Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png')}}">'
                }
            });
        });
    </script>
    
@endpush