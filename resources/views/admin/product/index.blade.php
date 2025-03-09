@extends('admin.layout.admin')

@section('content')
<main class="main" id="main">
    <div class="container">
        <div class="pagetitle">
            <h1>Daftar Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Product</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        @if(session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif
        <a href="{{ Route('products.create') }}" class="btn btn-success mb-3">Tambah Produk</a>
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Ukuran</th>
                    <th>Material</th>
                    <th>Kategori</th>
                    <th>Varian</th>
                    <th>deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $i => $product)
                <tr>
                    
                    <td class="text-center">{{ $i+1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="50">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->material }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->variant }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
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
