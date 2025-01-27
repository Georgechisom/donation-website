<x-mail::message>
# From Divineonecommunity Website, <br> i'm a donator, <br> here is my details

{{-- The body of your message. --}}
First Name:: {{ $data['firstname'] }} <br>
Last Name:: {{ $data['lastname'] }} <br>
Email:: {{ $data['email'] }} <br>
Phone:: {{ $data['number'] }} <br>
Address:: {{ $data['address'] }} <br>
Donation Purpose:: {{ $data['donationPurpose'] }} <br>
Donation Aomunt:: {{ $data['amount'] }} <br>
Payment Method:: {{ $data['paymentMethod'] }} <br>
Donation Message:: {{ $data['message'] }} <br>

{{-- <x-mail::button :url="''">
Reply Donator
</x-mail::button> --}}


Thanks,<br>
{{ config('app.name') }}
<br>
{{ $data['time'] }}
</x-mail::message>
