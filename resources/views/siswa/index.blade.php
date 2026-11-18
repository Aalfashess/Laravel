@extends('layout')

@section('title', 'Data Siswa')

@section('content')
    <div class="page-header flex-header">
        <div>
            <h2>Data Siswa</h2>
            <p class="page-subtitle">Berikut adalah daftar seluruh siswa yang terdaftar dalam sistem:</p>
        </div>
        <div class="header-badge-count">
            Total Siswa: <strong>{{ count($siswa) }}</strong>
        </div>
    </div>

    <div class="table-card">
        <div class="table-responsive">
            <table class="data-table">
                <thead>
                    <tr>
                        <th style="width: 80px; text-align: center;">No.</th>
                        <th>Nama Siswa</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($siswa as $s)
                        <tr>
                            <td style="text-align: center; font-weight: 600;">{{ $loop->iteration }}</td>
                            <td class="font-medium">{{ $s->nama }}</td>
                            <td>{{ $s->alamat ?? '-' }}</td>
                            <td>
                                @if(!empty($s->tanggal_lahir))
                                    <span class="date-badge">
                                        {{ date('d M Y', strtotime($s->tanggal_lahir)) }}
                                    </span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="empty-table-cell">
                                <div class="empty-state">
                                    <span class="empty-icon">📂</span>
                                    <p>Belum ada data siswa di dalam database.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
