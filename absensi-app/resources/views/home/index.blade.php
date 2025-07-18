@extends('layouts.home')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Kolom Absensi -->
        <div class="col-md-8">
            <div class="card shadow-sm mb-2">
                <div class="card-header">
                    Daftar Absensi Hari Ini
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse ($attendances as $attendance)
                            <a href="{{ route('home.show', $attendance->id) }}"
                               class="list-group-item d-flex justify-content-between align-items-start py-3">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{ $attendance->title }}</div>
                                    <p class="mb-0">{{ $attendance->description }}</p>
                                </div>
                                @include('partials.attendance-badges')
                            </a>
                        @empty
                            <li class="list-group-item text-muted">Belum ada data absensi untuk hari ini.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        <!-- Kolom Info Karyawan -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    Informasi Karyawan
                </div>
                <div class="card-body">
                    <ul class="ps-3">
                        <li class="mb-1">
                            <span class="fw-bold d-block">Nama</span>
                            <span>{{ auth()->user()->name }}</span>
                        </li>
                        <li class="mb-1">
                            <span class="fw-bold d-block">Email</span>
                            <a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a>
                        </li>
                        <li class="mb-1">
                            <span class="fw-bold d-block">Nomor Telepon</span>
                            <a href="tel:{{ auth()->user()->phone }}">{{ auth()->user()->phone }}</a>
                        </li>
                        <li class="mb-1">
                            <span class="fw-bold d-block">Tanggal Bergabung</span>
                            <span>{{ auth()->user()->created_at->diffForHumans() }} ({{ auth()->user()->created_at->format('d M Y') }})</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
