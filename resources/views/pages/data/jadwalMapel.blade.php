@extends('layouts.app')

@section('title', 'Jadwal Mata Pelajaran')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Jadwal Mata Pelajaran</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="">Siswa</a></div>
                    <div class="breadcrumb-item">Jadwal Mata Pelajaran</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Jadwal Mata Pelajaran</h4>
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
                                    <table class="table-striped table-md table">
                                        <tr>
                                            <th>Kelas</th>
                                            <th>Hari</th>
                                            <th>Jam Masuk</th>
                                            <th>Jam Pulang</th>
                                        </tr>
                                        <tr>
                                            <td>10 Rekayas Perangkat Lunak</td>
                                            <td>
                                                Senin
                                            </td>
                                            <td>
                                                06:45:00
                                            </td>
                                            <td>13:45:00</td>
                                        </tr>
                                        <tr>
                                            <td>10 Rekayas Perangkat Lunak</td>
                                            <td>
                                                Senin
                                            </td>
                                            <td>
                                                06:45:00
                                            </td>
                                            <td>13:45:00</td>
                                        </tr>
                                        <tr>
                                            <td>10 Rekayas Perangkat Lunak</td>
                                            <td>
                                                Senin
                                            </td>
                                            <td>
                                                06:45:00
                                            </td>
                                            <td>13:45:00</td>
                                        </tr>
                                        <tr>
                                            <td>10 Rekayas Perangkat Lunak</td>
                                            <td>
                                                Senin
                                            </td>
                                            <td>
                                                06:45:00
                                            </td>
                                            <td>13:45:00</td>
                                        </tr>
                                        <tr>
                                            <td>10 Rekayas Perangkat Lunak</td>
                                            <td>
                                                Senin
                                            </td>
                                            <td>
                                                06:45:00
                                            </td>
                                            <td>13:45:00</td>
                                        </tr>
                                        <tr>
                                            <td>10 Rekayas Perangkat Lunak</td>
                                            <td>
                                                Senin
                                            </td>
                                            <td>
                                                06:45:00
                                            </td>
                                            <td>13:45:00</td>
                                        </tr>
                                        <tr>
                                            <td>10 Rekayas Perangkat Lunak</td>
                                            <td>
                                                Senin
                                            </td>
                                            <td>
                                                06:45:00
                                            </td>
                                            <td>13:45:00</td>
                                        </tr>
                                        <tr>
                                            <td>10 Rekayas Perangkat Lunak</td>
                                            <td>
                                                Senin
                                            </td>
                                            <td>
                                                06:45:00
                                            </td>
                                            <td>13:45:00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
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
