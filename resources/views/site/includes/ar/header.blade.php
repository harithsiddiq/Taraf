<div class="heederall">

    <!-- start logine -->

    <div class="container loogin">
        <div class="modal n fade" id="modal-xl">
            <div class="modal-dialog modal-xl">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h6 class="modal-title">تسجيل الدخول</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  text-center">
                        <div class="col-md-12">
                            <form class="formdes formaaaas" action="action_page.php">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <label style="float: right" for="">البريد الالكتروني </label>
                                    <input type="text" placeholder="ا" name="search" accept="application/msexcel">
                                </div>
                                <div class="col-md-2"></div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form class="formdes formaaaas" action="action_page.php">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <label style="float: right" for="">كلمة السر </label>
                                    <input type="password" placeholder="ا" name="search" accept="application/msexcel">
                                </div>
                                <div class="col-md-2"></div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button style="border-radius:  100px;" type="button" class=" color-red " data-dismiss="modal">
                            اغلاق
                        </button>
                        <button style="border-radius: 100px;" type="button " class="save  buttom btn  btn-default  ">
                            حفظ
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


    </div>
    <!-- end login -->
    <!-- start service talbat Home  -->
    <div class="container   talabat">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <form action="{{ route('order.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="col-lg-12 col-md-12 ">
                                <div class="tit">
                                    <h3>طلب استقدام </h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="callout callout-warning">
                                    <h5>تحذير</h5>
                                    <p>
                                        لتقديم طلب الاستقدام نرجو تعبئة كامل البيانات بشكل صحيح
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label style="float: right" for="">اختر الوظيفة </label>
                                <select name="job_id">
                                    @foreach($jobs as $job)
                                        <option value="{{$job->id}}">{{ $job->carrer_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6"><label style="float: right" for="">

                                    رقم الهوية الوطنية
                                    <span style="color:red; font-size: 10px;"><i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </label>
                                <input type="text" name="identity_number">
                            </div>
                            <div class="col-md-6">
                                <label style="float: right" for="">رقم التاشيرة
                                </label><input type="text" name="pass_number"></div>
                            <div class="col-md-6"><label style="float: right" for="">الاسم كاملاً
                                    <span style="color:red; font-size: 10px;"><i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </label> <input type="text" name="full_name"></div>

                            <div class="col-md-6">
                                <label style="float: right" for="">البريد الالكتروني </label> <input type="text" name="email">
                            </div>
                            <div class="col-md-6"><label style="float: right" for="">
                                    رقم الجوال
                                    <span style="color:red; font-size: 10px;"><i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </label> <input type="text" name="phone_number">
                            </div>
                            <div class="col-md-6"><label style="float: right" for="">العنوان </label> <input type="text" name="'address">
                            </div>
                            <div class="col-md-12">
                                <label style="float: right" for=""> متطلبات الوظيفة </label><input type="text" name="job_requirement">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <button type="button" class="close1 " data-dismiss="modal">اغلاق</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class=" talabalan boooon btn btn-primary" data-dismiss=""
                                            style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                        اطلب الان
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end service talbat Home  -->


    <!-- start search job country  -->
    <div class="container  serachjob">
        <!-- Modal -->
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-lg-12 col-md-12 ">
                            <div class="tit text-center">
                                <h4>
                                    البحث
                                </h4>
                                <hr>
                            </div>


                        </div>
                        <div class="detlals">
                            <div class="col-md-6 detalcol ">


                                <span>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <strong> الدولة : </strong> الهند
                                </span>
                            </div>
                            <div class="col-md-6 detalcol">


                                <span>
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>

                                    <strong> المهنه : </strong> عاملة منزلية
                                </span>
                            </div>


                        </div>


                        <div class="col-md-12">


                            <table>
                                <tr>

                                    <th>المده التقريبية</th>
                                    <th>الراتب الشهري</th>
                                    <th>تكلفة الاستقدام</th>
                                    <th>خيارات</th>


                                </tr>
                                <tr>

                                    <td>70 يوم</td>
                                    <td>3000 ريال سعودي</td>
                                    <td>تحدد بالاتقاف</td>

                                    <td>
                                        <button type="button" class=" talabalan btn btn-primary" data-dismiss=""
                                                style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                            اطلب الان
                                        </button>
                                    </td>


                                </tr>
                                <tr>

                                    <td>10 يوم</td>
                                    <td>1500 ريال سعودي</td>
                                    <td>4000 ريال</td>

                                    <td>
                                        <button type="button" class=" talabalan btn btn-primary" data-dismiss=""
                                                style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                            اطلب الان
                                        </button>
                                    </td>


                                </tr>
                                <tr>

                                    <td>90 يوم</td>
                                    <td>4000 ريال سعودي</td>
                                    <td>تحدد بالاتقاف</td>

                                    <td>
                                        <button type="button" class=" talabalan btn btn-primary" data-dismiss=""
                                                style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                            اطلب الان
                                        </button>
                                    </td>


                                </tr>

                            </table>
                        </div>

                    </div>


                    <div class="modal-footer">
                        <div class="col-md-12 text-center booton">

                            <button type="button" class="btn btn-danger" data-dismiss="modal"> اغلاق</button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search job country  -->


    <section class="hedermen hidden-xl hidden-lg hidden-md">
        <div class="container-fluid">
            <div class="col-md-4">
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">

                        <ul style="display: inline-grid;">


                            <li class="hvr-bounce-to-bottom"><a href="{{ route('site.index') }}">الرئسية </a></li>
                            <li class="hvr-bounce-to-bottom"><a href="{{ route('site.about') }}">عن الترف</a></li>
                            <li class="hvr-bounce-to-bottom"><a href="{{ route('site.service') }}">خدمات </a></li>
                            <li class="hvr-bounce-to-bottom"><a href="{{ route('site.cv') }}">السيرة الذاتية </a></li>
                            <li class="hvr-bounce-to-bottom"><a href="{{ route('site.order') }}">طلب استقدام </a></li>
                            <li class="hvr-bounce-to-bottom"><a href="{{ route('site.search') }}"> تتبع الطلب </a></li>
                            <li class="hvr-bounce-to-bottom"><a class="nav-link page-scroll" href="#countus"> اتصل
                                    بنا </a></li>

                        </ul>

                    </div>
                </div>

                <span style="font-size: 15px;cursor:pointer;line-height: 2.5;" onclick="openNav()">

                    <!--    &#9776; -->


                    <i class="fa fa-bars" aria-hidden="true"></i>

                    القائمة
                </span>
            </div>

        </div>
    </section>


    <section class="heder">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2 logo  ">
                    <img src="{{ asset('assets/front/images/logo.png') }}">
                </div>


                <div class=" col-md-7 hidden-xs hidden-sm   " style="
    z-index: 555555555;
">
                    <div class="navbarr">
                        <nav class="navbar navbar-default bounceIn wow" data-wow-delay="3s">
                            <div class="contaiid">
                                <div class="navbar-header  top-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">القائمة </span>
                                        <!--
        <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            -->
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.index') }}">الرئسية </a></li>
                                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.about') }}">عن الترف</a></li>
                                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.service') }}">خدمات </a></li>
                                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.cv') }}">السيرة الذاتية </a></li>
                                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.order') }}">طلب استقدام </a></li>

                                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.search') }}"> تتبع الطلب </a>
                                        </li>

                                        <li class="hvr-bounce-to-bottom"><a class="nav-link page-scroll"
                                                                            href="#countus"> اتصل بنا </a></li>


                                    </ul>
                                </div>


                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                    </div>


                </div>
                <div class="col-md-3 colem3 ">


                    <div class="col-md-12" style="
    z-index: 9;
">

                        <div class="secmedai">
                            <i class="fa fa-users" data-toggle="modal" data-target="#modal-xl" aria-hidden="true"></i>
                            <i class="fa fa-instagram fa-x4 bounceIn wow animated" aria-hidden="true"
                               data-wow-delay="4s"
                               style="visibility: visible; animation-delay: 4s; animation-name: bounceIn;"></i>
                            <i class="fa fa-twitter fa-x4 bounceIn wow animated" aria-hidden="true" data-wow-delay="5s"
                               style="visibility: visible; animation-delay: 5s; animation-name: bounceIn;"></i>
                            <i class="fa fa-snapchat fa-x4 bounceIn wow animated" aria-hidden="true" data-wow-delay="5s"
                               style="visibility: visible; animation-delay: 5s; animation-name: bounceIn;"></i>


                            <span class="langg  bounceIn wow animated" aria-hidden="true" data-wow-delay="6s"
                                  style="visibility: visible; animation-delay: 5s; animation-name: bounceIn;">
                                <a href="#">
                                    EN
                                </a>
                            </span>

                            <!--
                            <select class="form-control5 langg" id="sel51">
                                <option>اللغه</option>
                                <option>العربية</option>
                                <option>الانجليزية</option>

                            </select>

-->
                        </div>

                    </div>
                    <div class="col-md-12" style="
    z-index: 9;
">

                        <div class=" Employ1   bounceIn wow animated" aria-hidden="true" data-wow-delay="7s"
                             style="visibility: visible; animation-delay: 5s; animation-name: bounceIn;">


                        </div>


                    </div>

                </div>

            </div>
        </div>


    </section>


    <div class="slidertop">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($slider as $index => $slide)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $index }}" class="@if($index == 0) active @endif"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($slider as $index => $slide)
                <div class="item  @if($index == 0) active @endif">
                    <img class="img-responsive" src="{{ asset("assets/{$slide->photo}") }}" alt="...">
                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

    </div>
</div>
