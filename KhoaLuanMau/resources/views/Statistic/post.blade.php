<header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</header>
<body>
    <div class="container">
        <h1 class="text-center">Statistic</h1>

        <hr class="mb-4">

        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-sm-8 col-md-7 py-4">
                            <p class="text-muted">Title: {{$post->title}}</p>
                            <p class="text-muted">Address: {{$post->address}}</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <p class="text-white">Time: {{$post->created_at}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="javascript:;" class="navbar-brand d-flex align-items-center">
                <span class="row">
                <h1 class="col-md">Posts year: {{ count($postYear)}}</h1>
                <h1 class="col-md">Posts month: {{count($postMonth)}}</h1>
                <h1 class="col-md">Posts date: {{count($postDate)}}</h1>
                </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <h1>Lish</h1>
                </button>
            </div>
        </div>

        <hr class="mb-4">

        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    @foreach($orders as $order)
                        <div class="col-sm-8 col-md-7 py-4">
                            <p class="text-muted">Name: {{$order->name}}</p>
                            <p class="text-muted">Phone: {{$order->phone}}</p>
                            <p class="text-muted">Price: {{$order->describe}} VND</p>
                        </div>
                        <div>
                            <p class="text-muted">price date: {{$priceDate}} vnd</p>
                            <p class="text-muted">price month: {{$priceMonth}} vnd</p>
                            <p class="text-muted">price year: {{$priceYear}} vnd</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <p class="text-white">Time: {{$order->created_at}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="javascript:;" class="navbar-brand d-flex align-items-center">
                <span class="row">
                <h1 class="col-md">Order year: {{ count($orderYear)}}</h1>
                <h1 class="col-md">Order month: {{count($orderMonth)}}</h1>
                <h1 class="col-md">Order date: {{count($orderDate)}}</h1>
                </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <h1>Lish</h1>
                </button>
            </div>
        </div>
    </div>
</body>


