@extends('layouts.frontend')

    @section('page-title')

    <section class="page-title background-title dark banner-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase">Contact us </h3>
                    <span class="text-uppercase"> feel free to ask your question any time </span>
                    <ol class="breadcrumb box">
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">Pages</a>
                        </li>
                        <li class="active">Contact us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    @endsection

    @section('content')

    <section class="body-content">
        <div class="page-content">

            <div class="container">

                <div class="heading-title-alt border-short-bottom text-center ">
                    <h3 class="text-uppercase">feel free to drop us a line</h3>
                    <div class="half-txt">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</div>
                </div>

                <div class="row page-content">
                    <div class="col-md-4">
                        <div class="featured-item text-center">
                            <div class="icon">
                                <i class="icon-map"></i>
                            </div>
                            <div class="title text-uppercase">
                                <h4>location</h4>
                            </div>
                            <div class="desc">
                                Upper Level, Overseas Passenger
                                <br/>Terminal, The Rocks, Sydney 2000
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item text-center">
                            <div class="icon">
                                <i class="icon-mobile"></i>
                            </div>
                            <div class="title text-uppercase">
                                <h4>call us</h4>
                            </div>
                            <div class="desc">
                                Any time. We are open 24/7
                                <br/>+1 2345-67-89000
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item text-center">
                            <div class="icon">
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="title text-uppercase">
                                <h4>mail us</h4>
                            </div>
                            <div class="desc">
                                get support via email
                                <br/>mail@massivetheme.com
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-10 col-md-offset-1">
                        <form class="contact-comments js-Mailer" method="post">
                            <div class="row">

                                <div class="col-md-6 ">

                                    <div class="form-group">
                                        <!-- Name -->
                                        <input type="text" name="name" class=" form-control" placeholder="Name *" maxlength="100" required data-error="You must enter name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Email -->
                                        <input type="email" name="email" class=" form-control" placeholder="Email *" maxlength="100" required data-error="Invalid email address!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Subject -->
                                        <input type="text" name="subject" class=" form-control" placeholder="Subject" maxlength="100">
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <div class="form-group">
                                        <!-- Comment -->
                                        <textarea name="comments" class="cmnt-text form-control" placeholder="Comments" maxlength="400"></textarea>
                                    </div>
                                    <div class="form-group full-width">
                                        <button type="submit" class="btn btn-small btn-dark-solid ">Send Message</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </section>

    @endsection
