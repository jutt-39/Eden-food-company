@extends('client-ui.layouts.main')
@section('main-container')
@section('title', 'Work Permit - Eden Food Company Canada')


<!-- Fee Status Section -->
<section class="fee-status-section py-5" style="background-image: url({{asset('client-ui/imgs/crosal5.jpg')}}); background-size: cover; background-position: center;">
    <div class="container text-white">
        <!-- Animated Heading -->
        <h1 id="animatedHeading" class="text-center mb-4">Check your Work Permit</h1>
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

                <!-- Subheading -->
                <p class="lead text-center mb-5">
                    Eden Foods Company Canada Immigration Consultants

                <!-- Search Form -->
                <form method="get" enctype="multipart/form-data" action="{{ route('workpermitletter') }}">
                    <!-- Email or Passport Number -->
                    @csrf
                    <div class="mb-3">
                        <label for="passport_number" class="form-label">Passport Number:</label>
                        <input @if ($type == 'search') value="{{ $passport->passport_number }}" @endif type="text"
                            class="form-control" id="passport_number" value="{{ old('passport_number') }}"
                            name="passport_number" placeholder="Enter passport number" required>
                        @error('passport_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Search Button -->
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>


        </section>

        @if ($type == 'search')
        <!-- PDF Preview (Hidden by Default) -->

        <h4 class="mb-3 text-center">Your Work Permit</h4>
        <iframe src="{{ $filePath }}" title="Job Offer Letter" frameborder="0" ></iframe>
        <div class="pdf-actions">

            <a href="{{ route('downloadworkpermit', ['field' => 'letter', 'id' => $passport->id]) }}"
                class="btn btn-success" download>Open</a>
        </div>
        </div>
        @endif

@include('client-ui.review')


@endsection
