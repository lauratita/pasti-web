@extends('layouts.app')

@section('title', 'Form Detail Mapel')
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
                <h1>Form Detail Mata Pelajaran</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Tambah Detail Mapel</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Hari</label>
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Jam Awal</label>
                                        <input type="time" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Jam Akhir</label>
                                        <input type="time" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Kelas</label>
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Mata Pelajaran</label>
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Guru</label>
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-secondary" type="reset">Reset</button>
                                <button class="btn btn-primary">Submit</button>
                            </div>
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
