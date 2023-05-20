                   <!--latest post widget-->
                   <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">latest post</h6>
                    </div>
                    <ul class="widget-latest-post">
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="/assets/img/post/post-thumb.jpg" alt="" />
                                </a>
                            </div>
                            <div class="w-desk">
                                <a href="#">Old Father Getup</a>
                                April 25, 2014
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="/assets/img/post/post-thumb-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="w-desk">
                                <a href="#">Represent is the best way</a>
                                March 28, 2014
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="/assets/img/post/post-thumb-3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="w-desk">
                                <a href="#">Alone with the music</a>
                                May 05, 2014
                            </div>
                        </li>
                    </ul>
                </div>
                <!--latest post widget-->

                <!--category widget-->
                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">category</h6>
                    </div>
                    <ul class="widget-category">
                        @foreach($categories as $category)
                            <li><a href="/posts/category/{{ $category->id }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!--category widget-->

                <!--comments widget-->
                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">Latest comments </h6>
                    </div>
                    <ul class="widget-comments">
                        <li>Jonathan on <a href="javascript:;">Vesti blulum quis dolor </a>
                        </li>
                        <li>Jane Doe on <a href="javascript:;">Nam sed arcu tellus</a>
                        </li>
                        <li>Margarita on <a href="javascript:;">Fringilla ut vel ipsum </a>
                        </li>
                        <li>Smith on <a href="javascript:;">Vesti blulum quis dolor sit</a>
                        </li>
                    </ul>
                </div>
                <!--comments widget-->

                <!--tags widget-->
                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">tag cloud</h6>
                    </div>
                    <div class="widget-tags">
                        <a href="">Portfolio</a>
                        <a href="">Design</a>
                        <a href="">Link</a>
                        <a href="">Gallery</a>
                        <a href="">Video</a>
                        <a href="">Clean</a>
                        <a href="">Retina</a>
                    </div>
                </div>
                <!--tags widget-->