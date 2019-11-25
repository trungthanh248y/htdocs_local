@component('mail::message')
# Welcome to Home

Thank for signing up. **We really appreciate**._OK_

@component('mail::button', ['url' => 'http://127.0.0.1:8000/home'])<!--Nút button sau khi click sẽ dẫn đến url dc chỉ định, (**)In đậm (_)In nghiêng-->
View My Home
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
