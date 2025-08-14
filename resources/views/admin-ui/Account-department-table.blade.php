@extends('admin-ui.layouts.main')
@section('main-container')
    <section id="table">
        <h2>Account Department Table</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Passport#</th>
                    <th>Payment Slip</th>
                    <th>Actons</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr>
                        <td>{{ $application->id }}</td>
                        <td>{{ $application->name }}</td>
                        <td>{{ $application->passport_number }}</td>

                        <td><a
                                href="{{ route('accountdepartment.download', ['field' => 'photo', 'id' => $application->id]) }}">Download</a>
                        </td>
                        <td>
                            <form action="{{ route('accountdepartment.destroy', $application->id) }}" method="POST">
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
