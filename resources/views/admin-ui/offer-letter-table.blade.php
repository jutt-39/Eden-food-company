@extends('admin-ui.layouts.main')
@section('main-container')
<section id="table">
    <h2>Offer Letter Table</h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <a class="btn btn-success" href="{{route('offer-letter-form')}}">Add Now</a>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>E-Address</th>
          <th>Passport#</th>
          <th>letter</th>
          <th>Actons</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($applications as $application)
        <tr>
            <td>{{ $application->id }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->passport_number }}</td>

            <td><a
                    href="{{ route('offerletter.download', ['field' => 'letter', 'id' => $application->id]) }}">Download</a>
            </td>
            <td>
                <form action="{{ route('offerletter.destroy', $application->id) }}" method="POST">
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
