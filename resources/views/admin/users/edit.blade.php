@extends('admin.layout.admin')

@section('content')
<main class="main" id="main">

    <div class="container">
            <h1>Edit User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('users.index')}}">Daftar User</a></li>
                    <li class="breadcrumb-item active">Edit User</li>

                </ol>
            </nav>
    
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>
    
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>
    
            <div class="form-group">
                <label>Password (Opsional)</label>
                <input type="password" name="password" class="form-control">
            </div>
    
            <div class="form-group mb-5">
                <label>Role</label>
                <select name="role" class="form-control">
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>
@endsection
