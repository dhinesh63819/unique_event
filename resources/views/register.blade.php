<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Register</title>

    <!-- Google Font -->
    @include('layouts._css')


<body class="overflow-x-hidden" ng-app="myApp" ng-controller="MyController as manup">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <section class="contact-from-section bg-image text-white ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 mx-auto col-md-8 rounded-4 trasperant-effect my-5">
                    <h2 class="text-center mt-5 fw-bold">Register</h2>
                    <form action="#" class="comment-form contact-form p-5" method="POST">
                        @csrf
                        <div class="">
                            <label for="name" class="form-label fw-bold">Name </label>
                            <input ng-change="manup.userNameInput()" ng-model="manup.userName" class="m-0"
                                type="text" placeholder="Enter your name" id="name" name="name">
                            <p class="text-warning">@{{ manup.userNameError }}</p>
                        </div>
                        <div class="">
                            <label for="phone" class="form-label fw-bold">Mobile Number </label>
                            <input class="m-0" ng-change="manup.userMobileInput()" ng-model="manup.userMobile"
                                maxlength="10"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                type="text" placeholder="Enter mobile number" id="phone" name="mobile">
                            <p class="text-warning">@{{ manup.userMobileError }}</p>
                        </div>
                        <div class="">
                            <label for="email" class="form-label fw-bold">Email </label>
                            <input class="m-0" ng-change="manup.userEmailInput()" ng-model="manup.userEmail"
                                type="email" placeholder="Enter email address" id="email" name="email">
                            <p class="text-warning">@{{ manup.userEmailError }}</p>
                        </div>

                        <div class="">
                            <label for="dob" class="form-label fw-bold">Date of birth </label>
                            <input class="m-0" ng-change="manup.userDobInput()" ng-model="manup.userDob"
                                type="date" id="dob" name="dateOfBirth">
                            <p class="text-warning">@{{ manup.userDobError }}</p>
                        </div>
                        <div class="">
                            <label for="address" class="form-label fw-bold">Address (Optional)</label>
                            <textarea ng-model="manup.userAddress" class="form-control mb-2 " rows="2"
                                name="address" id="address" style="height:auto;"></textarea>
                            <!-- <input class="m-0" ng-model="manup.userAddress" type="password" placeholder="Confirm password" id="address" name="address">
                            <p class="text-warning">@{{ manup.userAddressError }}</p> -->
                        </div>

                        <div class="">
                            <label for="email" class="form-label fw-bold">Password</label>
                            <input class="m-0" ng-change="manup.userPasswordInput()" ng-model="manup.userPassword"
                                type="password" placeholder="Password" name="password">
                            <p class="text-warning">@{{ manup.userPasswordError }}</p>
                        </div>
                        <div class="">
                            <label for="cnfm-email" class="form-label fw-bold">Confirm password</label>
                            <input class="m-0" ng-change="manup.userCnfmPasswordInput()"
                                ng-model="manup.userCnfmPassword" type="password" placeholder="Confirm password"
                                id="cnfm-email" name="cnfm_password">
                            <p class="text-warning">@{{ manup.userCnfmPasswordError }}</p>
                        </div>
                        <div class="text-center  ">

                            <button type="submit" class="site-btn " ng-click="manup.registerSubmit($event)" id="register_btn">
                                <span class="spinner-border spinner-border-sm d-none" aria-hidden="true" id="register_spinner"></span>
                                <span class="" role="status" id="register_text">Register</span>
                                <!-- <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> -->
                            </button>
                        </div>
                        <hr />
                        <p>Already have account - <a href="/login"
                                class="text-decoration-none text-white fw-bold">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('layouts._footer')

</body>
@include('layouts._script')

</html>
