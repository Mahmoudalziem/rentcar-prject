

<div class="container">
    <!------>
    <div class="image">
        {{-- <img src="{{ $message->embed(asset('images/logo/log.jpg')) }}"> --}}
    </div>
    <!----->
    <div class="content">
        <div class="content-header">
            <div class=""> Hello {{ $name }}</div>
        </div>
        <!----->
        <div class="content-header">
            From : {{$email}}
        </div>
        <!------>
        <div class="content-footer">
            Message : {{ $messageContent }}
        </div>
        <!------>
    </div>
    <!----->
    <div class="footer">
        <hr>
        RentHouse Team
    </div>
</div>
