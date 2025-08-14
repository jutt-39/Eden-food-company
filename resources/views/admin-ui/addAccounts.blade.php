@extends('admin-ui.layouts.main')
@section('main-container')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Form Section -->
<section id="form">
    <h2>Add Accounts Here!</h2>
    <a class="btn btn-success" href="{{route('accounts.table')}}">Table</a>
    <form id="accountForm" action="{{ route('accounts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="passportNumber" class="form-label">Country :<span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control" id="passportNumber" name="country"
                placeholder="" value="{{ old('country') }}"  required>
            @error('country')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
      <div class="mb-3">
        <label for="email" class="form-label">AccountName:<span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" id="email" name="accountName"
            placeholder="jazzcash etc" value="{{ old('accountName') }}"  required>
        @error('accountName')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
      <div class="mb-3">
        <label for="passportNumber" class="form-label">AccountTitle :<span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" id="passportNumber" name="accountTitle"
            placeholder="Account Title" value="{{ old('accountTitle') }}"  required>
        @error('accountTitle')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
      <div class="mb-3">
        <label for="passportNumber" class="form-label">AccountNumber :<span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" id="passportNumber" name="accountNumber"
            placeholder="Account Title" value="{{ old('accountNumber') }}"  required>
        @error('accountNumber')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="letter" class="form-label">QR Code<span class="text-danger">*</span></label>
        <input type="file" class="form-control" id="letter" accept="image/*" name="qrCode"
             required >
    </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>



@endsection


