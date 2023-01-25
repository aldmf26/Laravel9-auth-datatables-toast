<x-app-layout>
    <x-slot name="header">
        {{-- <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard</h3>
                <p class="text-subtitle text-muted">This is the main page.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div> --}}
    </x-slot>

    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    
                </div>
                <h4 class="card-title" style="float: left">Data Penduduk</h4>
                <button type="button" class="btn btn-primary" style="float: right"
                                data-bs-toggle="modal" data-bs-target="#modal-tambah">
                                <i class="bi bi-plus-square"></i> Tambah Data
                            </button>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Divisi</th>
                            <th>Nama Divisi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>KDS</td>
                            <td>Andar</td>
                            <td align="center">
                                <a data-bs-toggle="modal" data-bs-target="#modal-edit-id" class="btn icon btn-sm btn-primary"><i
                                        class="bi bi-pencil"></i></a>
                                <a onclick="return confirm('Yakin dihapus ?')"
                                    href="#"
                                    class="btn  icon btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
