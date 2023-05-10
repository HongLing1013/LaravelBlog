@extends('layouts.frontend')

  @section('page-title')

  <section class="page-title background-title dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-uppercase">About us </h3>
                <ol class="breadcrumb box">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Pages</a>
                    </li>
                    <li class="active">About us</li>
                </ol>
            </div>
        </div>
    </div>
  </section>

  @endsection


  @section('content')

  <section class="body-content">
    <div class="container">
        <div class="row page-content">
            <div class="post-list-aside">
                <div class="post-single">
                    <div class="col-md-6">
                        <div class="post-slider post-img text-center">
                            <ul class="slides">
                                <li data-thumb="assets/img/post/p1.jpg">
                                    <a href="javascript:;" title="Freshness Photo">
                                        <img src="assets/img/post/p3.jpg" alt="">
                                    </a>
                                </li>
                                <li data-thumb="assets/img/post/p2.jpg">
                                    <a href="javascript:;" title="Awesome Lightbox">
                                        <img src="assets/img/post/p2.jpg" alt="">
                                    </a>
                                </li>
                                <li data-thumb="assets/img/post/p3.jpg">
                                    <a href="javascript:;" title="Massive UI Components">
                                        <img src="assets/img/post/p1.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <h4 class="text-uppercase">
                                 WELCOME TO MASSIVE
                            </h4>

                            <p>
                                Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                dolores. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                explicabo.
                            </p>

                            <p>
                                Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets..
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-bot-80">
            <div class="col-md-6">
                <div class="">
                    <h4 class="text-uppercase">
                        who we are
                    </h4>

                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>

                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-uppercase">
                    Massive Skills
                </h4>

                <!-- progress bar start -->
                <div class="progress massive-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        HTML / CSS / JQUERY <span>80%</span>
                    </div>
                </div>
                <!-- progress bar end -->

                <!-- progress bar start -->
                <div class="progress massive-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        PHOTOSHOP <span>90%</span>
                    </div>
                </div>
                <!-- progress bar end -->

                <!-- progress bar start -->
                <div class="progress massive-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        GRAPHIC DESIGN <span>75% </span>
                    </div>
                </div>
                <!-- progress bar end -->

                <!-- progress bar start -->
                <div class="progress massive-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                        PHP / WORDPRESS <span>82%</span>
                    </div>
                </div>
                <!-- progress bar end -->
            </div>
        </div>

    </div>

    <div class="feature-parallax dark">
        <div class="overlay-dark">
            <div class="container ">
                <div class="row page-content">
                    <div class="col-md-4">
                        <div class="featured-item text-center">
                            <div class="icon theme-color">
                                <i class="icon-lightbulb"></i>
                            </div>
                            <div class="title text-uppercase">
                                <h4>Creative design</h4>
                            </div>
                            <div class="desc">
                                Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item text-center">
                            <div class="icon theme-color">
                                <i class=" icon-browser2"></i>
                            </div>
                            <div class="title text-uppercase">
                                <h4>professional code</h4>
                            </div>
                            <div class="desc">
                                Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item text-center">
                            <div class="icon theme-color">
                                <i class=" icon-laptop2"></i>
                            </div>
                            <div class="title text-uppercase">
                                <h4>easy customize</h4>
                            </div>
                            <div class="desc">
                                Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="heading-title text-center">
                    <h3 class="text-uppercase">WE HAVE A FABULOUS TEAM </h3>
                    <span class="text-uppercase">Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. </span>
                </div>

                <div class="col-md-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="assets/img/team/t-s-1.jpg" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>I love to desing</h4>
                                <p>I love to introduce myself as a hardcore Web Designer.</p>
                            </div>
                            <div class="s-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Martin Smith</h5>
                        <span>founder &amp; ceo</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="assets/img/team/t-s-2.jpg" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>I love to desing</h4>
                                <p>I love to introduce myself as a hardcore Web Designer.</p>
                            </div>
                            <div class="s-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Franklin Harbet</h5>
                        <span>HR Manager</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="assets/img/team/t-s-3.jpg" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>I love to desing</h4>
                                <p>I love to introduce myself as a hardcore Web Designer.</p>
                            </div>
                            <div class="s-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Linda Anderson</h5>
                        <span>Marketing Manager</span>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="gray-bg page-content">
        <div class="container">
            <div class="row">
                <div class=" inline-block">
                    <div class="col-md-3 ">
                        <div class="fun-factor alt">
                            <div class="icon">
                                <i class="icon-layers"></i>
                            </div>
                            <div class="fun-info">
                                <h1 class="timer" data-from="0" data-to="36" data-speed="1000"> </h1>
                                <span>HTML multipage</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fun-factor alt">
                            <div class="icon">
                                <i class="icon-computer_imac_slim"></i>
                            </div>
                            <div class="fun-info">
                                <h1 class="timer" data-from="0" data-to="29" data-speed="1000"> </h1>
                                <span>One page demo</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fun-factor alt">
                            <div class="icon">
                                <i class="icon-database"></i>
                            </div>
                            <div class="fun-info">
                                <h1 class="timer" data-from="0" data-to="87" data-speed="1000"> </h1>
                                <span>usefull shortcode</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fun-factor alt">
                            <div class="icon">
                                <i class="icon-linegraph"></i>
                            </div>
                            <div class="fun-info">
                                <h1 class="timer" data-from="0" data-to="17" data-speed="1000"> </h1>
                                <span>Different Category</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-title text-center">
                        <h3 class="text-uppercase"> OUR HAPPY CLIENTS </h3>
                        <p>We are a team of multi-skilled and curious digital specialists who are always up for a challenge and learning as fast as</p>
                    </div>

                    <div id="clients-1">
                        <div class="item">
                            <img src="assets/img/clients/c-1.png" alt="Clients">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/c-2.png" alt="Clients">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/c-3.png" alt="Clients">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/c-4.png" alt="Clients">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/c-5.png" alt="Clients">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/c-6.png" alt="Clients">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/c-7.png" alt="Clients">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/c-8.png" alt="Clients">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

  </section>
  
  @endsection
