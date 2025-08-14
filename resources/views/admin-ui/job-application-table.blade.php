@extends('admin-ui.layouts.main')
@section('main-container')
    <section id="table">
        <h2>Job Applications Table</h2>
        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Whatsapp</th>
                    <th>Email</th>
                    <th>Passport Number</th>
                    <th>Job Name</th>
                    <th>Living Country</th>
                    <th>Job Country</th>
                    <th>Passport Image</th>
                    <th>CV</th>
                    <th>Photo</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($applications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->name }}</td>
                    <td>{{ $application->whatsapp_number }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->passport_number }}</td>
                    <td>{{ $application->jobname }}</td>
                    <td>{{ $application->livingcountry }}</td>
                    <td>{{ $application->jobcountry }}</td>
                    <td><a href="{{ route('jobapplication.download', ['field' => 'passport_image', 'id' => $application->id]) }}">Download</a></td>
                <td><a href="{{ route('jobapplication.download', ['field' => 'cv', 'id' => $application->id]) }}">Download</a></td>
                <td><a href="{{ route('jobapplication.download', ['field' => 'photo', 'id' => $application->id]) }}">Download</a></td>
                <td>
                    <form action="{{ route('jobapplication.destroy', $application->id) }}" method="POST">
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
