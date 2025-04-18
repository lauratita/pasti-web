@extends('layouts.app')

@section('title', 'Form Data Wali Murid')
@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Wali Murid</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('orangTua.index') }}">Wali Murid</a></div>
                    <div class="breadcrumb-item">Tambah Data Wali Murid</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Wali Murid</h4>
                            </div>
                            <div class="card-body">
                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        <div class="">
                                            <button class="close" data-dismiss="alert">
                                                <span>&times;</span>
                                            </button>
                                            {{ session('error') }}
                                        </div>
                                    </div>
                                @endif

                                <form action="{{ route('orangTua.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>NIK</label>
                                            <input type="text"
                                                class="form-control @error('nik_ortu') is-invalid @enderror" name="nik_ortu"
                                                id="nik_ortu" value="{{ old('nik_ortu') }}" placeholder="Masukkan NIK"
                                                required>
                                            @error('nik_ortu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nama Lengkap</label>
                                            <input type="text"
                                                class="form-control @error('nama_ortu') is-invalid @enderror"
                                                name="nama_ortu" id="nama_ortu" value="{{ old('nama_ortu') }}"
                                                placeholder="Masukkan Nama Lengkap" required>
                                            @error('nama_ortu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" id="email" value="{{ old('email') }}"
                                                placeholder="Masukkan Email" required>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control @error('jk_ortu') is-invalid @enderror"
                                                name="jk_ortu" id="jk_ortu" required>
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="laki-laki"
                                                    {{ old('jk_ortu') == 'laki-laki' ? 'selected' : '' }}>
                                                    Laki-laki
                                                </option>
                                                <option value="perempuan"
                                                    {{ old('jk_ortu') == 'perempuan' ? 'selected' : '' }}>
                                                    Perempuan
                                                </option>
                                            </select>
                                            @error('jk_ortu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>No Handphone</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-phone"></i>
                                                    </div>
                                                </div>
                                                <input type="text"
                                                    class="form-control phone-number @error('no_hp_ortu') is-invalid @enderror"
                                                    name="no_hp_ortu" id="no_hp_ortu" value="{{ old('no_hp_ortu') }}"
                                                    placeholder="Masukkan No Handphone" required>
                                                @error('no_hp_ortu')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control @error('alamat_ortu') is-invalid @enderror" data-height="150" name="alamat_ortu"
                                            id="alamat_ortu" placeholder="Masukkan Alamat" required>{{ old('alamat_ortu') }}</textarea>
                                        @error('alamat_ortu')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        </textarea>
                                    </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('orangTua.index') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
