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
    @include('site.includes.ar.css')
</head>
<body class="wow bounce5InRight">
{{--<div class="slidertop">--}}
{{--    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">--}}

{{--        <!-- Indicators -->--}}
{{--        <ol class="carousel-indicators">--}}
{{--            @foreach($slider as $index => $slide)--}}
{{--                <li data-target="#carousel-example-generic" data-slide-to="{{ $index }}" class="@if($index == 0) active @endif"></li>--}}
{{--            @endforeach--}}
{{--        </ol>--}}

{{--        <!-- Wrapper for slides -->--}}
{{--        <div class="carousel-inner">--}}
{{--            @foreach($slider as $index => $slide)--}}
{{--                <div class="item  @if($index == 0) active @endif">--}}
{{--                    <img class="img-responsive" src="{{ asset("assets/{$slide->photo}") }}" alt="...">--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}

{{--        <!-- Controls -->--}}
{{--        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">--}}
{{--            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </a>--}}
{{--        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">--}}
{{--            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </a>--}}

{{--    </div>--}}

{{--</div>--}}

@include('site.includes.ar.header')

@yield('content')

@include('site.includes.ar.footer')
<div id="scroll-top">
    <i class="fa fa-chevron-up fa-3x"></i>
</div>

@include('site.includes.script')


</body>

</html>
