@extends('client-ui.layouts.main')
@section('main-container')
@section('title', 'Apply Biometric - Eden Food Company Canada')
<section class="carousel-section py-5 bg-light">
    <div class="container">


        <!-- Carousel -->
        @include('client-ui.crosal')
    <!-- Biometric Application Section -->
    <section class="biometric-section py-5">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <!-- Paragraph -->
            <div class="paragraph mb-5">
                <p class="lead text-center">
                    Fill the form Below For Your Appointment For Biometric and Eye Scan
                   Pay Biometric <span class="text-danger"> Fees USD 95 $ in Local Currency 8000 INR, 8000 Ngultrum, 6000 Afghan, 13000 NPR, 12000
                    BDT, 26500 PKR, 400 Riyal</span> (For Account Details Check Accounts Department) and save Payment Paid
                    Slip/Screenshot for Further Process on Biometrics (You Need to Upload Biometric Fees Slip/Screenshot
                    when Your Fingerprints will be sent to Immigration)
                </p>
            </div>

            <!-- Form -->
            <form action="{{ route('applybiomatric.store') }}" id="jobApplicationForm" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name"
                            placeholder="Enter your full name" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                <!-- WhatsApp Number -->
                <div class="mb-3">
                    <label for="name" class="form-label">WhtatsApp NO:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ old('whatsapp_number') }}" id="name"
                        name="whatsapp_number" placeholder="+ WhtatsApp NO:" required>
                    @error('whatsapp_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="passportNumber" class="form-label">Passport/ID No:<span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="passportNumber" name="passport_number"
                        placeholder="Enter your passport/ID card number" value="{{ old('passport_number') }}" required>
                    @error('passport_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Country Dropdown -->
                <div class="mb-3">
                    <label for="jobSelection" class="form-label"> Select country:<span
                            class="text-danger">*</span></label>
                    <select class="form-select" id="jobSelection"  name="livingcountry" required>
                        <option value="null">--Select country--</option>
                        <option value="INDIA">INDIA</option>
                        <option value="NEPAL">NEPAL</option>
                        <option value="BANGLADESH">BANGLADESH</option>
                        <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                        <option value="AFGHANISTAN">AFGHANISTAN</option>
                        <option value="BHUTAN">BHUTAN</option>
                        <option value="PAKISTAN">PAKISTAN</option>

                    </select>
                    @error('livingcountry')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

                <!-- Date -->
                <div class="mb-3">

                    <label for="date" class="form-label">Date:<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" value="{{ old('date') }}" id="date"
                        name="date"  required>
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Terms and Conditions -->
                <div class="terms-conditions mb-4">
                    <h5>Terms and Conditions</h5>
                    <ul>
                        <li>You must provide accurate and truthful information.</li>
                        <li>Your biometric appointment will be scheduled based on availability.</li>
                        <li>You must bring your original passport and appointment confirmation to the biometric center.</li>
                        <li>Failure to attend the appointment may result in rescheduling fees.</li>
                    </ul>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                        <label class="form-check-label" for="agreeTerms">
                            I agree to the terms and conditions.
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Book Now!</button>
            </form>
        </div>
    </section>
    {{-- review  --}}
    @include('client-ui.review')
@endsection
