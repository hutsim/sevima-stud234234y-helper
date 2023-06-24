@extends('layout.body')
@section('title', 'Data Tugas')
@section('page-title', 'List Tugas')
@section('content')

    <section class="tugas">
        <div class="row">
            <div class="col">
                <button class="btn btn-info mb-2 text-white" data-bs-toggle="modal" data-bs-target="#addTask">Tambah Tugas</button>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="content">
            <div class="card">
                <div class="card-body">
                    <!-- table -->
                    <div class="table-responsive-lg">
                        <table class="table mt-3 " style="outline: 2px" id="tabel_tasks">
                            <thead class="table-secondary table-responsive">
                                <tr style="text-align: start">
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Tenggat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tugas as $t)
                                <tr>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
    </section>

    <!-- Add Mapel Modal -->
    <div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <form action="{{ route('tugas.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_mapel">Mata Pelajaran</label>
                            <select class="form-control form-select" name="mapel_id" id="mapel_id">
                                <option>Pilih Mapel</option>
                                @foreach($mapel as $m)
                                <option value="{{$m->id}}">{{$m->nama_mapel}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_tugas">Nama Tugas</label>
                            <input class="form-control" type="text" name="nama_tugas" id="nama_tugas">
                        </div>
                        <div class="form-group">
                            <label for="tenggat">Tenggat</label>
                            <input class="form-control" type="date" name="tenggat" id="tenggat">
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <div class="form-group">
                                <a class="btn" data-bs-dismiss="modal">Cancel</a>
                                <input type="submit" class="btn btn-success" value="Save">
                       