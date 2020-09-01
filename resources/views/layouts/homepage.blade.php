<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <title>مكتب الترف للاستقدام</title>
    <meta name="description" content="">
    <meta name="keywords" content="prevrat, entiri, entiri s.r.o.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    @include('site.includes.en.css')
</head>
<body class="wow bounce5InRight">
<div class="heederall">

    <!-- start logine -->
    <div class="container loogin">
        <div class="modal n fade" id="modal-xl">
            <div class="modal-dialog modal-xl">
                <!-- /.modal-content -->
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h6 class="modal-title"> sign in </h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  text-center">
                        <div class="col-md-12">
                            <form class="formdes formaaaas" action="action_page.php">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <label style="float: left" for="">E-mail </label>
                                    <input type="text" placeholder="ا" name="search" accept="application/msexcel">
                                </div>
                                <div class="col-md-2"></div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form class="formdes formaaaas" action="action_page.php">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <label style="float: left" for=""> password </label>
                                    <input type="password" placeholder="ا" name="search" accept="application/msexcel">
                                </div>
                                <div class="col-md-2"></div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button style="border-radius:  100px;" type="button" class=" color-red " data-dismiss="modal"> Close</button>
                        <button style="border-radius: 100px;" type="button " class="save  buttom btn  btn-default  "> save</button>
                    </div>
                </div>
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


    </div>
    <!-- end login -->
    <!-- start service talbat Home  -->
    <div class="container   talabat">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <form action="{{ route('order.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                        <div class="col-lg-12 col-md-12 ">
                            <div class="tit">
                                <h3> Recruitment request </h3>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="callout callout-warning">
                                <h5> Warning</h5>
                                <p>
                                    To submit an application for recruitment, please fill out all the information correctly

                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label style="float: right" for=""> Choose a job</label>
                            <select name="job_id">
                                @foreach($jobs as $job)
                                    <option value="{{$job->id}}">{{ $job->carrer_name_en }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6"><label style="float: right" for="">

                                National Identification Number                                <span style="color:red; font-size: 10px;"><i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </label>
                            <input type="text" name="identity_number">
                        </div>
                        <div class="col-md-6">
                            <label style="float: right" for="">
                                visa number
                            </label><input type="text" name="pass_number"></div>
                        <div class="col-md-6"><label style="float: right" for="">
                                full name
                                <span style="color:red; font-size: 10px;"><i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </label><input type="text" name="full_name"></div>

                        <div class="col-md-6">
                            <label style="float: right" for="">E-mail </label><input type="text" name="email">
                        </div>
                        <div class="col-md-6"><label style="float: right" for="">
                                Mobile number
                                <span style="color:red; font-size: 10px;"><i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </label><input type="text" name="phone_number">
                        </div>
                        <div class="col-md-6"><label style="float: right" for="">العنوان </label> <input type="text" name="address">
                        </div>
                        <div class="col-md-12">
                            <label style="float: right" for=""> Job requirements
                                requirements
                            </label><input type="text" name="job_requirement">
                        </div>
                    </div>
                        <div class="modal-footer"></div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class=" talabalan btn btn-default" data-dismiss="" style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;">Send </button>
                        </div>
                    </form>

                </div>
                </div>
            </div>
        </div>
    </div>


    <!-- start search job country  -->
    <div class="container  serachjob">
        <!-- Modal -->
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-lg-12 col-md-12 ">
                            <div class="tit text-center">
                                <h4>
                                    البحث
                                </h4>
                                <hr>
                            </div>


                        </div>
                        <div class="detlals">
                            <div class="col-md-6 detalcol ">


                                <span>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <strong> الدولة : </strong> الهند
                                </span>
                            </div>
                            <div class="col-md-6 detalcol">


                                <span>
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>

                                    <strong> المهنه : </strong> عاملة منزلية
                                </span>
                            </div>


                        </div>


                        <div class="col-md-12">


                            <table>
                                <tr>

                                    <th>المده التقريبية</th>
                                    <th>الراتب الشهري</th>
                                    <th>تكلفة الاستقدام</th>
                                    <th>خيارات</th>


                                </tr>
                                <tr>

                                    <td>70 يوم</td>
                                    <td>3000 ريال سعودي</td>
                                    <td>تحدد بالاتقاف</td>

                                    <td>
                                        <button type="button" class=" talabalan btn btn-primary" data-dismiss=""
                                                style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                            اطلب الان
                                        </button>
                                    </td>


                                </tr>
                                <tr>

                                    <td>10 يوم</td>
                                    <td>1500 ريال سعودي</td>
                                    <td>4000 ريال</td>

                                    <td>
                                        <button type="button" class=" talabalan btn btn-primary" data-dismiss=""
                                                style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                            اطلب الان
                                        </button>
                                    </td>


                                </tr>
                                <tr>

                                    <td>90 يوم</td>
                                    <td>4000 ريال سعودي</td>
                                    <td>تحدد بالاتقاف</td>

                                    <td>
                                        <button type="button" class=" talabalan btn btn-primary" data-dismiss=""
                                                style="visibility: visible; animation-duration: 1500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                            اطلب الان
                                        </button>
                                    </td>


                                </tr>

                            </table>
                        </div>

                    </div>


                    <div class="modal-footer">
                        <div class="col-md-12 text-center booton">

                            <button type="button" class="btn btn-danger" data-dismiss="modal"> اغلاق</button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search job country  -->
    @include('site.includes.en.header')


    @yield('content')


    @include('site.includes.en.footer')


    <div id="scroll-top">
        <i class="fa fa-chevron-up fa-3x"></i>
    </div>

@include('site.includes.script')

</body>

</html>
