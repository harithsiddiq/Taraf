@extends('layouts.dashboard')


@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">اضافة  الدولة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">اضافة المهنه</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body  " >
                            <div class="tab-content row" id="custom-tabs-three-tabContent">
                            <div class="tab-pane  fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                <div class="col-md-12 row">
                                    <form action="{{ route('country.update', $country->id) }}" method="post">
                                        @csrf
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="float: right" for="">    اضف اسم الدولة عربي   </label>
                                                <input value="{{ $country->country_ar }}" name="country_ar" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا مصر">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="float: right" for=""> اضف اسم الدولة  انجليزي </label>
                                                <input value="{{ $country->country_en }}" name="country_en" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا مصر">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-outline-success btn-lg">
                                            حفظ</button>
                                    </form>
                                </div>
                            </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@stop


