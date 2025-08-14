@extends('client-ui.layouts.main')
@section('main-container')
@section('title', 'Account department - Eden Food Company Canada')
<section class="fee-status-section py-5" style="background-image: url({{asset('client-ui/imgs/account.jpeg')}}); background-size: cover; background-position: center;">
    <div class="container text-white">
        <!-- Animated Heading -->
        <h1 id="animatedHeading" class="text-center mb-4">Send Payment Paid Slip Here</h1>


        <!-- Subheading -->
        <p class="lead text-center mb-5">
            Eden Foods Company Canada Immigration Consultants

        <!-- Search Form -->



</section>

    <section class="account-section py-5">
        <div class="container">
            <!-- Animated Heading -->

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Form -->
            <form id="accountForm" action="{{ route('accountdepartment.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name"
                        placeholder="Enter your full name" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Passport Number -->
                <div class="mb-3">
                    <label for="passportNumber" class="form-label">Passport/ID No:<span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="passportNumber" name="passport_number"
                        placeholder="Enter your passport/ID card number" value="{{ old('passport_number') }}"  required>
                    @error('passport_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Screenshot of Paid Payment -->
                <div class="mb-3">
                    <label for="paymentScreenshot" class="form-label">Screenshot of Paid Payment:<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="paymentScreenshot" name="photo"
                        accept="image/*" required>
                </div>

                <!-- Rules List -->
                <div class="rules-list mb-4">
                    <h5>Rules and Guidelines</h5>
                    <ul>
                        <li>Important:
                            Always “Validate” before you Pay! Ensure all account details are “Verified” with Account
                            Manager<br><b>Whatsapp</b> 📞<span class="text-danger">+1(825)309-1838</span> before submitting
                            any payment or fee.
                        </li>

                    </ul>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Submit Payment Slip</button>
            </form>
        </div>
    </section>
    <section class="container my-5">
        <!-- Bitcoin Card -->
        <h1><strong><span style="color: #339966;">For International Fees Payment in USD Dollar</span></strong></h1>
        <div class="card">
          <div class="text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Bitcoin.svg" alt="Bitcoin Logo" class="logo">
            <h5 class="card-title">Bitcoin</h5>
          </div>
          <div class="card-body">
            <img src="{{asset('client-ui/imgs/BTC-297x300.png')}}" alt="Bitcoin QR Code" class="qr-code">
            <div class="text-data">
                <p class="card-text">Account Title: BTC</p>
              <p class="card-text">BEP20 Address :<span style="color: #339966;"> 0xf6f1e02c9bcdb8b270b28d2a230763e7a9861144</p>

            </div>
          </div>
        </div>

        <!-- USDT Card -->
        <div class="card">
          <div class="text-center">
            <img src="https://cryptologos.cc/logos/tether-usdt-logo.png" alt="USDT Logo" class="logo">
            <h5 class="card-title">USDT</h5>
          </div>
          <div class="card-body">
            <img src="{{asset('client-ui/imgs/USDT-295x300.png')}}" alt="USDT QR Code" class="qr-code">
            <div class="text-data">
                <p class="card-text">Account Title: USDT Wallet</p>
              <p class="card-text">Tron (TRC20) Address :  <span style="color: #339966;">TArwLJj9F3yBc5ZyUz9yMHATYXY8ybcAhC</span></p>

            </div>
          </div>
        </div>

        <!-- Binance Payment Card -->
        <div class="card">
          <div class="text-center">
            <img src="https://cryptologos.cc/logos/binance-coin-bnb-logo.png" alt="Binance Logo" class="logo">
            <h5 class="card-title">Binance Payment</h5>
          </div>
          <div class="card-body">
            <img src="{{asset('client-ui/imgs/Binance-Pay-278x300.png')}}" alt="Binance QR Code" class="qr-code">
            <div class="text-data">
                <p class="card-text">Account Title: Binance Pay ID</p>
              <p class="card-text">ID:<span style="color: #339966;">980126916</span></p>

            </div>
          </div>
        </div>

        @foreach ($applications as $application)
        <h1><strong><span style="color: #339966;">For {{$application->country}} Fees Payment</span></strong></h1>
        <div class="card">
          <div class="text-center">

            <h5 class="card-title">{{ $application->accountName }}</h5>
          </div>
          <div class="card-body">
            <img src="{{ asset('storage/' . $application->qrCode) }}" alt="Qr Code" class="qr-code">
            <div class="text-data">
             <p class="card-text">Account Title: {{ $application->accountTitle }}</p>
             <p class="card-text">ID:<span style="color: #339966;">{{ $application->accountNumber }}</span></p>

            </div>
          </div>
        </div>
        @endforeach

      </section>

    @include('client-ui.crosal')
    @include('client-ui.review')
@endsection
