
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
            We received a request to reset Your password if
             you Want To Reset Password Please Click To Button Down :
        </div>
        <!----->
        <div class="content-button">
            <div class="">{{ url('/reset',$id) }}</div>
        </div>
        <!------>
        <div class="content-footer">
            If you did not request this code, it is possible that someone 
            else is trying to access Your Account . Do not forward or give 
            this link to anyone. 
        </div>
    </div>
    <!----->
    <div class="footer">
        <hr>
        RentHouse Team
    </div>
</div>
