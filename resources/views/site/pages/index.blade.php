@extends('layouts.homepage-ar')


@section('content')


    <section class="s-b5uel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6   ">
                    <article class="article-left-last">
                        <span class="clearfix">
                            <img src="{{ asset('assets/front/images/img-post-small.jpg') }}" alt="" class="img-thumbnail">
                            <h4> استقدام عمالة</h4>
                            <p> نوفر افضل الهدمات لاستقدام الخدامات حسب الشروط المطلوبة</p>
                            <div class=" foofdrms">
                                <button type="button" class="boooon btnmenu btn btn-primary " data-toggle="modal"
                                        data-target="#myModal"
                                        style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;"> اطلب الان</button>
                            </div>
                        </span>
                    </article>

                </div>
                <div class="col-md-3 col-sm-6  ">
                    <article class="article-left-last">
                        <span class="clearfix">
                            <img src="{{ asset('assets/front/images/img-post-small.jpg') }}" alt="" class="img-thumbnail">
                            <h4> استقدام سائقين</h4>
                            <p> نستقدم سائقين مؤهلين برخص قيادة معترف بها دوليا </p>
                            <div class=" foofdrms">
                                <button type="button" class="boooon btnmenu btn btn-primary " data-toggle="modal"
                                        data-target="#myModal"
                                        style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;"> اطلب الان</button>




                            </div>
                        </span>
                    </article>

                </div>
                <div class="col-md-3 col-sm-6  ">
                    <article class="article-left-last">
                        <span class="clearfix">
                            <img src="{{ asset('assets/front/images/img-post-small.jpg') }}" alt="" class="img-thumbnail">
                            <h4> تصديق اوراق </h4>
                            <p> نتابع الاوراق لدي الجهات الحكومية </p>
                            <div class=" foofdrms">
                                <button type="button" class="boooon btnmenu btn btn-primary " data-toggle="modal"
                                        data-target="#myModal"
                                        style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;"> اطلب الان</button>
                            </div>
                        </span>
                    </article>

                </div>
                <div class="col-md-3 col-sm-6 ">
                    <article class="article-left-last">
                        <span class="clearfix">
                            <img src="{{ asset('assets/front/images/img-post-small.jpg') }}" alt="" class="img-thumbnail">
                            <h4> متابعه عقود استقدام</h4>
                            <p> يتم متابعه خاصة الاجراءات القانونية الخاصة بالعمالة </p>
                            <div class=" foofdrms">
                                <button type="button" class="boooon btnmenu btn btn-primary " data-toggle="modal"
                                        data-target="#myModal"
                                        style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;"> اطلب الان</button>




                            </div>
                        </span>
                    </article>

                </div>


            </div>
        </div>
    </section>


    <section class="colm33">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 slidr2 ">


                    <div id="carousel-example-generic" class="carousel slide silder11 " data-ride="carousel">
                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <img src="{{ asset('assets/front/images/3.png') }}" alt="...">

                            </div>
                            <div class="item ">
                                <img src="{{ asset('assets/front/images/4.png') }}" alt="...">

                            </div>


                        </div>


                    </div>


                </div>


                <div class="col-md-8 bbac">


                    <div class="col-md-8   inputtest">
                        <h4 style="
    padding-top: 10px;
    padding-bottom: 10px;
">هل تبحث عن عمالة</h4>

                        <div class="col-md-12">
                            <div class="col-md-4 col-sm-6   ">


                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        @foreach($jobs as $job)
                                            <option value="{{ $job->id }}">{{ $job->carrer_name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                            <div class="col-md-4 col-sm-6  ">
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->country_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class=" foofdrms">
                                    <button type="button" class="boooon btn btn-primary " data-toggle="modal"
                                            data-target="#myModal1"> بحث
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <h4 style="

">متابعه الطلب</h4>


                                <div class="col-md-12 motaba   formaaaa">

                                    <form class="formdes formaaaas" action="action_page.php">


                                        <input type="text" placeholder="ادخل رقم الهوية لتتبع الطلب" name="search"
                                               accept="application/msexcel" style="width: 69%;
    float: right;">
                                        <a href="searchtalab.html">
                                            <button type="button" class="boooon btn btn-primary " style="
       width: 77px;
    margin-right: 29px;
"> طلب
                                            </button>
                                        </a>


                                    </form>


                                </div>


                            </div>

                        </div>


                    </div>
                    <div class="col-md-4 pic">
                        <!--
              <img src="images/10.jpg" width="116%" height="250px;">

              -->
                        <img src="{{ asset('assets/front/images/5.png') }}" width="285" height="250">

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="omla">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 text-center rfow45">
                    <h2>
                        استقدام جميع الجنسيات والمهن المصرحه للعمالة
                    </h2>
                    <img style="display: none" class="img-responsive" src="{{ asset('assets/front/images/Capture1.JPG') }}">

                </div>
                <div class="col-md-8  baaac">
                    <div class='row'>
                        <div class=' col-md-8 slidertexr'>
                            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach($news as $index => $new)
                                        <li data-target="#quote-carousel" data-slide-to="{{ $index }}" class="@if($index == 0) active @endif"></li>
                                    @endforeach
                                </ol>

                                <!-- Carousel Slides / Quotes -->
                                <div class="carousel-inner">
                                    <!-- Quote 1 -->
                                    @foreach($news as $index => $new)
                                        <div class="item @if($index == 0) active @endif">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-4 text-center">
                                                    <img class="img-responsive" src="{{ asset("assets/$new->image") }}">
                                                </div>
                                                <div class="col-sm-8 textslider">
                                                    <h5><i class="fa fa-rss" aria-hidden="true"></i>
                                                        مكتب الترف للاستقدام </h5>
                                                    <hr>
                                                    <span>
                                                        {{ $new->body_ar }}
                                                    </span>

                                                </div>
                                            </div>

                                        </blockquote>
                                    </div>
                                    @endforeach
                                </div>

                                <!-- Carousel Buttons Next/Prev -->
                                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                                        class="fa fa-chevron-left"></i></a>
                                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="omlaCOL-3 slideromala">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">

                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-1"></div>

                                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{ asset('assets/front/images/2.png') }}" alt="Image"
                                                                                             style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-2"><a href="#" class="thumbnail "><img src="{{ asset('assets/front/images/1.png') }}" alt="Image"
                                                                                              style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{ asset('assets/front/images/email_07.png') }}"
                                                                                             alt="Image"
                                                                                             style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-2"><a href="#" class="thumbnail  "><img src="{{ asset('assets/front/images/abshir.png') }}"
                                                                                               alt="Image"
                                                                                               style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-2  "><a href="#" class="thumbnail"><img src="{{ asset('assets/front/images/email_15.png') }}"
                                                                                               alt="Image"
                                                                                               style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->


                            <div class="item ">
                                <div class="row">
                                    <div class="col-md-1"></div>

                                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{ asset('assets/front/images/2.png') }}" alt="Image"
                                                                                             style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-2"><a href="#" class="thumbnail "><img src="{{ asset('assets/front/images/1.png') }}" alt="Image"
                                                                                              style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{ asset('assets/front/images/email_07.png') }}"
                                                                                             alt="Image"
                                                                                             style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-2"><a href="#" class="thumbnail  "><img src="{{ asset('assets/front/images/abshir.png') }}"
                                                                                               alt="Image"
                                                                                               style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-2  "><a href="#" class="thumbnail"><img src="{{ asset('assets/front/images/email_15.png') }}"
                                                                                               alt="Image"
                                                                                               style="max-width:100%;"></a>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->
                </div>
            </div>
        </div>
    </div>


    <section class="oml5a">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>

@stop
