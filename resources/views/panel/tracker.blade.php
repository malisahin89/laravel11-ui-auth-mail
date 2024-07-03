@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mb-4">Trackers List</h1>

            <form action="#" method="POST">
            {{-- <form action="{{ route('usersendmail.post') }}" method="POST"> --}}
                @csrf

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Subject</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Show</th>
                            <th scope="col">Send Date</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trackers as $tracker)
                            <tr>
                                <th scope="row">{{ $tracker->id }}</th>
                                <td>{{ $tracker->mail_subject }}</td>
                                <td>{{ $tracker->mail_id }}</td>
                                <td>{{ $tracker->show }}</td>
                                <td>{{ $tracker->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <input type="checkbox" name="selected_tracker[]" value="{{ $tracker->id }}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <button type="submit" class="btn btn-primary">Seçilenleri Sil</button>
            </form>

        </div>
    </div>
</div>
@endsection
