<?php
$standerd_single_tickets = isset($_GET['std_sgl']) ? $_GET['std_sgl'] : 0;
$standerd_couple_tickets = isset($_GET['std_cup']) ? $_GET['std_cup'] : 0;
$prime_single_tickets = isset($_GET['prim_sgl']) ? $_GET['prim_sgl'] : 0;
$prime_couple_tickets = isset($_GET['prim_cup']) ? $_GET['prim_cup'] : 0;
$kids_tickets = isset($_GET['kids']) ? $_GET['kids'] : 0;
$entry_tickets = isset($_GET['entry']) ? $_GET['entry'] : 0;

$total_tickets = $standerd_single_tickets + $standerd_couple_tickets + $prime_single_tickets + $prime_couple_tickets + $kids_tickets + $entry_tickets;


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Ticket Booking</title>

    @include('layouts._css')


</head>

<body ng-app="myApp" ng-controller="MyController as manup"
    ng-init="manup.bookingInit({{ json_encode($_GET) }});manup.stander_sigle_count = {{ $standerd_single_tickets }}; manup.stander_couple_count = {{ $standerd_couple_tickets }};manup.premium_sigle_count = {{ $prime_single_tickets }};manup.premium_copule_count = {{ $prime_couple_tickets }};manup.kids_count = {{ $kids_tickets }};manup.entry_count = {{ $entry_tickets }};manup.total_number_of_ticket = {{ $total_tickets }};manup.contact_email ='{{ request()->auth->email }}';manup.contact_mobile ='{{ request()->auth->phone }}';manup.pricing_page=false;">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- <img src="{{ url('/qrcode/1734588718.svg') }}" alt="" width="100" height="100"> -->
    <!-- Header Section Begin -->
    @include('layouts._header')
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Ticket Booking</h2>
                        <div class="bt-option">
                            <a href="/">Home</a>
                            <span>Booking</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Booking Details  -->
    <div class="bg-primary p-3 mb-3 text-white">
        <div class="container d-flex justify-content-between align-items-center">

            <h4 class="fw-bold">@{{ manup.pricing_page ? 'Price Details' : 'Complete your booking' }}</h4>
            <button ng-if="!manup.pricing_page" class="btn primary-btn" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">Edit
                Tickets</button>
        </div>
    </div>
    <section class="container mb-5 position-relative">
        <div class="row" ng-hide="manup.pricing_page">
            <div class="col-lg-12 p-0 m-0 ">
                <div class="border border-gray rounded-4 m-2">
                    <div class="row m-2">
                        <div class="col-8">
                            <h5 class="fw-bold p-2">Unique Event Management</h5>
                            <!-- <h5 class="font-weight-bold">Address</h5> -->
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-4 ">
                            <h5 class="font-weight-bold">Address</h5>
                            <p>Grand ocean beach resort, No.5, Vadanemell, Next To Crocodile Park, ECR Chennai - 603104.
                            </p>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <p class=""> Dec 31, 05:00 pm</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="font-weight-bold">{{ $total_tickets }} Tickets </h5>

                            <p class="m-0" ng-repeat="(key ,ticket) in manup.all_ticket_details[0]">
                                @{{ key == 'std_sgl' ? 'Standerd Single' : (key == 'std_cup' ? 'Standerd Couple' : (key == 'prim_sgl' ? 'Premium Single' : (key == 'prim_cup' ? 'Premium Couple' : (key == 'kids' ? 'Kids ' : (key == 'entry' ? 'Entry' : ''))))) }} - @{{ ticket }} Ticket@{{ ticket > 1 ? '\'s' : '' }}</p>
                        </div>
                    </div>
                </div>
                {{-- <form action="/ticket-booking" method="POST" id="ticket_person_detail_form">
                    @csrf
                    @if ($standerd_single_tickets > 0)
                        <div class="border border-gray rounded-4 m-2">
                            <div class="row m-3">
                                <div class="">
                                    <h5 class="fw-bold mb-3">Standerd Single Person Details</h5>
                                    <div ng-repeat="x in [].constructor({{$standerd_single_tickets}}) track by $index"
                                        class="row">
                                        <div class="mb-3 col-md-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Type here"
                                                name="name">
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <label for="age" class="form-label">Age</label>
                                            <input maxlength="2"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                type="text" class="form-control " id="age" placeholder="eg : 24" name="age">
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <div class="mb-2">
                                                <label for="">Gender</label>
                                            </div>
                                            <div class="btn-group">
                                                <input type="radio" class="btn-check gender" id="std_sgl_male_@{{ $index + 1 }}"
                                                    autocomplete="off" name="std_sgl_gender_@{{ $index + 1 }}" value="male" />
                                                <label class="btn btn-outline-secondary" for="std_sgl_male_@{{ $index + 1 }}"
                                                    data-mdb-ripple-init>Male</label>

                                                <input type="radio" class="btn-check gender"
                                                    id="std_sgl_female_@{{ $index + 1 }}" autocomplete="off"
                                                    name="std_sgl_gender_@{{ $index + 1 }}" value="female" />
                                                <label class="btn btn-outline-secondary" for="std_sgl_female_@{{ $index + 1 }}"
                                                    data-mdb-ripple-init>Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($standerd_couple_tickets > 0)
                        <div class="border border-gray rounded-4 m-2">
                            <div class="row m-3">
                                <div class="">
                                    <h5 class="fw-bold mb-3">Standerd Couple Person Details</h5>
                                    <div ng-repeat="x in [].constructor({{$standerd_couple_tickets * 2}}) track by $index"
                                        class="row">
                                        <div class="mb-3 col-md-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Type here"
                                                name="name">
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <label for="age" class="form-label">Age</label>
                                            <input maxlength="2"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                type="text" class="form-control " id="age" placeholder="eg : 24" name="age">
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <div class="mb-2">
                                                <label for="">Gender</label>
                                            </div>
                                            <div class="btn-group">
                                                <input type="radio" class="btn-check gender"
                                                    name="std_cup_gender_@{{ $index + 1 }}" id="std_cup_male_@{{ $index + 1 }}"
                                                    autocomplete="off" value="male" />
                                                <label class="btn btn-outline-secondary" for="std_cup_male_@{{ $index + 1 }}"
                                                    data-mdb-ripple-init>Male</label>

                                                <input type="radio" class="btn-check gender"
                                                    name="std_cup_gender_@{{ $index + 1 }}" id="std_cup_female_@{{ $index + 1 }}"
                                                    autocomplete="off" value="female" />
                                                <label class="btn btn-outline-secondary" for="std_cup_female_@{{ $index + 1 }}"
                                                    data-mdb-ripple-init>Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($prime_single_tickets > 0)
                        <div class="border border-gray rounded-4 m-2">
                            <div class="row m-3">
                                <div class="">
                                    <h5 class="fw-bold mb-3">Premium Single Person Details</h5>
                                    <div ng-repeat="x in [].constructor({{$prime_single_tickets}}) track by $index"
                                        class="row">
                                        <div class="mb-3 col-md-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Type here"
                                                name="name">
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <label for="age" class="form-label">Age</label>
                                            <input maxlength="2"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                type="text" class="form-control" id="age" placeholder="eg : 24" name="age">
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <div class="mb-2">
                                                <label for="">Gender</label>
                                            </div>
                                            <div class="btn-group">
                                                <input type="radio" class="btn-check gender"
                                                    name="prim_sigl_gender_@{{ $index + 1 }}" id="prim_sigl_male_@{{ $index + 1 }}"
                                                    autocomplete="off" value="male" />
                                                <label class="btn btn-outline-secondary" for="prim_sigl_male_@{{ $index + 1 }}"
                                                    data-mdb-ripple-init>Male</label>

                                                <input type="radio" class="btn-check gender"
                                                    name="prim_sigl_gender_@{{ $index + 1 }}"
                                                    id="prim_sigl_female_@{{ $index + 1 }}" autocomplete="off" value="female" />
                                                <label class="btn btn-outline-secondary"
                                                    for="prim_sigl_female_@{{ $index + 1 }}" data-mdb-ripple-init>Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($prime_couple_tickets > 0)
                        <div class="border border-gray rounded-4 m-2">
                            <div class="row m-3">
                                <div class="">
                                    <h5 class="fw-bold mb-3">Premium Couple Person Details</h5>
                                    <div ng-repeat="x in [].constructor({{$prime_couple_tickets * 2}}) track by $index"
                                        class="row">
                                        <div class="mb-3 col-md-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Type here"
                                                name="name">
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <label for="age" class="form-label">Age</label>
                                            <input maxlength="2"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                type="text" class="form-control" id="age" placeholder="eg : 24" name="age">
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <div class="mb-2">
                                                <label for="">Gender</label>
                                            </div>
                                            <div class="btn-group">
                                                <input type="radio" class="btn-check gender"
                                                    name="prim_cup_gender_@{{ $index + 1 }}" id="prim_cup_male_@{{ $index + 1 }}"
                                                    autocomplete="off" value="male" />
                                                <label class="btn btn-outline-secondary" for="prim_cup_male_@{{ $index + 1 }}"
                                                    data-mdb-ripple-init>Male</label>

                                                <input type="radio" class="btn-check gender"
                                                    name="prim_cup_gender_@{{ $index + 1 }}" id="prim_cup_female_@{{ $index + 1 }}"
                                                    autocomplete="off" value="female" />
                                                <label class="btn btn-outline-secondary" for="prim_cup_female_@{{ $index + 1 }}"
                                                    data-mdb-ripple-init>Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </form> --}}
                <div class="border border-gray rounded-4 m-2">
                    <div class="row m-3">
                        <div class="d-flex mb-3">
                            <h5 class="fw-bold me-3">Contact Details </h5>
                            <p class="m-0">We’ll send your ticket here</p>
                        </div>
                        <div class="row ">
                            <div class="mb-3 col-sm-12 col-md-6">
                                <label for="name" class="form-label">Email ID</label>
                                <input ng-change="manup.contact_email_input()" ng-model="manup.contact_email"
                                    type="text" class="form-control" id="name" placeholder="Type here"
                                    value="">
                                <p class="text-danger">@{{ manup.contact_emailError }}</p>
                            </div>
                            <div class="mb-3 col-sm-12 col-md-6">
                                <label for="age" class="form-label">Mobile Number </label>

                                <input
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                    maxlength="10" ng-change="manup.contact_mobile_input()"
                                    ng-model="manup.contact_mobile" type="text" class="form-control" id="age"
                                    placeholder="Type here" value="">
                                <p class="text-danger">@{{ manup.contact_mobileError }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-gray rounded-4 m-2">
                    <div class="row m-3">
                        <div class="">
                            <div class="d-flex mb-3">
                                <h5 class="fw-bold me-3">Your pincode and state
                                </h5>
                                <!-- <p class="m-0" style="font-size: 12px;">
                                (Required for GST purpose on your tax invoice. You can edit this anytime later in your profile section.)</p> -->
                            </div>
                            <p>Select the State</p>
                            <select class="form-select form-select-lg mb-4 w-50" aria-label="Large select example">
                                <option value="1" selected>Tamil Nadu</option>
                                <option value="1">Punjab</option>
                                <option value="2">Himachal Pradesh</option>
                                <option value="3">Others</option>
                            </select>
                            <div class="d-flex gap-3">
                                <div class="mb-3">
                                    <input type="checkbox" class="form-check-input me-2" id="confirm"
                                        placeholder="Type here">
                                    <label for="confirm" class="form-label text-secondary">Confirm and save billing
                                        details to your profile </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">

                    <button class="btn btn-primary text-uppercase w-50 m-2 p-3" ng-click="manup.get_details()">Book
                        Ticket</button>
                </div>
            </div>
            <!-- <div class="col-lg-4 p-0 m-0">
                <div class="border border-gray rounded-4 m-2">
                    <div class="row m-3">
                        <div class="">
                            <h5 class="fw-bold mb-3">Price details </h5>
                            <div class="d-flex justify-content-between">
                                <p class="m-0">Base Fare</p>
                                <p class="m-0">$150</p>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <p class="m-0 fw-bold">Amount</p>
                                <p class="m-0 fw-bold">$150</p>
                            </div>
                            <p class="m-0" style="font-size: 10px;">Final payable amount will be updated on the next
                                page</p>
                            <button class="btn btn-primary text-uppercase w-100"
                                ng-click="manup.get_details()">Continue</button>
                        </div>
                    </div>
                </div> -->
        </div>
        <div style="padding-bottom: 200px" ng-show="manup.pricing_page">
            <div class="row ">
                <div class="col-lg-8 p-0 m-0 ">
                    <!-- <div class="border border-gray rounded-4 m-2">

                    <div class="row m-2">
                        <div class="col-8">
                            <h5 class="fw-bold p-2">Laxmi holidays</h5>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-4 ">
                            <h5 class="font-weight-bold">Address</h5>
                            <p>Isbt kashmiri gate inside arrival platform near 7 and 8
                                EXIT METRO GATE NUMBER 8 GO INSIDE ISBT TOWARD ARRIVAL BAY/PLATFORM NUMBER ARRIVAL NEAR
                                7 AND 8</p>
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                </div> -->
                    <div class="card m-2 shadow-sm rounded-4">
                        <div class="row g-0">
                            <!-- Movie Image -->
                            <div class="col-md-6 align-content-center">
                                <div class="p-3">
                                    <img src="{{ url('img/event_banner.webp') }}" alt="Viduthalai Part - 2"
                                        class="img-fluid rounded-4">
                                </div>
                            </div>
                            <!-- Movie Details -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Fantastic 2K25</h5>
                                    <!-- <div class="mb-2">
                                    <span class="badge bg-primary">A</span>
                                    <span class="badge bg-secondary">Tamil</span>
                                    <span class="badge bg-info">2D</span>
                                </div> -->
                                    <p class="card-text text-muted">Grand ocean beach resort
                                        Chennai</p>
                                    <p class="card-text text-muted small">
                                        No.5, Vadanemell, Next To Crocodile Park, ECR Chennai - 603104.
                                    </p>
                                    <hr>
                                    <p class="mb-1 fw-bold">Tus, 31 Dec, 05:00 PM</p>
                                    <p class="card-text text-muted small">Unique Event Management
                                    </p>
                                    <!-- Ticket Count -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span
                                                class="badge bg-light text-dark fs-5 p-2">{{ $total_tickets }}</span>
                                            <span class="text-muted">TICKET</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="border border-gray rounded-4 m-2 shadow-sm" ng-repeat="price_wise in manup.person_price_wise">
                    <div class="row m-3">
                        <div class="">
                            <h5 class="fw-bold mb-3 text-capitalize">@{{ price_wise.price_package.replace('_', ' ') }}
                            </h5>
                            <div ng-repeat="x in [].constructor({{ $standerd_single_tickets }}) track by $index">
                                <div class="d-flex justify-content-around"
                                    ng-repeat="person_deatils in price_wise.persons">
                                    <p>Name : @{{ person_deatils.name }}</p>
                                    <p>Age : @{{ person_deatils.age }}</p>
                                    <p>Gender : @{{ person_deatils.gender }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                    <!-- <div class="border border-gray rounded-4 m-2 shadow-sm">
                <div class="row m-3">
                    <div class="d-flex mb-3">
                        <h5 class="fw-bold me-3">Contact Details </h5>
                        <p class="m-0">We’ll send your ticket here</p>
                    </div>
                    <div class="row ">
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label for="name" class="form-label">Email ID</label>
                            <input ng-change="manup.contact_email_input()" ng-model="manup.contact_email" type="text"
                                class="form-control" id="name" placeholder="Type here" value="">
                            <p class="text-danger">@{{ manup.contact_emailError }}</p>
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label for="age" class="form-label">Mobile Number </label>

                            <input ng-change="manup.contact_mobile_input()" ng-model="manup.contact_mobile" type="text"
                                class="form-control" id="age" placeholder="Type here" value="">
                            <p class="text-danger">@{{ manup.contact_mobileError }}</p>
                        </div>
                    </div>
                </div>
            </div> -->
                </div>

                <div class="col-lg-4 p-0 m-0 ">
                    <div class="border border-gray rounded-4 m-2 shadow-sm">
                        <div class="row m-3">
                            <div class="">
                                <h5 class="fw-bold mb-3">Price details </h5>
                                <div class="d-flex justify-content-between"
                                    ng-repeat="(key ,ticket) in manup.ticket_price_quantity"
                                    ng-if="ticket.quantity > 0">
                                    <p class="m-0">@{{ ticket.name == 'std_sgl' ? 'Standerd Single' : (ticket.name == 'std_cup' ? 'Standerd Couple' : (ticket.name == 'prim_sgl' ? 'Premium Single' : (ticket.name == 'prim_cup' ? 'Premium Couple' : (ticket.name == 'kids' ? 'Kids ' : (ticket.name == 'entry' ? 'Entry' : ''))))) }} (@{{ ticket.quantity }})</p>
                                    <p class="m-0">₹ @{{ ticket.total }}</p>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <p class="m-0">Taxes & Fees (18%)</p>
                                    <p class="m-0">₹ @{{ manup.total_price_tax.toFixed(2) }}</p>
                                </div>
                                <hr />
                                <div class="my-2">
                                    <h5 class="mb-3 fw-bold">Offers for you</h5>
                                    <div class="input-group mb-3">
                                        <input id="promoCodeInput" ng-model="manup.promocode" type="text"
                                            class="form-control " placeholder="Enter promocode"
                                            aria-label="Promocode" />
                                        <button ng-if="!manup.promo_status" ng-click="manup.promocode_btn()"
                                            class="btn btn-primary" type="button" id="promo_btn">
                                            <span class="spinner-border spinner-border-sm d-none" aria-hidden="true"
                                                id="promo_spinner"></span>
                                            <span class="" role="status" id="promo_text">Apply</span>

                                        </button>
                                        <button ng-if="manup.promo_status" ng-click="manup.promocode_cancel_btn()"
                                            class="btn btn-danger" type="button">Cancel</button>
                                    </div>
                                    {{-- <div class="text-center promo-box">
                                            <a href="#">View all offers or enter promocode</a>
                                        </div> --}}
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between" ng-if="manup.promo_status">
                                    <p class="m-0">Promo code (@{{ manup.promo_percentage }} off)</p>
                                    <p class="m-0 fw-bold">@{{ manup.promo_percentage_value }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 fw-bold">Amount</p>
                                    <p class="m-0 fw-bold">@{{ manup.total_amount }}</p>
                                </div>

                                <p class="m-0" style="font-size: 10px;">Final payable amount will be updated on the
                                    next
                                    page</p>
                                <button class="btn btn-primary text-uppercase w-100" ng-click="manup.book_ticket()"
                                    id="booking_continue_btn">
                                    <span class="spinner-border spinner-border-sm d-none" aria-hidden="true"
                                        id="booking_continue_spinner"></span>
                                    <span class="" role="status" id="booking_continue_text">Continue</span>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
            ng-init="manup.std_sgl_tickets = manup.stander_sigle_count;manup.std_cup_tickets = manup.stander_couple_count;manup.prim_sgl_tickets=manup.premium_sigle_count;manup.prim_cup_tickets = manup.premium_copule_count;manup.kids_tickets=manup.kids_count;manup.entry_tickets = manup.entry_count">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Tickets</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row my-2 align-items-center">
                            <div class="col-6">
                                <h5 class="fw-bold text-nowrap">Standerd Single</h5>
                            </div>
                            <div class="col-6">
                                <div class="input-group ">
                                    <button ng-click="manup.ticket_minus('std_sgl')"
                                        class="btn rounded-start-circle btn-bg-gradient"><i
                                            class="fa fa-minus text-white" aria-hidden="true"></i></button>
                                    <input name="std_sgl" ng-model="manup.std_sgl_tickets"
                                        ng-change="manup.number_of_ticket(manup.std_sgl_tickets,'std_sgl')"
                                        class="form-control  text-center fw-bold" type=" text"
                                        placeholder="Tickets"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    <button ng-click="manup.ticket_pluse('std_sgl')"
                                        class="btn  rounded-end-circle btn-bg-gradient"><i
                                            class="fa fa-plus text-white" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </div>
                        <div class=" row my-2 align-items-center">
                            <div class="col-6">
                                <h5 class="fw-bold text-nowrap">Standerd Couple</h5>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <button ng-click="manup.ticket_minus('std_cup')"
                                        class="btn rounded-start-circle btn-bg-gradient"><i
                                            class="fa fa-minus text-white" aria-hidden="true"></i></button>
                                    <input ng-model="manup.std_cup_tickets"
                                        ng-change="manup.number_of_ticket(manup.std_cup_tickets,'std_cup')"
                                        class="form-control text-center fw-bold" type=" text" placeholder="Tickets"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    <button ng-click="manup.ticket_pluse('std_cup')"
                                        class="btn  rounded-end-circle btn-bg-gradient"><i
                                            class="fa fa-plus text-white" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-6">
                                <h5 class="fw-bold text-nowrap">Premium Single</h5>
                            </div>
                            <div class="col-6">
                                <div class="input-group">

                                    <button ng-click="manup.ticket_minus('prim_sgl')"
                                        class="btn rounded-start-circle btn-bg-gradient"><i
                                            class="fa fa-minus text-white" aria-hidden="true"></i></button>
                                    <input ng-model="manup.prim_sgl_tickets"
                                        ng-change="manup.number_of_ticket(manup.prim_sgl_tickets,'prim_sgl')"
                                        class="form-control text-center fw-bold" type=" text" placeholder="Tickets"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    <button ng-click="manup.ticket_pluse('prim_sgl')"
                                        class="btn  rounded-end-circle btn-bg-gradient"><i
                                            class="fa fa-plus text-white" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-6">
                                <h5 class="fw-bold text-nowrap">Premium Couple</h5>
                            </div>
                            <div class="col-6">
                                <div class="input-group">

                                    <button ng-click="manup.ticket_minus('prim_cup')"
                                        class="btn rounded-start-circle btn-bg-gradient"><i
                                            class="fa fa-minus text-white" aria-hidden="true"></i></button>
                                    <input ng-model="manup.prim_cup_tickets"
                                        ng-change="manup.number_of_ticket(manup.prim_cup_tickets,'prim_cup')"
                                        class="form-control text-center fw-bold" type=" text" placeholder="Tickets"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    <button ng-click="manup.ticket_pluse('prim_cup')"
                                        class="btn  rounded-end-circle btn-bg-gradient"><i
                                            class="fa fa-plus text-white" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="row my-2 align-items-center">
                            <div class="col-6">
                                <h5 class="fw-bold text-nowrap">Kids</h5>
                            </div>
                            <div class="col-6">
                                <div class="input-group">

                                    <button ng-click="manup.ticket_minus('kids')"
                                        class="btn rounded-start-circle btn-bg-gradient"><i
                                            class="fa fa-minus text-white" aria-hidden="true"></i></button>
                                    <input ng-model="manup.kids_tickets"
                                        ng-change="manup.number_of_ticket(manup.kids_tickets,'kids')"
                                        class="form-control text-center fw-bold" type=" text" placeholder="Tickets"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    <button ng-click="manup.ticket_pluse('kids')"
                                        class="btn  rounded-end-circle btn-bg-gradient"><i
                                            class="fa fa-plus text-white" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-6">
                                <h5 class="fw-bold text-nowrap">Entry</h5>
                            </div>
                            <div class="col-6">
                                <div class="input-group">

                                    <button ng-click="manup.ticket_minus('entry')"
                                        class="btn rounded-start-circle btn-bg-gradient"><i
                                            class="fa fa-minus text-white" aria-hidden="true"></i></button>
                                    <input ng-model="manup.entry_tickets"
                                        ng-change="manup.number_of_ticket(manup.entry_tickets,'entry')"
                                        class="form-control text-center fw-bold" type=" text" placeholder="Tickets"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    <button ng-click="manup.ticket_pluse('entry')"
                                        class="btn  rounded-end-circle btn-bg-gradient"><i
                                            class="fa fa-plus text-white" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger rounded-pill"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button " class="btn btn-bg-gradient rounded-pill text-white "
                            ng-click="manup.get_tickets()">Get Ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    @include('layouts._footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layouts._script')

</body>

</html>
