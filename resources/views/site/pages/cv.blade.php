@extends('layouts.homepage-ar')

@section('content')

    <section class="abtive cv">
        <div class="container">
            <div class="row">
                <!--prtx-->
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prtx">

                        <!--tit-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tit">
                                <h3>تتبع السيرة الذاتية </h3>
                                <hr />
                            </div>
                        </div>
                        <!--pr-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-about">
                            <div class="col-md-12">
                                <div class="callout callout-warning">
                                    <h5>ملاحظة</h5>
                                    <p>
                                        نتشرف بتقديم أرقى مستويات الخدمة في مجال استقدام العمالة المنزلية للأفراد. ونلتزم بالمصداقية والوضوح في كافة تعاملاتنا ونحرص قبل ذلك على بناء الثقة مع عملائنا ليتسنى لنا بتقديم أفضل الخدمات وتطبيق أعلى معايير الجودة والقوانين الوطنية بالتعاون مع برنامج مساند </p>
                                </div>
                            </div>
                            <div class="col-md-12 cvsearchcol">
                            </div>
                        </div>

                        <div class="col-md-12 cvsearchcol">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        <option>Job</option>
                                        <option>a house keeper</option>
                                        <option> personal driver</option>

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


                        @foreach($cvs as $cv)
                            <div class="col-md-12 cvsearcch">

                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> رقم الملف :
                                    </strong>
                                    {{ $cv->file_number }}
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> المهنة :
                                    </strong>
                                    {{ $cv->job_ar }}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> الجنسية :
                                    </strong>
                                    {{ $cv->nationality_ar }}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> الديانة :
                                    </strong>
                                    {{ $cv->religion_ar }}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> العمر :
                                    </strong>
                                    {{ $cv->age }}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> الخبرات السابقة :
                                    </strong>
{{--                                    {!! $cv->expertise !!}--}}
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong>
                                        الحالة الاجتماعية :
                                    </strong>
                                    {{ $cv->social_status_ar }}
                                </div>


                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong>
                                        الاهتمام بالاطفال :
                                    </strong>
                                    {!! $cv->children !!}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong>
                                        الاعمال المنزلية :
                                    </strong>
                                    {!! $cv->home_business !!}


                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong>

                                        خبرة بالطبخ :
                                    </strong>

                                    {!! $cv->cooking !!}


                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> رعاية المسنين :
                                    </strong>
                                    {!! $cv->elderly !!}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> الاعتناء بالحدائق :
                                    </strong>
                                    {!! $cv->gardens !!}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> التعليم :
                                    </strong>
                                    {!! $cv->education !!}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> الجامعة :
                                    </strong>
                                    {!! $cv->university !!}
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> المظهر الشخصي:
                                    </strong>
                                    {!! $cv->appearance !!}

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> تعابير الوجه :
                                    </strong>
                                    {!! $cv->face !!}

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> الاعمال المنزلية :
                                    </strong>
                                    {!! $cv->home_business !!}

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> رعاية بالاطفال :
                                    </strong>
                                    {!!  $cv->children !!}

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> رعاية المسنين:
                                    </strong>
                                    {!! $cv->elderly !!}

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 paddingcolm">

                                    <strong> اللغة الانكليزية :
                                    </strong>
                                    {!! $cv->english !!}

                                </div>


                                <div class="col-md-12 col-sm-12">
                                    <div class="col-md-0"></div>
                                    <div class="col-md-2">
                                        <div class=" foofdrms">
                                            <button type="button" class="boooon btn btn-primary " data-toggle="modal" data-target="#myModal1"> اطلب</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>



                            </div>
                        @endforeach

                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                @foreach($cvs as $index =>  $cv)
                                    <button type="button" class="btn btn-secondary">{{ ++$index }}</button>
                                @endforeach
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
