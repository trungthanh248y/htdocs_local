{{--@extends('layouts.app');--}}
{{--@section('content')--}}


{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <title>Chart with VueJS</title>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="app">--}}
{{--    {!! $chart->container() !!}--}}
{{--</div>--}}
{{--<script src="https://unpkg.com/vue"></script>--}}
{{--<script>--}}
{{--    var app = new Vue({--}}
{{--        el: '#app',--}}
{{--    });--}}
{{--</script>--}}
{{--<script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>--}}
{{--{!! $chart->script() !!}--}}
{{--</body>--}}

{{--@endsection--}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chart with VueJS</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/fusioncharts@3.12.2/fusioncharts.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/frappe-charts@1.1.0/dist/frappe-charts.min.iife.js"></script>
</head>
<body>
<div id="app">
    {!! $chart->container() !!}
</div>
<div id="appC">
    {!! $column->container() !!}
</div>
<div id="appD">
    {!! $test->container() !!}
</div>
<script src="https://unpkg.com/vue"></script>
<script>
    var app = new Vue({
        el: '#app',
    });
    var appC=new Vue({
        el: '#appC',
    });
    var appD=new Vue({
        el: '#appD',
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/frappe-charts@1.1.0/dist/frappe-charts.min.iife.js"></script>
{!! $chart->script() !!}
{!! $column->script() !!}
{!! $test->script() !!}
</body>
</html>