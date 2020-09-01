@extends('layouts.dashboard')

@section('content')

    <div class="content">

        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">

            <div class="row">

                <div class="col-12 col-sm-6">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">اضافة  لصفحه اللغه العربية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">اضافة لصفحه اللغه الانجليزية</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body  " >
                            <div class="tab-content row" id="custom-tabs-three-tabContent">
                                <div class="tab-pane  fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                    <div class="col-md-12 row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="float: right" for="">       اسم الصور عربي   </label>
                                                <input name="name_ar" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا صورة عمالة بنجلاديش">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="float: right" for="">       اسم الصور انجليزي   </label>
                                                <input name="name_en" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا صورة عمالة بنجلاديش">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="float: right" for="">     الصورة انجليزي </label>
                                                <input name="photo" type="file" class="form-control" id="exampleInputEmail1" placeholder="مثلا مصر">
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-block btn-outline-success btn-lg">

                                            حفظ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="box pull-up ">
                        <div class="box-body card-body text-center">

                            <div class="icon text-center ustify-content-between align-items-center">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <p class=" ustify-content-between align-items-center"> عدد الصورة المضافة في العربي  </p>

                            <div class="= justify-content-between align-items-center">


                                <h3 class="font-weight-700 mt-0">{{ $slider }} </h3>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="box pull-up ">
                        <div class="box-body card-body text-center">

                            <div class="icon text-center ustify-content-between align-items-center">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <p class=" ustify-content-between align-items-center"> عدد الصور المضافة في الانجليزي  </p>

                            <div class="= justify-content-between align-items-center">


                                <h3 class="font-weight-700 mt-0">{{ $slider }} </h3>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- /.row -->
    </div>

@stop
