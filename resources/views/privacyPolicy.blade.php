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
    <title>Manup | Privacy Policy</title>

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

        <h2>Privacy Policy</h2>
    </header>
    <div class="container content-section">
        <!-- Policy Content -->
        <section class="">
            <h2 class="text-uppercase"> Effective Date: 19/12/2024</h2>

            <p>
                This Privacy Policy explains how Unique Event Managements ("we," "us,"
                or "our") collects, uses, discloses, and protects the personal
                information of our clients, vendors, attendees, and other individuals
                with whom we interact ("you").
            </p>

            <!-- 1. Information We Collect -->
            <h2 class="text-uppercase"> Information We Collect</h2>
            <ol class="ms-5">
                <li>
                    Contact Information: Name, email address, phone number, mailing
                    address.
                </li>
                <li>
                    Event Registration Information: Event preferences, dietary
                    restrictions, emergency contact information.
                </li>
                <li>
                    Financial Information: Credit card information, billing address,
                    invoicing details.
                </li>
                <li>
                    Communication Records: Emails, phone calls, text messages, and other
                    correspondence.
                </li>
                <li>
                    Marketing and Promotional Information: Preferences for receiving
                    marketing communications.
                </li>
                <li>
                    Technical Information: IP address, browser type, and other technical
                    information collected automatically when you visit our website or
                    use our services.
                </li>
            </ol>

            <!-- 2. How We Collect Information -->
            <h2 class="text-uppercase"> How We Collect Information</h2>
            <ol class="ms-5">
                <li>
                    Directly from you: When you register for an event, contact us for
                    inquiries, or provide information through our website or other
                    channels.
                </li>
                <li>
                    Automatically: When you visit our website, we may collect certain
                    information automatically, such as your IP address and browser type.
                </li>
                <li>
                    From third parties: We may receive personal information from third
                    parties, such as event venues or service providers.
                </li>
            </ol>

            <!-- 3. How We Use Information -->
            <h2 class="text-uppercase"> How We Use Information</h2>
            <ol class="ms-5">
                <li>
                    To provide our services: To plan, organize, and execute events,
                    including registration, ticketing, and on-site services.
                </li>
                <li>
                    To communicate with you: To send event-related information, such as
                    confirmations, reminders, and updates.
                </li>
                <li>
                    To process payments: To process transactions and manage billing.
                </li>
                <li>
                    To improve our services: To analyze event data and improve our
                    services based on customer feedback.
                </li>
                <li>
                    To market our services: To send you marketing communications, such
                    as newsletters and promotional offers.
                </li>
                <li>
                    To comply with legal obligations: To comply with applicable laws and
                    regulations.
                </li>
            </ol>

            <!-- 4. Disclosure of Information -->
            <h2 class="text-uppercase"> Disclosure of Information</h2>
            <ol class="ms-5">
                <li>
                    Event venues: To coordinate event logistics and ensure smooth
                    operations.
                </li>
                <li>
                    Service providers: To provide services such as catering,
                    entertainment, and transportation.
                </li>
                <li>
                    Payment processors: To process payments for event registration and
                    other services.
                </li>
                <li>
                    Marketing partners: To assist with marketing and promotional
                    activities.
                </li>
                <li>
                    Law enforcement: To comply with legal requests and cooperate with
                    law enforcement investigations.
                </li>
            </ol>

            <!-- 5. Data Security -->
            <h2 class="text-uppercase"> Data Security</h2>
            <p>
                We take reasonable measures to protect your personal information from
                unauthorized access, use, or disclosure. We use appropriate security
                measures, such as encryption and access controls, to safeguard your
                information.
            </p>

            <!-- 6. Data Retention -->
            <h2 class="text-uppercase"> Data Retention</h2>
            <p>
                We retain your personal information for as long as necessary to
                fulfill the purposes for which it was collected or as required by law.
            </p>

            <!-- 7. Your Rights -->
            <h2 class="text-uppercase"> Your Rights</h2>
            <ol class="ms-5">
                <li>
                    Access: Request access to the personal information we hold about
                    you.
                </li>
                <li>
                    Correction: Request correction of any inaccurate or incomplete
                    personal information.
                </li>
                <li>
                    Erasure: Request erasure of your personal information in certain
                    circumstances.
                </li>
                <li>
                    Restriction: Request restriction of the processing of your personal
                    information.
                </li>
                <li>
                    Data portability: Request portability of your personal information
                    in certain circumstances.
                </li>
                <li>
                    Object: Object to the processing of your personal information.
                </li>
            </ol>

            <!-- 8. Children's Privacy -->
            <h2 class="text-uppercase"> Children's Privacy</h2>
            <p>
                Our services are not intended for children under the age of 13. We do
                not knowingly collect personal information from children under 13.
            </p>

            <!-- 9. Changes to This Privacy Policy -->
            <h2 class="text-uppercase"> Changes to This Privacy Policy</h2>
            <p>
                We may update this Privacy Policy from time to time. We will notify
                you of any material changes by posting the updated policy on our
                website.
            </p>

            <!-- 10. Contact Us -->
            <hr>
            <h2 class="text-uppercase">Contact Us</h2>
            <p>
                If you have any questions about this Privacy Policy, please contact us
                at
                <a class="text-decoration-none"
                    href="mailto:support@uniqueeventmanagements.com">support@uniqueeventmanagements.com</a>.
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
