@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <h5> البحث المتقدم</h5>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>الوظائف</label>
                        <select class="form-control">
                            <option>جميع الوظائف </option>
                            @foreach($jobs as $job)
                                <option value="{{ $job->carrer_name }}">{{ $job->carrer_name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>الصفحات</label>
                        <select class="form-control">
                            <option>جميع الصفحات </option>
                            <option>AR   </option>
                            <option> EN </option>
                        </select>
                    </div>

                </div>


                <div class="col-md-3">

                    <label><br></label>

                    <button type="button" class="btn btn-block btn-outline-success btn-lg">

                        بحث</button></div>



                <div class="col-12">

                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>الرقم </th>
                                    <th> الوظيفة  </th>
                                    <th> رقم الهوية </th>
                                    <th> رقم التاشيرة </th>
                                    <th> الاسم كاملا </th>
                                    <th> البريد الالكتروني </th>
                                    <th> رقم الجوال </th>
                                    <th> العنوان </th>
                                    <th> متطلبات الوظفيفه </th>
                                    <th> الصفحه </th>
                                    <th>خيارات </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($jobOrder as $job)
                                @if(!$job->job == null)
                                <tr>
                                    <td>{{ $job->id }}</td>
                                    <td>{{ $job->job->carrer_name }}</td>
                                    <th> {{ $job->identity_number }} </th>
                                    <th> {{ $job->pass_number }} </th>
                                    <td>
                                        <span class="badge bg-success">{{ $job->full_name }}</span></td>
                                    <td>{{ $job->email }}</td>
                                    <td>{{ $job->phone_number }}</td>
                                    <td>{{ $job->address }}</td>
                                    <td>{{ $job->job_requirement }}</td>
                                    <td>{{ app()->getLocale() }}</td>
                                    <td><b href="#details" style="padding:5%;margin:2%;border-radius:8px" class=" edit-item" id="8"><i style="color: #17bd10" class="fas fa-edit"></i></b><b href="#eye" style="padding:5%;margin:2%;border-radius:8px" data-toggle="modal" data-target="#exampleModalCenter" class="view-item" id="8"><i style="color: #6082d4" class="fas fa-eye"></i></b></td>
                                </tr>
                                @endif
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->


            </div>

        </div>



        <!-- /.row -->
    </div>
@stop
