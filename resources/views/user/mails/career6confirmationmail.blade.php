@component('mail::message')
<img src="{{ asset('/user_style/images/career6/cover V2.jpg') }}">
# Welcome {{ $name }} to Career Launcher 6<sup>th</sup> Edition

Hope this mail finds you well. <br />
This mail is a confirmation mail for your registration in <b>{{ App\Models\CWorkshop::find($session)->name }}</b>, We would like to invite you to attend the 6th Annual mega event ‘<b>career launcher</b>’ organised by K Vector Foundation, where several workshops in all department of engineering and non-engineering are held in cooperation with professional companies to help students and fresh-graduates to be more qualified to job market.
<br>
<b>Event Details:</b><br>
@component('mail::table')
|        		|          		|
| ------------- |:-------------:|
| <img src="{{ asset('/user_style/images/openingmail/clock.png') }}" style="width: 20px" alt="" /> From 4<sup>th</sup> of Feb 2019 to 7<sup>th</sup> of Feb 2019.     | <img src="{{ asset('/user_style/images/openingmail/map-marker-icon.png') }}" style="width: 20px" alt="" /> <a href="https://goo.gl/maps/BTAEA88qH6v">CIC Zayed barnch</a>.      |
@endcomponent

Visit our event on Facebook
@component('mail::button', ['url' => 'https://www.facebook.com/events/459632241227747/', 'color' => 'red'])
Career Launcher 6th Facebook Event
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
