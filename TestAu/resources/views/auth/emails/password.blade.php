Click vao day de reset password: <br>
<a href="{{$link=url('password/reset',$token).'?email='.urlencode($user->getEmailForPasswordReset())}}">{{$link}}</a>
