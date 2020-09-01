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
                                    <form action="{{ route('country.store') }}" method="post">
                                        @csrf
                                        <div class="col-md-12 row">


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>اختر الدولة عربي  </label>
                                                    <select class="form-control" name="country">
                                                        @foreach($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->country_ar }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>اختر المهنة عربي  </label>
                                                    <select class="form-control" name="job">
                                                        @foreach($jobs as $job)
                                                            <option>{{ $job->carrer_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="float: right" for="">     الراتب الشهري عربي  </label>
                                                    <input name="salary" type="text" class="form-control" id="exampleInputEmail1">
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="float: right" for="">    اضف  المده التقريبية عربي   </label>
                                                    <input name="duration" type="text" class="form-control" id="exampleInputEmail1">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="float: right" for="">   تكلفة الاستقدام عربي  </label>
                                                    <input name="cost" type="text" class="form-control" id="exampleInputEmail1">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-block btn-outline-success btn-lg">

                                                حفظ</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">

                                    <div class="col-md-12 row">


                                        <div class="col-md-12 row">


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>اختر الدولة انجليزي  </label>
                                                    <select class="form-control">
                                                        @foreach($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->country_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>اختر المهنة انجليزي  </label>
                                                    <select class="form-control">
                                                        @foreach($jobs as $job)
                                                            <option>{{ $job->carrer_name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="float: right" for="">     الراتب الشهري انجليزي  </label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا مصر">
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="float: right" for="">    اضف  المده التقريبية انجليزي   </label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا مصر">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="float: right" for="">   تكلفة الاستقدام انجليزي  </label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا مصر">
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-block btn-outline-success btn-lg">

                                                حفظ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <div class="col-md-6"></div>


                <div class="col-xl-3 col-md-6 col-12">
                    <div class="box pull-up ">
                        <div class="box-body card-body text-center">

                            <div class="icon text-center ustify-content-between align-items-center">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <p class=" ustify-content-between align-items-center">عدد الدول المضافة </p>

                            <div class="= justify-content-between align-items-center">


                                <h3 class="font-weight-700 mt-0">40 </h3>

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
                            <p class=" ustify-content-between align-items-center"> عدد المهن المضافة </p>

                            <div class="= justify-content-between align-items-center">


                                <h3 class="font-weight-700 mt-0">40 </h3>

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
                            <p class=" ustify-content-between align-items-center">عدد العمالة المضافة عربي </p>

                            <div class="= justify-content-between align-items-center">


                                <h3 class="font-weight-700 mt-0">40 </h3>

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
                            <p class=" ustify-content-between align-items-center">اعدد العمالة المضافة انجليزي</p>

                            <div class="= justify-content-between align-items-center">


                                <h3 class="font-weight-700 mt-0">40 </h3>

                            </div>

                        </div>
                    </div>
                </div>








                <div class="col-md-12">
                    <div class="tablemontag">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"> عرض المهن عربي</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>الرقم </th>
                                        <th> الدولة</th>
                                        <th>المهنة</th>
                                        <th> الراتب الشهري</th>
                                        <th>المدة التقريبية</th>
                                        <th>تكلفة الاستقدام</th>
                                        <th> التاريخ</th>
                                        <th> خيارات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>بنجلديش</td>
                                        <td>عامل</td>
                                        <td>300</td>

                                        <td>شهر</td>
                                        <td>بالاتفاق</td>
                                        <td>10-10-2019</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>



                <div class="col-md-12">
                    <div class="tablemontag">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"> عرض المهن انجليزي</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>الرقم </th>
                                        <th> الدولة</th>
                                        <th>المهنة</th>
                                        <th> الراتب الشهري</th>
                                        <th>المدة التقريبية</th>
                                        <th>تكلفة الاستقدام</th>
                                        <th> التاريخ</th>
                                        <th> خيارات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>بنجلديش</td>
                                        <td>عامل</td>
                                        <td>300</td>

                                        <td>شهر</td>
                                        <td>بالاتفاق</td>
                                        <td>10-10-2019</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

@stop
