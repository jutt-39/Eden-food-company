@extends('admin-ui.layouts.main')
@section('main-container')
<section id="table">
    <h2>User Table</h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
            <th>ID</th>
            <th>User-name</th>
            <th>Email</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($applications as $application)
          <tr>
              <td>{{ $application->id }}</td>
              <td>{{ $application->name }}</td>
              <td>{{ $application->email }}</td>

              <td>
                  <form action="{{ route('userdestroye', $application->id) }}" method="POST">
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
