
<div class="container miniContact d-flex justify-content-center">
    <div class="miniContact__block col-md-4">
        <img src="{{ asset('storage/icon-phone.png') }}" alt="" class="miniContact__img">
        <div class="miniContact__body">{{ $contact->phone }} - офис</div>
        <div class="miniContact__line"></div>
    </div>
    <div class="miniContact__block2 col-md-4">
        <img src="{{ asset('storage/icon-location.png') }}" alt="" class="miniContact__img">
        <div class="miniContact__body">{{ $contact->address }}</div>
        <div class="miniContact__line"></div>
    </div>
    <div class="miniContact__block3 col-md-4">
        <img src="{{ asset('storage/icon-plane.png') }}" alt="" class="miniContact__img">
        <div class="miniContact__body"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></div>
        <div class="miniContact__line"></div>
    </div>
</div>
