@extends('layout')
@section('judul', $data->nama_sewa)
@section('konten')

<section class="hero is-success">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">{{ $data->nama_sewa }}</h1>
            <h2 class="subtitle">Data Sewa: {{ $data->kategori ? $data->kategori->nama_barang : '' }}</h2>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-quarters">
                <div class="card receipt-card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Detail Sewa
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <table class="table is-fullwidth is-bordered">
                                <tbody>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <td>{{ $data->kategori ? $data->kategori->nama_barang : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Sewa</th>
                                        <td>{{ $data->nama_sewa }}</td>
                                    </tr>
                                    <tr>
                                        <th>Harga Sewa</th>
                                        <td>{{ $data->harga_sewa }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gambar Jaminan</th>
                                        <td>
                                            @if($data->gambar)
                                                <div class="image-container">
                                                    <img src="{{ asset('storage/' . $data->gambar) }}" alt="Gambar Pemeriksaan">
                                                </div>
                                            @else
                                                <p>Gambar tidak tersedia</p>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <button class="button is-primary is-fullwidth" onclick="window.print()">Print Receipt</button>
            </div>
        </div>
    </div>
</section>

@endsection

<style>
.receipt-card {
    border: 2px solid #3273dc;
    padding: 20px;
}

.receipt-card .card-header {
    background-color: #3273dc;
    color: white;
}

.table th, .table td {
    padding: 10px;
    border: 1px solid #3273dc;
}

.image-container {
    display: flex;
    justify-content: center;
}

.image-container img {
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
    padding: 5px;
    background-color: #fff;
}
</style>
