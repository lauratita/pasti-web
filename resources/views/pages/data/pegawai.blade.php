@extends('layouts.app')

@section('title', 'Daftar Pegawai')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Pegawai</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="">Pegawai</a></div>
                    <div class="breadcrumb-item">Daftar Pegawai</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Pegawai</h4>
                                <div class="card-header-action">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="{{ route('tambah.data.pegawai') }}" class="btn btn-icon icon-left btn-primary"><i
                                        class="far fa-edit"></i>
                                    Tambah Pegawai</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table" id="sortable-table">
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Jenis Pegawai</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>35100234567433</td>
                                                <td>Dwi Farhan</td>
                                                <td>Guru</td>
                                                <td><a href="#" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i
                                                            class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35100234567433</td>
                                                <td>Dwi Farhan</td>
                                                <td>Guru</td>
                                                <td><a href="#" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i
                                                            class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35100234567433</td>
                                                <td>Dwi Farhan</td>
                                                <td>Guru</td>
                                                <td><a href="#" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i
                                                            class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35100234567433</td>
                                                <td>Dwi Farhan</td>
                                                <td>Guru</td>
                                                <td><a href="#" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i
                                                            class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35100234567433</td>
                                                <td>Dwi Farhan</td>
                                                <td>Guru</td>
                                                <td><a href="#" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i
                                                            class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35100234567433</td>
                                                <td>Dwi Farhan</td>
                                                <td>Guru</td>
                                                <td><a href="#" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i
                                                            class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
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
