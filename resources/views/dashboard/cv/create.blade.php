@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('cv.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="callout callout-warning">
                        <h5>ملاحظة</h5>
                        <p>
                            لاضافة <i class="fa fa-star"></i>
                            <br>
                            ادخال   < i class="fa fa-star"></i>

                            <i class="fa fa-close"></i>
                        </p>

                    </div>

                </div>

                <div class="col-md-6">
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">  رقم الملف    </label>
                        <input name="file_number" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                <div class="form-group">
                    <label style="float: right" for="">   المهنة  </label>
                    <select class="form-control" id="sel1" name="job_ar">
                        @foreach($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->carrer_name }}</option>
                        @endforeach
                    </select>
                </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">   المهنة  </label>
                        <select class="form-control" id="sel1" name="job_en">
                            @foreach($jobs as $job)
                                <option value="{{ $job->id }}">{{ $job->carrer_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">   الجنسية عربي  </label>
                        <select class="form-control" id="sel1" name="nationality_ar">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->country_ar }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">   الجنسية انجليزي  </label>
                        <select class="form-control" id="sel1" name="nationality_en">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->country_en }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">   الديانة عربي  </label>
                        <input name="religion_ar" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">    الديانة انجليزي </label>
                        <input name="religion_en" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for=""> العمر </label>
                        <input name="age" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">  الخبرات السابقة   </label>
                        <input name="expertise" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">     الحالة الاجتماعية عربي</label>
                        <input name="social_status_ar" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label style="float: right" for="">    الحالة الاجتماعية انجليزي </label>
                        <input name="social_status_en" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">     الاهتمام بالاطفال </label>
                        <input name="children" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">     الاعمال المنزلية</label>
                        <input name="home_business" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">  خبرة بالطبخ    </label>
                        <input name="cooking" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">    رعاية المسنين  </label>
                        <input name="elderly" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">    الاعتناء بالحدائق</label>
                        <input name="gardens" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">  التعليم </label>
                        <input name="education" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for="">    الجامعة </label>
                        <input name="university" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for=""> المظهر الشخصي</label>
                        <input name="appearance" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for=""> تعابير الوجه</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا " name="face">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label style="float: right" for=""> اللغة الانكليزية</label>
                        <input name="english" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                    </div>
                </div>

                <div class="col-md-12 row mr">
                    <div class="aa">


                        <div class="col-md-12 row">

                        </div>
                        <button type="submit" class="btn btn-block btn-outline-success btn-lg">

                            حفظ</button>
                    </div>


                    <div class="col-md-1 bord3er">
                    </div>

                </div>

            </div>
            </form>

        </div>
        <!-- /.row -->
    </div>
@stop
