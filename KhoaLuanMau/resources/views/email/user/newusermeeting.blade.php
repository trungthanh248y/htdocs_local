{{--@component('mail::message')--}}
<html>

<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">
</head>
<h1> Đặt đơn hẹn thành công </h1>

Cảm ơn bạn <strong>{{$meeting->username}}</strong> đã đặt đơn hẹn tại website của chúng tôi. Nhân viên sẽ liên hệ với bạn qua số <strong>{{$meeting->phone}}</strong> sơm nhất có thể
<h3>Thời gian hẹn của bạn là: {{$meeting->time}} Giời</h3>
<h3>Khu trọ của bạn là: {{$meeting->title}}</h3>
<h3>Giá phòng thuê là: {{$meeting->describe}} vnđ</h3>

Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi<br>
<h2>Website tìm phòng trường Đại học Lâm Nghiệp</h2>

</html>
{{--@endcomponent--}}
