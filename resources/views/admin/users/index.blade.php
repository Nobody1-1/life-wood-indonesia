@extends('admin.layout.admin')

@section('content')
<main class="main" id="main">
    <div class="container">
            <h2>Daftar user</h2>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{Route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Daftar User</li>

        </ol>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
    
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $i => $user)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus user ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</main>
@endsection
