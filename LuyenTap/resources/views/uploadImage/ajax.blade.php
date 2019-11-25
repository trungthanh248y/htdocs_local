<html>
    <head>
        <title>Luyen tap Ajax</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        {{-- <div class="container">
            <div class="ht_add" id="edit">
                <div class="form-group">
                    <label for="text">User Name</label>
                    <input name="username" class="form-control" type="text">
                    <input name="edit" id="btn_edit" class="btn btn-primary" type="submit" value="EDIT">
                </div>
            </div>
            <div class="hide" id="add">
                <div class="form-group">
                    <label for="text">User Name</label>
                    <input name="username" class="form-control" type="text">
                    <input name="add" id="btn_add" class="btn btn-success" type="submit" value="ADD">
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#btn_edit").click(function(){
                    var id=$(this).attr('#add');
                    alert(id);
                });
            });
        </script> --}}

        {{-- <div class="form-group hide" id="5s" thanhpro="{{ $image->id }}">
            <p>{{ $image->filename }}</p>
        </div> --}}

        <div class="form-group hide" id="5s">
            <form action="{{ Route('index') }}">
                <label for="text">Username</label>
                <input type="text" name="username">
            </form>
        </div>

        <p class="hide s4">Chao</p>
        <p href="javascript:;" class="cl">add</p>
        <p class="ketqua"></p>

        <script>
            $(document).ready(function () {
                $(".cl").click(function () {
                    $.ajax({
                        type: 'GET',
                        url:"/ajax2?t="+Math.random(),
                        data:{i:i=10,t:t=20},
                        dataType: 'html',
                        // success:function (data,status,jqXHR) {
                        //     console.log($.type(data));
                        //     console.log(status);
                        //     console.log(jqXHR);
                        //     $('.ketqua').html(data);
                        // }
                        // // Hàm tìm kiến find và vòng lặp each với kiểu dữ liệu là xml
                        // success:function (data) {
                        //     //console.log($(data).find('title'));
                        //     var txt="";
                        //     $(data).find('title').each(function (i,val) {
                        //         // console.log("val");
                        //         txt+=$(this).text(data)+"<br>";
                        //     });
                        //     $('.ketqua').html(txt);
                        // }
                        //Json
                        success:function (data) {
                            console.log(data);
                            console.log($.parseJSON(data));//Chuyển kiểu json này thành một đối tượng
                            var txt="";
                            $.each($.parseJSON(data),function (index,value) {
                                txt+=index+": "+value+"<br/>";
                            });
                            $('.ketqua').html(txt);
                        }
                        //Script
                        // success:function (data) {
                        //     console.log(data);
                        //     test();
                        // }
                    })
                });
            });
        </script>
    </body>
</html>