@component('mail::message')
# Hello {{ $participant->name }}

Hope this email finds you well.
It was a great pleasure to meet with you.
K Vector Foundation regretfully informs you that you did not pass the interview and your application as K’19 participant at <b>{{ App\Models\Workshop::find($participant->first)->name }}</b> workshop has been terminated as you were <b>{{ ($status == 'over') ? "Over Qualified" : "Under Qualified" }}</b>.

Visit us for any feedback
@component('mail::button', ['url' => url('/contact')])
K Vector Foundation Website
@endcomponent
or our page on Facebook
@component('mail::button', ['url' => 'https://facebook.com/kvectorfoundation/'])
K Vector Foundation Facebook
@endcomponent

Please accept our apology and we wish you best of luck in future opportunities.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
