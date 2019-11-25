<div class="show" id="{{$id}}">
@foreach($posts as $post)
    <div class="col-12">
        <div class="card flex-row mb-2 shadow-sm h-md-150">
            <div class="card-body d-flex flex-column align-items-start">
                {{--                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">--}}
                <div class="row">

                    {{--                    style="clear: both;display: table;"style="display: block"--}}

                    <div class="col-lg-4 col-md-4 col-xs-12" style="float: left">
                        <div class="col-auto d-none d-lg-block">
                            <center>
                                <a href="{{Route('postUser',$post->id)}}"><img
                                            style="height:180px;width:230px"
                                            src="{{asset('images/'.$post->image)}}"
                                            alt="Not Image"></a>
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 col-xs-12">
                        <div class="col p-4 d-flex flex-column position-static">
                            @if($post->sale!=null)
                                <strike class="d-inline-block mb-2 text-muted">Price: {{$post->describe}} VND</strike>

                                <strong class="d-inline-block mb-2 text-info">Sale: {{$post->sale}} VND</strong>
                            @else
                                <strong class="d-inline-block mb-2 text-info">Price: {{$post->describe}} VND</strong>
                            @endif

                            <h3 class="mb-0">{{$post->title}}</h3>
                            <div class="mb-1 text-muted">Nov {{$post->id}}</div>
                            @if (strlen($post->content)>50)
                                <p class="card-text mb-auto">{{ substr($post->content,0,50)."..." }}</p>
                            @else
                                <p class="card-text mb-auto">{{ $post->content }}</p>
                            @endif
                                <a href="{{Route('postUser',$post->id)}}"
                                   class="stretched-link">Thông tin phòng trọ &raquo</a>
                        </div>
                    </div>

                    <div style="clear: both"></div>
                </div>
                {{--                            </div>--}}
            </div>
        </div>
    </div>
 @endforeach
<div class="col-sm-6 col-sm-offset-3">
    {{$posts->links()}}
</div>
</div>
<script>
    $(document).on('click','.pagination a', function(e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        var id=$('.show').attr('id');
        getPosts(page,id);
    });
    function getPosts(page,id)
    {
        $.ajax({
            type: "GET",
            url: '/ajax',
            data:{id:id,page:page},
            dataType: 'html',

            success:function (data) {
                $('.show').html(data);
            }
        })
    }
</script>
