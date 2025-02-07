<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Reset Password</title>

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
                    <h2 class="text-center mt-5 fw-bold">Reset Password</h2>
                    <form class="comment-form contact-form p-5">
                        @csrf
                        <div ng-init="manup.reset_token = '{{ request()->token }}'" hidden></div>
                        {{-- <input type="hidden" name="token" value="{{ request()->token }}"> --}}

                        <div class="form-group row">
                            <label for="email_address" class=" col-form-label text-md-right">E-Mail
                                Address</label>
                            <div class="">
                                <input ng-change="manup.userEmailInput()" ng-model="manup.userEmail" type="email"
                                    id="email_address" class="form-control" name="email" required autofocus>
                                {{-- @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif --}}
                                <p class="text-danger">@{{ manup.userEmailError }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class=" col-form-label text-md-right">Password</label>
                            <div class="">
                                <input ng-change=" manup.userPasswordInput()" ng-model="manup.userPassword"
                                    type="password" id="password" class="form-control" name="password" required
                                    autofocus>
                                <p class="text-danger">@{{ manup.userPasswordError }}</p>

                                {{-- @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class=" col-form-label text-md-right">Confirm
                                Password</label>
                            <div class="">
                                <input ng-change="manup.userCnfmPasswordInput()" ng-model="manup.userCnfmPassword"
                                    type="password" id="password-confirm" class="form-control"
                                    name="password_confirmation" required autofocus>
                                <p class="text-danger">@{{ manup.userCnfmPasswordError }}</p>

                                {{-- @if ($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif --}}
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-primary" ng-click="manup.resetPassword($event)">
                                Reset Password
                            </button>
                        </div>
                        <p class="text-success">@{{ manup.userEmailMessage }}</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('layouts._footer')

</body>

@include('layouts._script')


</html>
