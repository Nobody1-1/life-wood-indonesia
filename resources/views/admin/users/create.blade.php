@extends('admin.layout.admin')

@section('content')
<main class="main" id="main">
    <div class="container">
        <h2>Create user</h2>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{Route('users.index')}}">Daftar User</a></li>
            <li class="breadcrumb-item active">Create User</li>

        </ol>
    
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
    
            <div class="form-group mb-5">
                <label>Role</label>
                <select name="role" class="form-control">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</main>
@endsection
