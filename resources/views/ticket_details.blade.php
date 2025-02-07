<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Order Tracking</title>
    @include('layouts._css')

</head>

<body ng-app="myApp" ng-controller="MyController as manup">
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('layouts._header')
    <!-- Header End -->
    <div class="container my-5" ng-init="manup.myTickets = {{ request()->ticket_details }}">
        <div ng-if="manup.myTickets.length > 0" class="card p-3 my-2" ng-repeat="ticket in manup.myTickets">
            <div class="row g-3 align-items-center">
                <!-- Product Image -->
                <div class="col-5 col-md-2  text-center ">
                    <img src="{{ url('/img/event_banner.webp') }}" alt="Product Image" class=" rounded ">
                </div>
                <!-- Product Details -->
                <div class="col-7 col-md-10">
                    <h5 class="mb-1">Fantastic 2K25</h5>
                    <div class=" flex-wrap justify-content-between d-md-flex">
                        <p class="mb-1">Phone : @{{ ticket.contact_mobile }}</p>
                        <p class="mb-1">Email: @{{ ticket.contact_email }}</p>
                        <p class="mb-1">Tickets: @{{ ticket.number_of_ticket }}</p>
                        <p class="mb-1">@{{ ticket.created_at | date: 'dd-MM-yyyy h:mm a' }}</p>
                        <div class="d-flex justify-content-end ">
                            <p class=" mb-1"><a class="primary-btn"
                                    href="/booked_ticket_details/@{{ ticket.id }}">Open</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Progress Bar -->


        </div>
        <div ng-if="manup.myTickets.length == 0">
            <a class="link-primary" href="/">Click and Book Tickets... </a>
        </div>
    </div>

    <!-- Footer Section Begin -->
    <div style="margin-top: 300px">

        @include('layouts._footer')
    </div>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layouts._script')
</body>

</html>
