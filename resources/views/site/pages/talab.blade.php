@extends('layouts.homepage-ar')

@section('content')

    <section class="abtive">
        <div class="container">
            <div class="row">
                <!--prtx-->
                <div class="prtx">
                    <!--cvmg-->

                    <!--tit-->
                    <div class="col-lg-12 col-md-12 ">
                        <div class="tit">
                            <h1>طلب استقدام </h1>
                            <hr/>
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
                    <!--                   <div class="col-md-6">
                                   <div class="callout callout-warning">
                             <h5>تنبيه</h5>

                             <p>
           لضمان جودة الخدمة فان رقم الآيبي الخاص بكم هو : 199.188.238.43                            </p>
                           </div>

                                   </div>

                       -->



                    <!--pr-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <form action="{{ route('order.store') }}" method="post">
                            @csrf
                            <section class=" talbastgdam">
                            <div class="container text-center" style="
    margin-bottom: 11px;
    margin-top: 23px;
">

                                <div class="col-md-2">
                                    <label style="float: right" for="">اختر الوظيفة     </label>

                                    <select name="job_id">
                                        @foreach($jobs as $job)
                                            <option value="{{$job->id}}">{{ $job->carrer_name }}</option>
                                        @endforeach
                                    </select>



                                </div>
                                <div class="col-md-2">
                                    <label style="float: right" for="">رقم الهوية الوطنية
                                        <span  style="color:red; font-size: 10px;"><i class="fa fa-star" aria-hidden="true"></i>
                                 </span>     </label>

                                    <input type="text" name="identity_number">



                                </div>
                                <div class="col-md-2">
                                    <label style="float: right" for="">رقم التاشيرة   </label>

                                    <input type="text" name="pass_number">



                                </div>
                                <div class="col-md-3">
                                    <label style="float: right" for="">
                                        الاسم كاملاً
                                        <span  style="color:red; font-size: 10px;"><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </label>

                                    <input type="text" name="full_name">



                                </div>

                                <div class="col-md-3">
                                    <label style="float: right" for="">البريد الالكتروني </label>

                                    <input type="text" name="email">



                                </div>
                                <div class="col-md-3">
                                    <label style="float: right" for="">رقم الجوال
                                        <span  style="color:red; font-size: 10px;"><i class="fa fa-star" aria-hidden="true"></i></span>
                                    </label>

                                    <input type="text" name="phone_number">



                                </div>
                                <div class="col-md-4">
                                    <label style="float: right" for="">العنوان </label>

                                    <input type="text" name="address">



                                </div>
                                <div class="col-md-5">
                                    <label style="float: right" for=""> متطلبات الوظيفة </label>

                                    <input type="text" name="job_requirement">



                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-3">

                                        <label style="float: right" for="">   </label>
                                        <button type="submit" class="btn btn-primary " style="
    background: #98de87;
    color: #FFF;
"> ارسال</button>

                                    </div>
                                </div>
                            </div>
                        </section>
                        </form>
                    </div>
                    <!--bvide-->

                </div>
            </div>
        </div>
    </section>

@stop
