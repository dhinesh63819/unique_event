<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Login</title>

    <!-- Google Font -->
    @include('layouts._css')


<body ng-app="myApp" ng-controller="MyController as manup">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <section class="contact-from-section spad bg-image text-white h-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <!-- <p>Fill out the form below to recieve a free and confidential intial consultation.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mx-auto col-md-8 rounded-4 trasperant-effect">
                    <h2 class="text-center mt-5 fw-bold">Login</h2>
                    <form action="#" class="comment-form contact-form p-5">
                        @csrf
                        <div class="">
                            <label for="email" class="form-label fw-bold">Email </label>
                            <input class="m-0" ng-change="manup.userEmailInput()" ng-model="manup.userEmail"
                                type="email" placeholder="Enter email address" id="email" name="email">
                            <p class="text-warning">@{{ manup.userEmailError }}</p>
                        </div>
                        <div class="">
                            <label for="email" class="form-label fw-bold">Password</label>
                            <input class="m-0" ng-change="manup.userPasswordInput()" ng-model="manup.userPassword"
                                type="password" placeholder="Password" name="password">
                            <p class="text-warning">@{{ manup.userPasswordError }}</p>
                        </div>
                        <div class="text-center">
                            <button ng-click="manup.loginSubmit($event)" type="submit" class="site-btn "
                                id="login_btn">
                                <span class="spinner-border spinner-border-sm d-none" aria-hidden="true"
                                    id="login_spinner"></span>
                                <span class="" role="status" id="login_text">Login</span>
                            </button>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between">

                            <p>New user ? - <a href="/register"
                                    class="text-decoration-none text-white fw-bold">Register</a>
                            </p>
                            <p><a href="/forgot-password" class="text-decoration-none text-white fw-bold">Forgot
                                    Password</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('layouts._footer')
</body>


@include('layouts._script')


</html>
