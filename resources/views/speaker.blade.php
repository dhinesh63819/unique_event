<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Speaker</title>

    @include('layouts._css')

</head>

<body ng-app="myApp" ng-controller="MyController as manup">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('layouts._header')
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Feature Speakers</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>Our Speakers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Speaker Section Begin -->
    <section class="speaker-section spad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" ng-repeat="person in manup.whos_speak">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="@{{ person.image }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4>@{{ person.name }}</h4>
                                        <span>@{{ person.designation }}</span>
                                    </div>
                                    <div class="si-social">
                                        <a target="_blank" href='@{{ person.instagram_id }}'><i
                                                class="fa fa-instagram"></i></a>
                                        {{-- <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a> --}}
                                    </div>
                                    <p>@{{ person.about }} <a class="link-primary"
                                            href="@{{ person.more_link }}">more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="load-more">
                <a href="#" class="primary-btn">Load More</a>
            </div> --}}
        </div>
    </section>
    <!-- Speaker Section End -->

    <!-- Newslatter Section Begin -->
    <!-- <section class="newslatter-section about-newslatter">
        <div class="container">
            <div class="newslatter-inner set-bg" data-setbg="img/newslatter-bg.jpg">
                <div class="ni-text">
                    <h3>Subscribe Newsletter</h3>
                    <p>Subscribe to our newsletter and don’t miss anything</p>
                </div>
                <form action="#" class="ni-form">
                    <input type="text" placeholder="Your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section> -->
    <!-- Newslatter Section End -->

    <!-- Contact Section Begin -->
    @include('layouts._location')
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    @include('layouts._footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layouts._script')
</body>

</html>
