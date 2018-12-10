@component('mail::message')
<img src="{{ asset('/user_style/images/openingmail/cover V2.png') }}">
# Welcome {{ $user->name }} to the game

Hope this mail finds you well. <br />
It is a great pleasure to invite you to our <b>8<sup>th</sup> Opening Ceremony</b>. <br>
Opening is a ceremony that we celebrate with the start of the academic year. <br>
Opening has mant talks for powerfull speakers in many fields like shcolarship, fintech, career shifting ...etc. <br>
<br>
<b>Event Details:</b><br>
@component('mail::table')
|        		|          		|
| ------------- |:-------------:|
| <img src="{{ asset('/user_style/images/openingmail/clock.png') }}" style="width: 20px" alt="" /> Tue, 04/12/2018, 3:30 PM.     | <img src="{{ asset('/user_style/images/openingmail/map-marker-icon.png') }}" style="width: 20px" alt="" /> <a href="https://goo.gl/maps/tdVwYvwywkP2">Alhosabir Theater</a>.      |
| <img src="{{ asset('/user_style/images/openingmail/form.png') }}" style="width: 25px; padding-right: 5px" alt="" /> <a href="{{ route('events.opening19') }}">Apply now</a>      | <img src="{{ asset('/user_style/images/openingmail/facebook.png') }}" style="width: 20px" alt="" /> <a href="https://www.facebook.com/events/459632241227747/">Event on Facebook</a> |
@endcomponent

@component('mail::button', ['url' => route('events.opening19'), 'color' => 'green'])
Apply for free Now
@endcomponent

Visit our event on Facebook
@component('mail::button', ['url' => 'https://www.facebook.com/events/459632241227747/', 'color' => 'red'])
K'19 Opening Facebook Event
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
