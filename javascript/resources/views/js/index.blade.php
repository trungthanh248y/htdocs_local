<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
{{--    <script type="text/javascript" src="javascrip/postJS.js"></script>--}}
{{--    <script type="text/javascript" src="{{public_path().'/js/postJS'}}"></script>--}}
    <title>Js</title>
</head>
<body>
    <div class="hienthi">Ready...</div>
    <p class="btn btn-info" id="sub">Gui</p>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sub').click(function () {
                alert('a');
            });
        });
    </script>
</body>
</html>