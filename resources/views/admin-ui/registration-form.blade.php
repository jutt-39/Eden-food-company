@extends('admin-ui.layouts.main')
@section('main-container')


@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<!-- Form Section -->
<section id="form" >
    <h2>User Form</h2>
    <form method="post"action="{{route('register')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="{{ old('name') }}" id="name"
                name="name" placeholder="username" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Email:<span class="text-danger">*</span></label>
            <input type="email" class="form-control" value="{{ old('email') }}" id="name"
                name="email" placeholder="abc@gmail.com" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Password:<span class="text-danger">*</span></label>
            <input type="password" class="form-control"  id="name"
                name="password" placeholder="*****" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Password_confirmation:<span class="text-danger">*</span></label>
            <input type="password" class="form-control"  id="name"
                name="password_confirmation" placeholder="*****" required>
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>



@endsection
