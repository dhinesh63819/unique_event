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
    <title>Manup | Refund and Cancelation Policy</title>

    @include('layouts._css')


    <style>
        .content-section {
            padding: 40px 20px;
        }

        .content-section h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .content-section h2 {
            font-size: 1.5rem;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .content-section ul {
            /* padding-left: 20px; */
        }
    </style>

</head>

<body ng-app="myApp" ng-controller="MyController as manup">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('layouts._header')
    <!-- Header End -->

    <header class="bg-dark text-white text-center py-4 d-flex justify-content-center align-items-center gap-3">

        <h2>Cancellations and Refunds</h2>
    </header>
    <div class="container content-section">

        <!-- Policy Content -->
        <section class="policy-content">
            <!-- 1. Introduction -->
            <h2 class="text-uppercase"> Introduction</h2>
            <p>
                This policy outlines the terms and conditions for cancellations and
                refunds related to services provided by Unique Event Managements.
            </p>

            <!-- 2. Cancellation by Client -->
            <h2 class="text-uppercase"> Cancellation by Client</h2>
            <ol class="ms-5">
                <li>
                    <strong>Prior to 5 Days:</strong> If the client cancels the contract
                    5 days before the event date, a 100% refund of the total contract
                    value will be issued.
                </li>
                <li>
                    <strong>Force Majeure:</strong> In cases of unforeseen circumstances
                    beyond the control of either party (e.g., natural disasters,
                    pandemics, government restrictions), both parties will mutually
                    agree on a revised date or a partial refund based on the services
                    already rendered.
                </li>
            </ol>

            <!-- 3. Cancellation by Event Management Company -->
            <h2 class="text-uppercase"> Cancellation by Event Management Company</h2>
            <ol class="ms-5">
                <li>
                    The Event Management Company reserves the right to cancel the
                    contract under unforeseen circumstances such as:
                    <ol>
                        <li>Inability to secure key vendors or venues.</li>
                        <li>
                            Unforeseen circumstances beyond the control of the company
                            (e.g., natural disasters, pandemics).
                        </li>
                    </ol>
                </li>
                <li>
                    In case of cancellation by the Event Management Company, the client
                    will be offered a full refund of all payments made or the option to
                    reschedule the event to a mutually agreeable date.
                </li>
            </ol>

            <!-- 4. Payment Schedule and Refunds -->
            <h2 class="text-uppercase"> Payment Schedule and Refunds</h2>
            <ol class="ms-5">
                <li>
                    All refunds will be processed within 30 - 45 business days of the
                    cancellation request.
                </li>
                <li>
                    Refunds will be issued using the original payment method used by the
                    client.
                </li>
            </ol>

            <!-- 5. Changes to the Event -->
            <h2 class="text-uppercase"> Changes to the Event</h2>
            <ol class="ms-5">
                <li>
                    Any changes to the original event scope (e.g., guest count, date,
                    venue) may result in adjustments to the contract price.
                </li>
                <li>
                    The Event Management Company will work with the client to
                    accommodate changes to the best of their ability.
                </li>
            </ol>

            <!-- 6. Liability -->
            <h2 class="text-uppercase"> Liability</h2>
            <p>
                The Event Management Company shall not be liable for any indirect,
                incidental, consequential, or punitive damages arising from the
                cancellation or modification of the event.
            </p>

            <!-- 7. Governing Law -->
            <h2 class="text-uppercase"> Governing Law</h2>
            <p>
                This policy shall be governed by and construed in accordance with the
                laws of India.
            </p>

            <!-- 8. Dispute Resolution -->
            <h2 class="text-uppercase"> Dispute Resolution</h2>
            <p>
                Any disputes arising from this policy shall be attempted to be
                resolved through amicable negotiations. If negotiations fail, the
                parties agree to submit the dispute to as per the applicable laws.
            </p>
        </section>
    </div>


    <!-- Footer Section Begin -->
    @include('layouts._footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layouts._script')
</body>

</html>
