@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('cv.update', $cv->id) }}" method="post">
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
                            <input name="file_number" value="{{ $cv->file_number }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">   المهنة عربي  </label>
                            <input name="job_ar" value="{{ $cv->job_ar }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">    المهنة انجليزي </label>
                            <input name="job_en" value="{{ $cv->job_en }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">   الجنسية عربي  </label>
                            <input name="nationality_ar" value="{{ $cv->nationality_ar }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">   الجنسية انجليزي  </label>
                            <input name="nationality_en" value="{{ $cv->nationality_en }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">   الديانة عربي  </label>
                            <input name="religion_ar" value="{{ $cv->religion_ar }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">    الديانة انجليزي </label>
                            <input name="religion_en" value="{{ $cv->religion_en }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for=""> العمر </label>
                            <input name="age" value="{{ $cv->age }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">  الخبرات السابقة   </label>
                            <input name="expertise" value="{{ $cv->expertise }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">     الحالة الاجتماعية عربي</label>
                            <input name="social_status_ar" value="{{ $cv->social_status_ar }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label style="float: right" for="">    الحالة الاجتماعية انجليزي </label>
                            <input name="social_status_en" value="{{ $cv->social_status_en }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">     الاهتمام بالاطفال </label>
                            <input name="children" value="{{ $cv->children }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">     الاعمال المنزلية</label>
                            <input name="home_business" value="{{ $cv->home_business }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">  خبرة بالطبخ    </label>
                            <input name="cooking" value="{{ $cv->cooking }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">    رعاية المسنين  </label>
                            <input name="elderly" value="{{ $cv->elderly }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">    الاعتناء بالحدائق</label>
                            <input name="gardens" value="{{ $cv->gardens }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">  التعليم </label>
                            <input name="education" value="{{ $cv->education }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for="">    الجامعة </label>
                            <input name="university" value="{{ $cv->university }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for=""> المظهر الشخصي</label>
                            <input name="appearance" value="{{ $cv->appearance }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for=""> تعابير الوجه</label>
                            <input name="face" value="{{ $cv->face }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="float: right" for=""> اللغة الانكليزية</label>
                            <input name="english" value="english" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
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
