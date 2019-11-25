<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chart Order and Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body class="container">
<a href="{{Route('home')}}" class="btn btn-info">Back Welcom</a>

<hr class="mb-4">

<div id="app">
    <h1>Chart Order</h1>
    {!! $chart->container() !!}
</div>

<hr class="mb-4">

<span class="row">
    <h5 class="col-md text-muted">Order year: {{ count($orderYear)}}</h5>
    <h5 class="col-md text-muted">Order month: {{count($orderMonth)}}</h5>
    <h5 class="col-md text-muted">Order date: {{count($orderDate)}}</h5>
</span>
<span class="row">
    <h5 class="col-md text-muted">price year: {{$priceYear}} vnd</h5>
    <h5 class="col-md text-muted">price month: {{$priceMonth}} vnd</h5>
    <h5 class="col-md text-muted">price date: {{$priceDate}} vnd</h5>
</span>
<span class="row">
    <h5 class="col-md-8 text-muted">Order detail: </h5>
    <a href="{{Route('indexMeeting')}}" class="col-md-4 btn btn-info">Order</a>
</span>

<hr class="mb-4">

<div id="post">
    <h1>Chart Post</h1>
    {!! $posts->container() !!}
</div>

<hr class="mb-4">

<span class="row">
    <h5 class="col-md text-muted">Posts year: {{ count($postYear)}}</h5>
    <h5 class="col-md text-muted">Posts month: {{count($postMonth)}}</h5>
    <h5 class="col-md text-muted">Posts date: {{count($postDate)}}</h5>
</span>
<span class="row">
    <h5 class="col-md-8 text-muted">Posts detail: </h5>
    <a href="{{Route('selectPost')}}" class="col-md-4 btn btn-info">Posts</a>
</span>

<script src="https://unpkg.com/vue"></script>
<script>
    var app = new Vue({
        el: '#app',
    });
    var post = new Vue({
        el: '#post',
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/frappe-charts@1.1.0/dist/frappe-charts.min.iife.js"></script>
{!! $chart->script() !!}
{!! $posts->script() !!}
</body>
</html>
