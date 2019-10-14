@extends('pages.layouts.master')

@section('menu')
                    <li><a href="{{ '/' }}">Trang chủ</a></li>
                    <li><a href="{{ '/style' }}">Dự án - Công trình</a></li>
                    <li ><a href="{{ '/fashion' }}">Báo giá - 2019</a></li>
                    <li><a href="{{ '/travel' }}">Thiết kế </a></li>
    <li class="colorlib-active"><a href="{{ '/sport' }}">Tin tức</a></li>
                    <li><a href="{{ '/video' }}">Phong thủy</a></li>
                    <li><a href="{{ '/archive' }}">Liên hệ</a></li>
@stop

@section('content')
    <div id="colorlib-main">
            <div class="colorlib-featured">
                <div class="row">
                    <div class="col-md-8">
                        <div class="featured-post">
                            <div class="blog-img" style="background-image: url(images/img_bg_1.jpg);">
                                <div class="desc">
                                    

                                    <button type="submit" class="btn btn-primary btn-subscribe"><b style="color: yellow;">Giới thiệu</b></button>
                                    <h2 style="color: yellow;  border: 2px solid red; border-radius: 20px; background-color: #0951A5; text-shadow: 0 0 3px red, 0 0 5px red; text-align: center;"> <b> Công ty Vu Gia chuyên xây dựng thiết kế nhà và biệt thự tại Đà Nẵng <b> </h2>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-post2">
                            <a href="single.html" class="blog-img" style="background-image: url(images/img_bg_2.jpg);">
                                <span class="desc">     
                                    <button type="submit" class="btn btn-primary btn-subscribe"><b style="color: yellow;">Phong thủy</b></button>
                                    <h2 style="color: yellow; background-color: #0951A5; border: 2px solid red; border-radius:20px;  text-shadow: 0 0 3px #FF0000, 0 0 5px red; text-align: center;"><b>Phong thủy là yếu tố cần thiết của ngôi nhà<b></h2>
                                </span>
                            </a>
                        </div>
                        <div class="featured-post2">
                            <a href="single.html" class="blog-img" style="background-image: url(images/img_bg_3.jpg);">                        

                                <span class="desc">
                                    <button type="submit" class="btn btn-primary btn-subscribe"><b style="color: yellow;">Công trình</b></button>
                                    <h2 style="color: yellow; background-color: #0951A5; border: 2px solid red; border-radius: 20px;  text-shadow: 0 0 3px #FF0000, 0 0 5px red; text-align: center;"><b>Đưa yếu tố xanh vào ngôi nhà thân yêu<b></h2>
                                </span>
                            </a>
                        </div>
                        <div class="featured-post2">
                            <a href="single.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
                              
                                <span class="desc">   
                                    <button type="submit" class="btn btn-primary btn-subscribe"><b style="color: yellow;">Công trình</b></button>
                                    <h2 style="color: yellow; background-color: #0951A5; border: 2px solid red; border-radius: 20px;  text-shadow: 0 0 3px #FF0000, 0 0 5px red; text-align: center;"><b>Biệt thự tại khu sinh thái<b></h2>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colorlib-blog">
                <div class="container-wrap">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Nature</span></p>
                                    <h2 class="head-article"><a href="#">Nature Lover</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Fashion</span></p>
                                    <h2 class="head-article"><a href="#">Start your Fashion</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Technology</span></p>
                                    <h2 class="head-article"><a href="#">Workspace</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-4.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Nature</span></p>
                                    <h2 class="head-article"><a href="#">Nature Lover</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-5.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Fashion</span></p>
                                    <h2 class="head-article"><a href="#">Start your Fashion</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-6.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Technology</span></p>
                                    <h2 class="head-article"><a href="#">Workspace</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-7.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Nature</span></p>
                                    <h2 class="head-article"><a href="#">Nature Lover</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-8.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Fashion</span></p>
                                    <h2 class="head-article"><a href="#">Start your Fashion</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-9.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Technology</span></p>
                                    <h2 class="head-article"><a href="#">Workspace</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-10.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Nature</span></p>
                                    <h2 class="head-article"><a href="#">Nature Lover</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-11.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Fashion</span></p>
                                    <h2 class="head-article"><a href="#">Start your Fashion</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="blog-entry-sports animate-box">
                                <a href="single.html" class="blog-img" style="background-image: url(images/blog-12.jpg);">
                                </a>
                                <div class="desc">
                                    <p class="tag"><span>Technology</span></p>
                                    <h2 class="head-article"><a href="#">Workspace</a></h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <ul class="pagination">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
        
@stop