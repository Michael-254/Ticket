@component('mail::message')
# Dear {{$ticket->owner->name}}

{{$sender->name}} has reponded to your Ticket Ref No: {{$ticket->id}}

Response Given: {{$comment}}

@component('mail::button', ['url' => route('home')])
 View Ticket
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
