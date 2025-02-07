<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Contacts</title>

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

    <!-- Contact Top Content Section Begin -->
    <section class="contact-content-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cc-text set-bg py-5" data-setbg="img/contact-content-bg.jpg">
                        <div class="row ">
                            {{-- <div class="col-lg-8 offset-lg-4">
                                <div class="section-title">
                                    <h2>Location</h2>
                                    <p>Get directions to our event center</p>
                                </div>
                                <div class="cs-text">
                                    <div class="ct-address">
                                        <span>Address:</span>
                                        <p>01 Pascale Springs Apt. 339, NY City <br />United State</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <span>Phone:</span>
                                            (+12)-345-67-8910
                                        </li>
                                        <li>
                                            <span>Email:</span>
                                            info.colorlib@gmail.com
                                        </li>
                                    </ul>
                                    <div class="ct-links">
                                        <span>Website:</span>
                                        <p>https://conference.colorlib.com</p>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-lg-8 offset-lg-4">
                                <div class="section-title">
                                    <h2>Location</h2>
                                    <p>Get directions to our event center</p>
                                </div>
                                <div class="cs-text">
                                    <div class="ct-address">
                                        <span>Address:</span>
                                        <p>No.38, Bharathi Street, <br />Ramalinga nagar,<br />Vettuvankeni,
                                            <br />Chennai -600118
                                        </p>
                                    </div>
                                    <ul>
                                        <li>
                                            <span>Phone:</span>
                                            (+91)-812-457-7775 <br />
                                            (+91)-812-447-7774
                                        </li>
                                        <li>
                                            <span>Email:</span>
                                            support@uniqueeventmanagements.com
                                        </li>
                                    </ul>
                                    {{-- <div class="ct-links">
                                        <span>Website:</span>
                                        <p>https://conference.colorlib.com</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <div class="cc-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105718.20476932525!2d-118.28504975143346!3d34.10298127166687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6badc8521ad%3A0x7ad323479ca23922!2sNortheast%20Los%20Angeles%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1579884986183!5m2!1sen!2sbd"
                            height="580" style="border:0;" allowfullscreen=""></iframe>
                        <div class="map-hover">
                            <i class="fa fa-map-marker"></i>
                            <div class="map-hover-inner">
                                <h5>01 Pascale SP Apt. 339</h5>
                                <p>NewYork City, US</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0"
                                scrolling="no" marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=580&amp;height=580&amp;hl=en&amp;q=No.38, Bharathi Street,Ramalinga nagar,Vettuvankeni,                                            Chennai -600118&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                href="https://embed-googlemap.com">embed-googlemap.com</a></div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                width: 100%;
                                height: 580px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                width: 100%;
                                height: 580px;
                            }

                            .gmap_iframe {
                                height: 580px !important;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Top Content Section End -->

    <!-- Contact Form Section Begin -->
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Contact Us By Email!</h2>
                        <p>Fill out the form below to recieve a free and confidential intial consultation.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="comment-form contact-form">
                        <div class="row">
                            <div class="col-lg-4">
                                <input ng-change="manup.userNameInput()" ng-model="manup.userName" type="text"
                                    placeholder="Name">
                                <p class="text-danger">@{{ manup.userNameError }}</p>
                            </div>
                            <div class="col-lg-4">
                                <input ng-model="manup.userEmail" ng-change="manup.userEmailInput()" type="text"
                                    placeholder="Email">
                                <p class="text-danger">@{{ manup.userEmailError }}</p>
                            </div>
                            <div class="col-lg-4">
                                <input
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                    maxlength="10" ng-change="manup.userMobileInput()" ng-model="manup.userMobile"
                                    type="text" placeholder="Phone">
                                <p class="text-danger">@{{ manup.userMobileError }}</p>
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea ng-change="manup.contactUsMessageInput()" ng-model="manup.contactUsMessage" placeholder="Messages"></textarea>
                                <p class="text-danger">@{{ manup.contactUsMessageError }}</p>
                                <button ng-click="manup.contactUsSendBtn($event)" type="submit" class="site-btn" id="contact_us_btn">
                                    <span class="spinner-border spinner-border-sm d-none" aria-hidden="true"
                                        id="contact_us_spinner"></span>
                                    <span class="" role="status" id="contact_us_text">Send Message</span>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section End -->

    <!-- Footer Section Begin -->
    @include('layouts._footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layouts._script')
</body>

</html>
