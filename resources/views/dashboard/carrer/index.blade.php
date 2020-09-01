@extends('layouts.dashboard')

@section('content')
    <div class="col-md-12">
        <div class="tablemontag">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> عرض المهن</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>الرقم </th>
                            <th>الدولة  عربي </th>
                            <th>الدولة  انجليزي </th>
                            <th>اسم المهنه عربي </th>
                            <th>اسم المهنه انجليزي</th>
                            <th>التاريخ </th>
                            <th>خيارات </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($jobs as $job)
                        <tr>
                            <td>{{ $job->id }}</td>
                            <td>{{ $job->country["country_ar"] }}</td>
                            <td>{{ $job->country["country_en"] }}</td>
                            <td>{{ $job->carrer_name }}</td>
                            <td>{{ $job->carrer_name_en }}</td>
                            <td>{{ $job->created_at }}</td>
                            <td><a href="{{ route('carrer.edit', $job->id) }}" style="padding:5%;margin:2%;border-radius:8px" class=" edit-item" id="8"><i style="color: #17bd10" class="fas fa-edit"></i></a><a href="{{ route('carrer.edit', $job->id) }}" style="padding:5%;margin:2%;border-radius:8px" data-toggle="modal" data-target="#exampleModalCenter" class="view-item" id="8"><i style="color: #6082d4" class="fas fa-eye"></i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
@stop
