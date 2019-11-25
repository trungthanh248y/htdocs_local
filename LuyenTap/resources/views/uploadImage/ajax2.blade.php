{{--<p>Hello</p>--}}
{{--<p>Hello</p>--}}
{{--<p>Hello</p>--}}
{{--<p>{{$i}}</p>--}}
{{--<p>{{$t}}</p>--}}
{{--<title>Xin chao</title>--}}
{{--<title>Hello</title>--}}

<?php
    $info=array();
    $info['name']="ThanhPro";
    $info['sdt']="0961186043";
    $info['Game']="CoC";
    $info['email']="ThanhPro@gmail.com";

    $jsonString=json_encode($info);//Chuyển mảng thành kiểu json
    echo $jsonString;
?>
