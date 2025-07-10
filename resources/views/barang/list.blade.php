@extends('layout')
@section('judul', 'PS')
@section('konten')

<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Daftar Barang PS</p>
        <p class="subtitle">Rental Playstation</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            @foreach ($data as $index => $item)
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            @if ($item->gambar)
                            <img src="{{ Storage::url($item->gambar) }}" alt="Gambar Barang">
                            @else
                            <img src="https://via.placeholder.com/256x256" alt="Placeholder">
                            @endif
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">{{ $item->nama_barang }}</p>
                            </div>
                        </div>

                        <div class="content">
                            <p>{{ $item->deskripsi }}</p>
                            
                            <p>
                                @if ($item->status == 'available')
                                <span class="tag is-success">Tersedia</span>
                                @else
                                <span class="tag is-danger">Tidak Tersedia</span>
                                @endif
                            </p>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="/barang/{{ $item->id }}" class="card-footer-item">Baca Selengkapnya</a>
                        
                        @if ($item->status == 'available')
                        <a href="/sewa/{{ $item->id }}" class="card-footer-item">Sewa</a>
                        @endif
                    </footer>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
