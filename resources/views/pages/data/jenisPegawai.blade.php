@extends('layouts.app')

@section('title', 'Jenis Pegawai')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Jenis Pegawai</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Pegawai</a></div>
                    <div class="breadcrumb-item">Jenis Pegawai</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Jenis Pegawai</h4>
                                <div class="card-header-action d-flex align-items-center">
                                <form action="{{ route('jenisPegawai.index') }}" method="GET" class="mr-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search" value="{{ request('search') }}">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                    <a href="{{ route('jenisPegawai.create') }}" class="btn btn-icon icon-left btn-primary">
                                        <i class="far fa-edit"></i> Tambah Jenis Pegawai
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table" id="sortable-table">
                                        <thead>
                                            <tr>
                                                <th>Id Jenis Pegawai</th>
                                                <th>Jenis Pegawai</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($jenisPegawai as $item)
                                            <tr>
                                                <td>{{ $item->id_jenispegawai }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>
                                                    <a href="{{ route('jenisPegawai.edit', $item->id_jenispegawai) }}"
                                                       class="btn btn-icon btn-primary">
                                                       <i class="far fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('jenisPegawai.destroy', $item->id_jenispegawai) }}"
                                                          method="POST"
                                                          class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-icon btn-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
