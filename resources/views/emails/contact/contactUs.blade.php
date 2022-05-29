@component('mail::message')
# You have received a new message;

* Name : {{ $user->name }}
* Email : {{ $user->email }}
* Location : {{ $user->location }}

@component('mail::panel')
{{$user->message}}
@endcomponent


Thanks,<br>
{{ $user->name }}
@endcomponent
