@extends('layouts.dashboard')

@section('content')

    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title" style="
    color: #FFF;
">  الصفحه العربي</h3>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>اسم الصورة عربي</th>
                        <th>اسم الصورة انحليزي</th>
                        <th>الصورة</th>
                        <th>خيارات</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($slider as $slide)
                        <tr>
                        <td>{{ $slide->id }}</td>
                        <td>{{ $slide->name_ar }}</td>
                        <td>{{ $slide->name_en }}</td>
                        <td><img src="{{ asset("assets/{$slide->photo}") }}" width="70"  height="70"> </td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('slider.edit', $slide->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

@stop
