<?php
$price_details_arr = request()->price_details;
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Booked Ticket</title>

    @include('layouts._css')

    <style>
        .ticket {
            max-width: 400px;
            margin: 0px auto;
            border: 1px solid #ddd;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        .ticket-header {
            padding: 15px;
        }

        .ticket-header img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .ticket-body {
            padding: 15px;
            background-color: #f8f9fa;

        }

        .ticket-footer {
            padding: 15px;
            text-align: center;
        }

        .qr-code {
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>

<body  ng-app="myApp" ng-controller="MyController as manup" >
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('layouts._header')
    <!-- Header End -->

    <div class="ticket rounded-4 mb-5">
        <div class="ticket-header  m-3 ">
            <div class="qr-code ">
                <img src="{{ url('img/event_banner.webp') }}" alt="QR Code">
            </div>
            <div class=" text-center">
                <h5 class="fw-bold">Fantastic 2K25</h5>
                <p class="m-0">Unique Event Management</p>
                <p class="m-0">Tus, 31 Dec | 05:00 PM</p>
                <p class="m-0">Grand Ocean Beach Resort</p>
            </div>
        </div>
        <div class="row ticket-body d-flex align-items-center m-3 rounded-4">
            <div class="qr-code col-md-4 ">
                <img src="{{ url($ticket_details->qr_code) }}" alt="QR Code" style="max-width: 100px">
            </div>
            <div class="text-center col-md-8">
                <p class="m-0"><strong>{{$ticket_details->number_of_ticket}} Ticket(s)</strong></p>
                {{-- <p class="m-0">AUDI 2 - CLASSIC: A19</p> --}}
                <p class="m-0">Booking Code: <strong>{{$ticket_details->ticket_code}}</strong></p>
            </div>
        </div>
        <div class="ticket-footer">
            {{-- <button class="btn btn-outline-secondary btn-sm">Cancel Booking</button>
            <button class="btn btn-outline-secondary btn-sm">Contact Support</button> --}}
            <p class="mt-3"><strong>Total Amount: Rs.{{$ticket_details->total_amount}}</strong></p>
        </div>
    </div>



    <!-- Footer Section Begin -->
    @include('layouts._footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layouts._script')
</body>

</html>
