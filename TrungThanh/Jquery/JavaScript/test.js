// function test() {
//     alert('a');
// }
$(document).ready(function () {
    $('.button').click(function () {
        $.ajax({
            url: 'ajax.php?t='+Math.random(),
            type: 'POST',
            data:{
              "username":$("input:text[name='username']").val(),
              "password":$("input:password[name='password']").val(),
            },
            datatype: 'json',
            success: function (data,status) {
                // $('#info').html(data);
                //console.log($.parseJSON(data));//Đổi kiểu json thường sang object thì mới truy xuất và sử lý được
                var data1=$.parseJSON(data);
                // var t=$("input[name='username']").after('a');
                // console.log(t);
                if(status=='success'){
                    $(".appForm *").remove('.text-danger').removeClass('bg01');//Các phần tử trong remove là file css
                    if(data1.status=="error"){
                        $('#info').addClass("bg01").text('Error');
                        $.each(data1.mess,function (index,value) {
                            var ele="input[name='"+index+"']";
                            //console.log(ele);
                            $(ele).addClass('bg01').after("<span class='text-danger'>"+value+"</span>")
                        });
                    }
                }
            }
        })
    });
});