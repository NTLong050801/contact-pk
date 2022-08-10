@component('mail:message')
    #Intro 
    T{{$name}}
    @component('mail::button',["url"=>""])
        Button texxt;
    @endcomponent
    Thanks  <br>

    {{ config('app.name')}}
@endcomponent
