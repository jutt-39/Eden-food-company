@extends('client-ui.layouts.main')
@section('main-container')
@section('title', 'Offer Letter - Eden Food Company Canada')

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <!-- Status Check Section -->
    <section class="status-check-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Check Your Job Offer Letter Status</h2>
            <form method="get" enctype="multipart/form-data" action="{{ route('searchofferletter') }}">
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

            @if ($type == 'search')
                <!-- PDF Preview (Hidden by Default) -->

                <h4 class="mb-3 text-center">Your Job Offer Letter</h4>
                <iframe src="{{ $filePath }}" title="Job Offer Letter" frameborder="0"></iframe>
                <div class="pdf-actions">

                    <a href="{{ route('downloadofferletter', ['field' => 'letter', 'id' => $passport->id]) }}"
                        class="btn btn-success" download>Open</a>
                </div>
        </div>
        @endif

    </section>
    @include('client-ui.review')
@endsection
