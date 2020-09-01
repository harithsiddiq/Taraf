<section class="hedermen hidden-xl hidden-lg hidden-md  ">
    <div class="container-fluid">
        <div class="col-md-4">
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">

                    <ul style="display: inline-grid;">


                        <li class="hvr-bounce-to-bottom"> <a href="{{ route('site.index') }}">Home </a></li>
                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.about') }}">
                                About    </a></li>
                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.cv') }}">Cv </a></li>
                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.service') }}">service
                            </a></li>
                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.order') }}">
                                Recruitment request
                            </a></li>

                        <li class="hvr-bounce-to-bottom"><a href="{{ route('site.search') }}">order tracking </a></li>

                        <li class="hvr-bounce-to-bottom"><a class="nav-link page-scroll" href="#countus"> Contact Us </a></li>

                    </ul>

                </div>
            </div>

            <span style="font-size: 15px;cursor:pointer;line-height: 2.5;" onclick="openNav()">

                    <!--    &#9776; -->


                    <i class="fa fa-bars" aria-hidden="true"></i>

                    Menu
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
                                    <li class="hvr-bounce-to-bottom"> <a href="{{ route('site.index') }}">Home </a></li>
                                    <li class="hvr-bounce-to-bottom"><a href="{{ route('site.about') }}">
                                            About    </a></li>
                                    <li class="hvr-bounce-to-bottom"><a href="{{ route('site.cv') }}">Cv </a></li>
                                    <li class="hvr-bounce-to-bottom"><a href="{{ route('site.service') }}">service
                                        </a></li>
                                    <li class="hvr-bounce-to-bottom"><a href="{{ route('site.order') }}">
                                            Recruitment request
                                        </a></li>

                                    <li class="hvr-bounce-to-bottom"><a href="{{ route('site.search') }}">order tracking </a></li>

                                    <li class="hvr-bounce-to-bottom"><a class="nav-link page-scroll" href="#countus"> Contact Us </a></li>


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


                        <select class="form-control5 langg" id="sel51">
                            <option>اللغه</option>
                            <option>العربية</option>
                            <option>الانجليزية</option>

                        </select>

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
