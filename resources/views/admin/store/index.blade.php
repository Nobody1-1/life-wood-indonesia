@extends('admin.layout.admin')

@section('content')
<main class="main" id="main">
    <div class="container">
        <div class="pagetitle">
                <h1>Daftar Store</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{Route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Store</li>

                    </ol>
                </nav>
            </div><!-- End Page Title -->
        <a href="{{ route('store.create') }}" class="btn btn-primary mb-3">Tambah Toko</a>
    
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Alamat</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($store as $i => $store)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{ $store->name }}</td>
                    <td>{{ $store->longitude }}</td>
                    <td>{{ $store->latitude }}</td>
                    <td>{{ $store->address }}</td>
                    <td>
                        @if($store->image)
                            <img src="{{ asset('storage/' . $store->image) }}" alt="Gambar Toko" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('store.edit', $store->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('store.destroy', $store->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</main>
@endsection
