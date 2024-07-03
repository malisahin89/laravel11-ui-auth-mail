@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mb-4">Kullanıcı Listesi</h1>

            <form action="{{ route('usersendmail.post') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="mail_subject" class="form-label">Mail Konusu:</label>
                    <input type="text" class="form-control" id="mail_subject" name="mail_subject">
                </div>

                <div class="mb-3">
                    <label for="mail_content" class="form-label">Mail İçeriği:</label>
                    <textarea class="form-control" id="mail_content" name="mail_content" rows="5"></textarea>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ad</th>
                            <th scope="col">E-posta</th>
                            <th scope="col">Level</th>
                            <th scope="col">Kayıt Tarihi</th>
                            <th scope="col">Seç</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->is_admin }}</td>
                                <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <input type="checkbox" name="selected_users[]" value="{{ $user->email }}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <button type="submit" class="btn btn-primary">Seçilenleri Güncelle</button>
            </form>

        </div>
    </div>
</div>
@endsection
