@extends('admin-ui.layouts.main')
@section('main-container')
<section id="table">
    <h2>Accounts</h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <a class="btn btn-success" href="{{route('accounts-form')}}">Add Account</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
            <th>ID</th>
            <th>Country</th>
            <th>AccountName</th>
            <th>AccountTitle</th>
            <th>Account#</th>
            <th>QR Code</th>
            <th>Actons</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($applications as $application)
          <tr>
              <td>{{ $application->id }}</td>
              <td>{{ $application->country }}</td>
              <td>{{ $application->accountName }}</td>
              <td>{{ $application->accountTitle }}</td>
              <td>{{ $application->accountNumber }}</td>

              <td>
                <img src="{{ asset('storage/' . $application->qrCode) }}" alt="QR Code" width="100">
              </td>
              <td>
                  <form action="{{ route('accounts.destroy', $application->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>
          </tr>
      @endforeach
        </tbody>
      </table>
    </section>
    @endsection
