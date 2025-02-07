<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | About</title>

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
                        <h2>About Us</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Something About Us</h2>
                        <p class="f-para">There are several ways people can make money online. From selling products to
                            advertising. In this article I am going to explain the concept of contextual advertising.
                        </p>
                        <p>First I will explain what contextual advertising is. Contextual advertising means the
                            advertising of products on a website according to the content the page is displaying. For
                            example if the content of a website was information on a Ford truck then the advertisements
                            would be for Ford trucks for sale, or Ford servicing etc. It picks up the words on the page
                            and displays ads that are similar to those words. Then when someone either performs an
                            action or clicks on your page you will get paid.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="img/about-us.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h3>The 2019 Conference</h3>
                        <p>When I first got into the online advertising business, I was looking for the magical
                            combination that would put my website into the top search engine rankings, catapult me to
                            the forefront of the minds or individuals looking to buy my product, and generally make me
                            rich beyond my wildest dreams! After succeeding in the business for this long, I’m able to
                            look back on my old self with this kind of thinking and shake my head. </p>
                        <ul>
                            <li><span class="icon_check"></span> Write On Your Business Card</li>
                            <li><span class="icon_check"></span> Advertising Outdoors</li>
                            <li><span class="icon_check"></span> Effective Advertising Pointers</li>
                            <li><span class="icon_check"></span> Kook 2 Directory Add Url Free</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Team Member Section Begin -->
    @include('layouts._whos_comming')
    <!-- Team Member Section End -->

    <!-- Story Section Begin -->
    <section class="story-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Story</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="story-left">
                        <div class="story-item">
                            <h2>2008</h2>
                            <div class="si-text">
                                <h4>Adwords Keyword Research For Beginners</h4>
                                <p>However this is also the most expensive position. Give it a try if the second to
                                    fourth display position gives you more visitors and more customers for less money.
                                </p>
                            </div>
                        </div>
                        <div class="story-item">
                            <h2>2011</h2>
                            <div class="si-text">
                                <h4>Adwords Keyword Research For Beginners</h4>
                                <p>Virgin Mobile took a more effective approach in marketing their cell phone service by
                                    focusing not on the people that would be making the actual purchase.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story-right">
                        <div class="story-item">
                            <h2>2015</h2>
                            <div class="si-text">
                                <h4>15 Tips To Increase Your Adwords Profits</h4>
                                <p>There is no better advertisement campaign that is low cost and also successful at the
                                    same time. Great business ideas when utilized effectively can save lots of money.
                                </p>
                            </div>
                        </div>
                        <div class="story-item">
                            <h2>2019</h2>
                            <div class="si-text">
                                <h4>Advertising Internet Online Opportunities To Explore</h4>
                                <p>Many people sign up for affiliate programs with the hopes of making some serious
                                    money. They advertise a few places and then wait for the money to start pouring in.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Story Section End -->

    <!-- Pricing Section Begin -->
    @include('layouts._pricing');
    <!-- Pricing Section End -->

    <!-- Testimonial Section Begin -->
    {{-- <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Testimonials</h2>
                        <p>Our customers are our biggest supporters. What do they think of us?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="testimonial-slider owl-carousel">
                            <div class="col-lg-6">
                                <div class="testimonial-item">
                                    <div class="ti-author">
                                        <div class="quote-pic">
                                            <img src="img/quote.png" alt="">
                                        </div>
                                        <div class="ta-pic">
                                            <img src="img/testimonial/testimonial-1.jpg" alt="">
                                        </div>
                                        <div class="ta-text">
                                            <h5>Emma Sandoval</h5>
                                            <span>Speaker Manager</span>
                                        </div>
                                    </div>
                                    <p>“First impression is made by logo or its absence. To know the importance of a
                                        logo just answer one question: How many big, leading and famous companies don’t
                                        have logos?”</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial-item">
                                    <div class="ti-author">
                                        <div class="quote-pic">
                                            <img src="img/quote.png" alt="">
                                        </div>
                                        <div class="ta-pic">
                                            <img src="img/testimonial/testimonial-2.jpg" alt="">
                                        </div>
                                        <div class="ta-text">
                                            <h5>John Smith</h5>
                                            <span>Speaker Manager</span>
                                        </div>
                                    </div>
                                    <p>“There is no denying the fact that the success of an advertisement lies mostly in
                                        the headline. The headline should attract the reader and make him read the rest
                                        of the advertisement.”</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial-item">
                                    <div class="ti-author">
                                        <div class="quote-pic">
                                            <img src="img/quote.png" alt="">
                                        </div>
                                        <div class="ta-pic">
                                            <img src="img/testimonial/testimonial-2.jpg" alt="">
                                        </div>
                                        <div class="ta-text">
                                            <h5>John Smith</h5>
                                            <span>Speaker Manager</span>
                                        </div>
                                    </div>
                                    <p>“There is no denying the fact that the success of an advertisement lies mostly in
                                        the headline. The headline should attract the reader and make him read the rest
                                        of the advertisement.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Testimonial Section End -->

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
