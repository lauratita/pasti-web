@extends('layouts.app')

@section('title', 'Wali Murid')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Wali Murid</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Wali Murid</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Wali Murid</h4>
                                <div class="card-header-action">
                                    <form action="{{ route('orangTua.index') }}" method="GET" class="mr-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search" placeholder="Search"
                                                value="{{ request('search') }}">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="{{ route('orangTua.create') }}" class="btn btn-icon icon-left btn-primary"><i
                                        class="far fa-edit"></i>
                                    Tambah Wali Murid</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table" id="sortable-table">
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orangTua as $item)
                                                <tr>
                                                    <td>{{ $item->nik_ortu }}</td>
                                                    <td>{{ $item->nama_ortu }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->no_hp_ortu }}</td>
                                                    <td>
                                                        <a href="{{ route('orangTua.edit', $item->id_ortu) }}"
                                                            class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('orangTua.destroy', $item->id_ortu) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger delete-btn"><i
                                                                    class="fas fa-times"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
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

    {{-- JS hapus --}}
    <script>
        $(document).ready(function() {
            // Event listener untuk tombol hapus jenis pegawai
            $(document).on('click', '.delete-btn', function(e) {
                // $(document).on('click', '.btn-danger', function(e) {
                e.preventDefault();

                const form = $(this).closest('form');
                const orangTua = $(this).closest('tr').find('td:nth-child(2)').text();

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: `Anda akan menghapus wali murid "${orangTua}"`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
