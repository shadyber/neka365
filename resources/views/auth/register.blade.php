@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <p class="p-4">Send SMS "ok" to 9723 on your mobile phone to Subscribe</p>
                    <a href="sms://9723;?&amp;body=ok" class="btn btn-outline-primary btn-lg p-3 center "  target="_blank">Send SMS "Ok"
                        To 9723 for  subscribe </a>

                    <p class="p-4">Once you subscribed to our website or service you can use for free for 3 days then will charge 1 birr per day untill you send unsubscription request . you can send unsubscribe request by clicking "unsubscribe" link on the home page.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
