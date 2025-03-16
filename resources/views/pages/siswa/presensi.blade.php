@extends('layouts.app')

@section('title', 'Presensi')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Presensi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Presensi</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Presensi Siswa</h4>
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
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table" id="sortable-table">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Keterangan</th>
                                                <th>Poin Telat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-01-20</td>
                                                <td>9876543</td>
                                                <td>Melvina</td>
                                                <td>
                                                    <div class="badge badge-success">Hadir</div>
                                                </td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-20</td>
                                                <td>9876543</td>
                                                <td>Melvina</td>
                                                <td>
                                                    <div class="badge badge-warning">Sakit</div>
                                                </td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-20</td>
                                                <td>9876543</td>
                                                <td>Melvina</td>
                                                <td>
                                                    <div class="badge badge-info">Izin</div>
                                                </td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-20</td>
                                                <td>9876543</td>
                                                <td>Melvina</td>
                                                <td>
                                                    <div class="badge badge-danger">Alpha</div>
                                                </td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-20</td>
                                                <td>9876543</td>
                                                <td>Melvina</td>
                                                <td>
                                                    <div class="badge badge-success">Hadir</div>
                                                </td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>2018-01-20</td>
                                                <td>9876543</td>
                                                <td>Melvina</td>
                                                <td>
                                                    <div class="badge badge-success">Hadir</div>
                                                </td>
                                                <td>0</td>
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
