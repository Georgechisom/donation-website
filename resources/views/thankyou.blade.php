@extends('layouts.app')

@section('content')

<div class="container">
    {{-- Flash Messages --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>

<div class="container thankyoufirst">
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-2 my-4 shadow-md mx-auto sessionplay w-64 md:w-72" id="myalert" role="alert">
        <div class="flex items-center justify-center text-center text-base md:text-lg nevshw">
            <div class="py-1 text-green-600 mx-2"><i class="fa-solid fa-hand-holding-droplet"></i></div>
            <div>
                <p class="font-bold text-green-600">Donation Info Sent</p>
                {{ session('success') }}
            </div>
        </div>
    </div>
    <div class="thankyoufirst2">
        <div>
            <img src="{{ asset('images/thanks.jpg') }}" class="object-cover w-auto h-auto" />
        </div>
        <div class="thankyoufirst3">
            We appreciate your kind heart, your compassionate efforts to help the poor, and your support for the Divineone Community. <br>
            You will receive a mail from us.
        </div>
    </div>
</div>
@endsection