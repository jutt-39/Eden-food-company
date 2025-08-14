@extends('admin-ui.layouts.main')
@section('main-container')
    <section id="table">
        <h2>Apply Biomatric Table</h2>
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
                    <th>Whatsap#</th>
                    <th>Passport#</th>
                    <th>Country</th>
                    <th>Date</th>
                    <th>Actons</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr>
                        <td>{{ $application->id }}</td>
                        <td>{{ $application->name }}</td>
                        <td>{{ $application->whatsapp_number }}</td>
                        <td>{{ $application->passport_number }}</td>
                        <td>{{ $application->livingcountry }}</td>
                        <td>{{ $application->date }}</td>
                        <td>
                            <form action="{{ route('applybiomatric.destroy', $application->id) }}" method="POST">
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
