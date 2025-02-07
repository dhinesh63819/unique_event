<section class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Who’s comming</h2>
                    <p>These are our communicators, you can see each person information</p>
                </div>
            </div>
        </div>
    </div>
    <div ng-repeat="whos_speak in manup.whos_speak" class="member-item set-bg " data-setbg="@{{whos_speak.image}}">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a target="_blank" href='@{{whos_speak.instagram_id}}'><i
                        class="fa fa-instagram insta_color"></i></a>
                <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a> -->
            </div>
        </div>
        <div class="mi-text">
            <h6 class="text-uppercase">@{{whos_speak.name}}</h6>
            <span>@{{whos_speak.designation}}</span>
        </div>
    </div>
    <!-- <div class="member-item set-bg" data-setbg="img/team-member/member-10.jpg">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5>Emma Sandoval</h5>
            <span>Speaker</span>
        </div>
    </div> -->
</section>
