@extends('master')

@section('content')

<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Employ</th>
            <th scope="col">Student</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($employ as $v)
          <tr>
            <th scope="row">{{ $v['id'] }}</th>
            <td>
                <div href="javascript:;" class="oneEmployess" thanhpro="{{ $v['id'] }}">
                    {{ $v['name_employess'] }}
                </div>
            </td>
        @endforeach
            <td><div class="ketqua"></div></td>
        </tbody>
      </table>

    {{-- @if(count($ajax)>1)
        @foreach ($ajax as $item)
        <div class="oneStudent hide">
            <div class="email">{{ $item['email'] }}</div>
            <div class="username">{{ $item['username'] }}</div>
        </div>
        @endforeach
    @endif --}}
    
    
    {{-- <script type="text/javascript">
        $(document).ready(function(){
            $(".oneEmployess").click(function(){
                var a=$(this).attr('thanhpro');
                $.post("{{ Route('btAjax') }}",{id:a},function(data){
                alert(data);
                $(".ketqua").html(data);
            });
        }); var a =$(this).attr(thanhpro);
    </script> --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $(".oneEmployess").click(function(){
                var b=$(this).attr('thanhpro');
                $.ajax({
                    type:'GET',
                    url:'/btAjax',
                    data:{id:b},
                    dataType: 'json',
                    success:function(data){
                        console.log(data);
                        alert(data);
                    }
                });
            });
        });
    </script>

@endsection