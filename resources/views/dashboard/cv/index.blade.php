@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
        <div class="col-12">

            <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>الرقم </th>
                            <th>رقم الملف عربي </th>
                            <th> المهنة عربي </th>
                            <th> المهنة انجليزي </th>
                            <th> الجنسية عربي</th>
                            <th> الجنسية انجليزي</th>
                            <th> الديانة عربي </th>
                            <th> الديانة انجليزي </th>
                            <th> العمر  </th>
                            <th> الخبرات السابقة  </th>
                            <th> الحالة الاجتماعية عربي </th>
                            <th> الحالة الاجتماعية انجليزي </th>
                            <th> الاهتمام بالاطفال </th>
                            <th> الاعمال المنزلية  </th>
                            <th> خبرة بالطبخ  </th>
                            <th> رعاية المسنين  </th>
                            <th> الاعتناء بالحدائق </th>
                            <th> التعليم </th>
                            <th> الجامعة </th>
                            <th> المظهر الشخصي </th>
                            <th> تعابير الوجه </th>
                            <th> اللغة الانكليزية  </th>
                            <th>تاريخ الاضافة</th>
                            <th>اسم المستخدم</th>
                            <th>خيارات </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cvs as $cv)
                        <tr>
                            <td>{{ $cv->id }}</td>
                            <td>{{ $cv->file_number }}</td>
                            <td>{{ $cv->job_ar }}</td>
                            <td>{{ $cv->job_en }}</td>
                            <td>{{ $cv->nationality_ar }}</td>
                            <td>{{ $cv->nationality_en }}</td>
                            <td>{{ $cv->religion_ar }}</td>
                            <td>{{ $cv->religion_en }}</td>
                            <td>{!! $cv->age !!}</td>
                            <td>{!! $cv->expertise !!}</td>
                            <td>{{ $cv->social_status_ar }}</td>
                            <td>{{ $cv->social_status_en }}</td>

                            <td>{!! $cv->children !!}</td>

                            <td>{!! $cv->home_business !!}</td>

                            <td>{!! $cv->cooking !!}</td>

                            <td>{!! $cv->elderly  !!}</td>


                            <td>{!! $cv->gardens !!}</td>
                            <td>{!! $cv->education !!}</td>
                            <td>{!! $cv->university !!}</td>
                            <td>{!! $cv->appearance !!}</td>
                            <td>{!! $cv->face !!}</td>
                            <td>{!! $cv->english !!}</td>

                            <td><span class="tag tag-danger">{{ $cv->created_at }}</span></td>
                            <td>
                                <span class="badge bg-success">المعز محمد ابراهيم</span>
                            </td>
                            <td><a href="{{ route('cv.edit', $cv->id) }}" style="padding:5%;margin:2%;border-radius:8px" class=" edit-item" id="8"><i style="color: #17bd10" class="fas fa-edit"></i></a><b href="#eye" style="padding:5%;margin:2%;border-radius:8px" data-toggle="modal" data-target="#exampleModalCenter" class="view-item" id="8"><i style="color: #6082d4" class="fas fa-eye"></i></b></td>
                        </tr>
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
@stop
