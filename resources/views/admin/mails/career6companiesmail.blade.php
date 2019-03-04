@component('mail::message')
<img src="{{ asset('/user_style/images/career6/cover V2.png') }}">
{!! $message !!}
<br>
<b>Event Schedule:</b><br>
@component('mail::table')
|        		|          		|
| ------------- |:-------------:|
| Mon 4/2     | 10 AM -> 3 PM Session, 12 PM -> 1 PM Break     |
| Tue 5/2     | 10 AM -> 1 PM Session, 1 PM -> 3 PM Fair     |
| Wed 6/2     | 10 AM -> 1 PM Session, 1 PM -> 3 PM Fair     |
| Thu 7/2     | 10 AM -> 3 PM Session, 12 PM -> 1 PM Break     |
@endcomponent
<br>
<b>Event Details:</b><br>
@component('mail::table')
|        		|          		|
| ------------- |:-------------:|
| <img src="{{ asset('/user_style/images/openingmail/clock.png') }}" style="width: 20px" alt="" /> From 4<sup>th</sup> of Feb 2019 to 7<sup>th</sup> of Feb 2019.     | <img src="{{ asset('/user_style/images/openingmail/map-marker-icon.png') }}" style="width: 20px" alt="" /> <a href="https://goo.gl/maps/BTAEA88qH6v">CIC Zayed branch</a>.      |
@endcomponent

Visit our event on Facebook
@component('mail::button', ['url' => 'https://www.facebook.com/events/1243280675797115/', 'color' => 'red'])
Career Launcher 6th Facebook Event
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
