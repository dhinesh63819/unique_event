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
    <title>Manup | Terms and Conditions</title>

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

        <h2>Terms and Conditions</h2>
    </header>
    <main class="container content-section">
        <section>
            <h2 class="text-uppercase">Introduction</h2>
            <p>
                These Terms and Conditions govern the provision of event planning and
                management services by
                <strong>Unique Event Managements</strong> ("Company") to the client
                ("Client"). By engaging the Company's services, the Client
                acknowledges and agrees to be bound by these Terms and Conditions.
            </p>
        </section>

        <section>
            <h2 class="text-uppercase">Scope of Services</h2>
            <p>
                The scope of services provided by the Company shall be outlined in a
                separate written agreement (the "Agreement") between the Client and
                the Company. The Agreement shall specify the event date(s),
                location(s), budget, and specific services to be provided by the
                Company.
            </p>
        </section>

        <section>
            <h2 class="text-uppercase">Client Responsibilities</h2>
            <ol class="ms-5">
                <li>
                    Provide the Company with all necessary information and materials
                    related to the event, including but not limited to guest lists,
                    venue information, and any relevant documentation.
                </li>
                <li>
                    Obtain any necessary permits or licenses required for the event.
                </li>
                <li>
                    Cooperate fully with the Company in all aspects of the event
                    planning and execution.
                </li>
                <li>
                    Make all necessary payments to the Company as per the agreed-upon
                    payment schedule.
                </li>
            </ol>
        </section>

        <section>
            <h2 class="text-uppercase">Company Responsibilities</h2>
            <ol class="ms-5">
                <li>
                    Plan and execute the event in accordance with the agreed-upon scope
                    of services and within the agreed-upon budget.
                </li>
                <li>
                    Source and negotiate with vendors (e.g., venues, caterers,
                    entertainment) as required.
                </li>
                <li>
                    Oversee all aspects of event logistics, including setup, tear-down,
                    and on-site management.
                </li>
                <li>
                    Communicate regularly with the Client throughout the event planning
                    process.
                </li>
            </ol>
        </section>

        <section>
            <h2 class="text-uppercase">Liability</h2>
            <ol class="ms-5">
                <li>
                    The Company shall not be liable for any indirect, incidental,
                    consequential, or punitive damages arising from the performance or
                    non-performance of its services.
                </li>
                <li>
                    The Company shall not be liable for any damages caused by acts of
                    God, force majeure events, or unforeseen circumstances beyond its
                    reasonable control.
                </li>
                <li>
                    The Client shall indemnify and hold harmless the Company from any
                    and all claims, losses, damages, liabilities, and expenses arising
                    from the Client's actions or omissions.
                </li>
            </ol>
        </section>

        <section>
            <h2 class="text-uppercase">Intellectual Property</h2>
            <p>
                All intellectual property rights created by the Company for the event,
                including but not limited to designs, plans, and marketing materials,
                shall remain the property of the Company.
            </p>
        </section>

        <section>
            <h2 class="text-uppercase">Governing Law</h2>
            <p>
                These Terms and Conditions shall be governed by and construed in
                accordance with the laws of [Your State/Country].
            </p>
        </section>

        <section>
            <h2 class="text-uppercase">Dispute Resolution</h2>
            <p>
                Any disputes arising from these Terms and Conditions shall be
                attempted to be resolved through amicable negotiations. If
                negotiations fail, the parties agree to submit the dispute to
                [Mediation/Arbitration] as per the applicable laws.
            </p>
        </section>
        <hr />
        <section>
            <h2 class="text-uppercase">Contact Information</h2>
            <address>
                <strong>Unique Event Managements</strong><br />
                No.38, Bharathi Street, Ramalinga Nagar,<br />
                Vettuvankeni, Chennai - 600115<br />
                Phone: +91 81245 77775, +91 81244 77774<br />
                Email:
                <a class="text-decoration-none"
                    href="mailto:info@uniqueeventmanagements.com">info@uniqueeventmanagements.com</a>
            </address>
        </section>
    </main>


    <!-- Footer Section Begin -->
    @include('layouts._footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layouts._script')
</body>

</html>
