@extends('layouts.dashboard')


@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                        <form action="{{ route('carrer.update', $job->id) }}" method="post">
                            @csrf
                            <div class="col-md-12 row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>اختر الدولة انجليزي  </label>
                                        <select class="form-control" name="country_id">
                                            @foreach($countries as $country)
                                                <option @if($country->id == $job->country["id"]) selected @endif value="{{ $country->id }}">{{ $country->country_ar }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>اختر الدولة انجليزي  </label>
                                        <select class="form-control" name="country_id">
                                            @foreach($countries as $country)
                                                <option @if($country->id == $job->country["id"]) selected @endif value="{{ $country->id }}">{{ $country->country_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="float: right" for="">  اضف المهنة عربي   </label>
                                        <input value="{{ $job->carrer_name }}" name="carrer_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="مثلا ">
                                    </div> </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="float: right" for="">  اضف المهنة انجليزي   </label>
                                        <input value="{{ $job->carrer_name_en }}" name="carrer_name_en" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div> </div>


                                <button type="submit" class="btn btn-block btn-outline-success btn-lg">

                                    حفظ</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@stop


