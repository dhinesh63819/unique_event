<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Page User Profile</title>
    @include('layouts._css')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-header {
            color: white;
        }

        .profile-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white;
        }
    </style>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('layouts._header')
    <!-- Header End -->
    <div class="vh-100">


        <div class="profile-header text-center py-2 btn-bg-gradient">
            <i class="fa fa-user fa-5x" aria-hidden="true"></i>
            <h2 class="mt-3 text-capitalize text-white">{{ request()->auth->name }}</h2>
            {{-- <p class="mb-0">Web Developer & Educator</p> --}}
        </div>
        <div class="main-content container my-5">
            <h3 class="mb-3">About Me</h3>
            <p>Phone : {{ request()->auth->phone }}</p>
            <p>Emali Address : {{ request()->auth->email }}</p>
            <p>Address : {{ request()->auth->address }}</p>

            {{-- <h3>Experience</h3>
        <ul>
            <li><strong>Cashier</strong> at Max Textiles (1 year)</li>
            <li><strong>Auditor</strong> for GST Filings (1 year)</li>
            <li><strong>Web Developer</strong> specializing in Bootstrap, Sass, PHP, and AngularJS</li>
            <li><strong>Educator</strong> for Tamil and English (6 months)</li>
        </ul> --}}

            {{-- <h3>Skills</h3>
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li>Bootstrap</li>
                    <li>Sass</li>
                    <li>JavaScript</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>AngularJS</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>Teaching Tamil</li>
                    <li>Teaching English</li>
                </ul>
            </div>
        </div> --}}
        </div>

    </div>
    <!-- Footer Section Begin -->
    @include('layouts._footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layouts._script')
</body>

</html>
