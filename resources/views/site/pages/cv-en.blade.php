@extends('layouts.homepage')

@section('content')

    <!--abtive-->
    <section class="abtive cv">
        <div class="container">
            <div class="row">
                <!--prtx-->
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prtx">

                        <!--tit-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tit">
                                <h3>CV Tracking
                                </h3>
                                <hr />
                            </div>
                        </div>
                        <!--pr-->
                        <form action="" method="post">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-about">
                                <div class="col-md-12">
                                    <div class="callout callout-warning">
                                        <h5> Note</h5>

                                        <p>
                                            We are honored to provide the highest levels of service in the field of bringing domestic workers to individuals. We are committed to credibility and clarity in all our dealings, and before that we are keen to build trust with our customers so that we can provide the best services and apply the highest quality standards and national laws in cooperation with the Musandad program


                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-12 cvsearchcol">
                                    <div class="col-md-4 col-sm-4   ">


                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="job_id">
                                                @foreach($jobs as $job)
                                                    <option value="{{ $job->id }}">{{ $job->carrer_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>



                                    </div>
                                    <div class="col-md-4 col-sm-4  ">


                                        <div class="form-group">
                                            <select class="form-control" id="sel1">
                                                <option>Country</option>
                                                <option>ٍSudan </option>
                                                <option>Egypt</option>
                                            </select>
                                        </div>



                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class=" foofdrms">
                                            <button type="button" class="boooon btn btn-primary " data-toggle="modal" data-target="#myModal1"> Search</button>
                                        </div>
                                    </div>



                                </div>



                            </div>
                        </form>

                        @foreach($cvs as $cv)
                            <div class="col-md-12 cvsearcch">

                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> File No :
                                    </strong>
                                    {{ $cv->file_number }}
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Job
                                        :
                                    </strong>
                                    {{ $cv->job_en }}

                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Nationality
                                        :
                                    </strong>
                                    {{ $cv->nationality_en }}

                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Religion :
                                    </strong>
                                    {{ $cv->religion_en  }}
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Age :
                                    </strong>
                                    {{ $cv->age  }}
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong>Previous experience :
                                    </strong>
                                    {!! $cv->expertise !!}
                                </div>

                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong>
                                        Social status :
                                    </strong>
                                    {{ $cv->social_status_en }}
                                </div>


                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong>
                                        Caring for children
                                        :
                                    </strong>
                                    {!! $cv->children !!}
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong>
                                        Home Business :
                                    </strong>
                                    {!! $cv->home_business !!}


                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong>

                                        Cooking experience
                                        :
                                    </strong>

                                    {!! $cv->cooking !!}


                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Care of the elderly :
                                    </strong>
                                    {!! $cv->elderly !!}
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Caring for the gardens
                                        :
                                    </strong>

                                    {!! $cv->gardens !!}
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Education :
                                    </strong>
                                    {!! $cv->education !!}
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong>  University :
                                    </strong>
                                    {!! $cv->university !!}
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Personal appearance
                                        :
                                    </strong>
                                    {!! $cv->appearance !!}


                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> face features :
                                    </strong>
                                    {!! $cv->face !!}

                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Home Business :
                                    </strong>
                                    {!! $cv->home_business !!}

                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong>Take care of the kids
                                        :
                                    </strong>
                                    {!!  $cv->children !!}

                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> Care of the elderly:
                                    </strong>
                                    {!! $cv->elderly !!}

                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 paddingcolm">

                                    <strong> English :
                                    </strong>
                                    {!! $cv->english !!}

                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-md-0"></div>
                                    <div class="col-md-2">
                                        <div class=" foofdrms">
                                            <button type="button" class="boooon btn btn-primary " data-toggle="modal" data-target="#myModal1">Send</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                            </div>
                        @endforeach


                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">1</button>
                                <button type="button" class="btn btn-secondary">2</button>
                                <button type="button" class="btn btn-secondary">3</button>
                            </div>

                        </div>
                        <div class="sher">

                            <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style text-center ">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_whatsapp"></a>

                            </div>

                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->

                        </div>
                        <!--bvide-->

                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
