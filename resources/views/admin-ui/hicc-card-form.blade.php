@extends('admin-ui.layouts.main')
@section('main-container')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Form Section -->
<section id="form">
    <h2>Add HICC Here!</h2>
    <a class="btn btn-success" href="{{route('hicc-card-table')}}">Table</a>
    <form id="accountForm" action="{{ route('hicccard.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="letter" class="form-label">Upload Letter:<span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="letter" name="letter"
                 required>
        </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email:<span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" id="email" name="email"
            placeholder="xyz@gmail.com" value="{{ old('email') }}"  required>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
      <div class="mb-3">
        <label for="passportNumber" class="form-label">Passport/ID No:<span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" id="passportNumber" name="passport_number"
            placeholder="Enter your passport/ID card number" value="{{ old('passport_number') }}"  required>
        @error('passport_number')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>



@endsection


