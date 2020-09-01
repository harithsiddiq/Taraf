@extends('layouts.dashboard')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('news.update', $news->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label style="float: right" for="">       عنوان الخبر  عربي   </label>
                        <input name="title_ar" value="{{ $news->title_ar }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا مصر">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label style="float: right" for="">    عنوان الخبر  انجليزي </label>
                        <input name="title_en" value="{{ $news->title_en }}" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا مصر">
                    </div>   </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label style="float: right" for="">الصورة </label>
                        <input  type="file" class="form-control" id="exampleInputEmail1" placeholder="مثلا مصر">
                    </div> </div>

                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                محتوي الخبر عربي
                            </h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                            <div class="mb-3">
                <textarea name="body_ar"  class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {{ $news->body_ar }}
                </textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                محتوي الخبر انجليزي
                            </h3>
                            <!-- tools box -->

                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                            <div class="mb-3">
                <textarea name="body_en"  class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {{ $news->body_en }}
                </textarea>
                            </div>

                        </div>
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
    </div>
@stop
