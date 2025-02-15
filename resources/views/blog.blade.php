<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Blog</title>

    @include('layouts._css')

</head>

<body>
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
                        <h2>News Latest</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>Our Blogs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
                                <div class="bi-tag bg-gradient">Foody</div>
                                <div class="bi-text">
                                    <h5><a href="./blog-details.html">Google's AI Assistant Aims to Transcend the Smart Speaker</a></h5>
                                    <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
                                <div class="bi-tag bg-gradient">Foody</div>
                                <div class="bi-text">
                                    <h5><a href="./blog-details.html">Free Classifiends Using Them To Promote</a></h5>
                                    <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item set-bg large-item" data-setbg="img/blog/blog-4.jpg">
                        <div class="bi-tag bg-gradient">Business</div>
                        <div class="bi-text">
                            <h3><a href="./blog-details.html">"Inspired By Modiji, Will Make Biopic": BJP's Ravi Kishan</a></h3>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-item set-bg" data-setbg="img/blog/blog-7.jpg">
                                <div class="bi-tag bg-gradient">Foody</div>
                                <div class="bi-text">
                                    <h5><a href="./blog-details.html">The ZenBook With a Touchpad That Lights Up</a></h5>
                                    <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item set-bg" data-setbg="img/blog/blog-8.jpg">
                                <div class="bi-tag bg-gradient">Foody</div>
                                <div class="bi-text">
                                    <h5><a href="./blog-details.html">Is the Detel Posh a Posh Speaker?</a></h5>
                                    <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item set-bg large-item" data-setbg="img/blog/blog-3.jpg">
                        <div class="bi-tag bg-gradient">Marketing</div>
                        <div class="bi-text">
                            <h3><a href="./blog-details.html">Lok Sabha Elections 2019 - In BJP, Only ''Tai'' Can Admonish Me: PM Modi On Sumitra
                                Mahajan</a></h3>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-item set-bg" data-setbg="img/blog/blog-5.jpg">
                                <div class="bi-tag bg-gradient">Design</div>
                                <div class="bi-text">
                                    <h5><a href="./blog-details.html">The Biggest Stories Of January 06, 2019</a></h5>
                                    <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item set-bg" data-setbg="img/blog/blog-6.jpg">
                                <div class="bi-tag bg-gradient">UX/UI</div>
                                <div class="bi-text">
                                    <h5><a href="./blog-details.html">Alexa Can Now Show You Things!</a></h5>
                                    <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-9.jpg">
                        <div class="bi-tag bg-gradient">Marketing</div>
                        <div class="bi-text">
                            <h3><a href="./blog-details.html">"Still Waiting For BJP To Make Me Chief Minister": Goa Assembly Speaker</a></h3>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more blog-more">
                <a href="#" class="primary-btn">Load More</a>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    @include("layouts._footer")
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include("layouts._script")
</body>

</html>
