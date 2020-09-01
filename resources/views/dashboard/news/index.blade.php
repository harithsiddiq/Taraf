@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="col-12">

            <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>الرقم </th>

                            <td> عنوان الخبر عربي </td>
                            <td> عنوان الخبر انجليزي </td>
                            <td>عربي نص الخبر   </td>
                            <td> نص الخبر انجليزي  </td>
                            <td>  الصورة </td>
                            <th>تاريخ الاضافة</th>
                            <th>اسم المستخدم</th>
                            <th>خيارات </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($news as $new)
                        <tr>
                            <td>{{ $new->id }}</td>
                            <td>{{ $new->title_ar }}</td>
                            <td>{{ $new->title_en }}</td>
                            <td>{{ $new->body_ar }}</td>
                            <td>{{ $new->body_en }}</td>

                            <td>  <img src="{{ asset("assets/{$new->image}") }}" width="70" height="70">  </td>

                            <td><span class="tag tag-danger">{{ $new->created_at->diffForHumans() }}</span></td>
                            <td>
                                <span class="badge bg-success">المعز محمد ابراهيم</span>

                            </td>
                            <td><a href="{{ route('news.edit', $new->id) }}" style="padding:5%;margin:2%;border-radius:8px" class=" edit-item" id="8"><i style="color: #17bd10" class="fas fa-edit"></i></a><b href="#eye" style="padding:5%;margin:2%;border-radius:8px" data-toggle="modal" data-target="#exampleModalCenter" class="view-item" id="8"><i style="color: #6082d4" class="fas fa-eye"></i></b></td>
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
