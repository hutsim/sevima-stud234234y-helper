@extends('layout.body')
@section('title', 'Data Mata Pelajaran')
@section('content')

<div class="container">
	<div class="d-flex flex-row">
		<h4 class="fw-bold mb-3">Data Mata Pelajaran</h4>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addMapel">Tambah Mapel</button>
					<table class="table table-striped table-hover mt-3">
						<thead class="table-primary">
							<th>No.</th>
							<th>Nama</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($mapel as $m)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$m->nama_mapel}}</td>
								<td>
									<a href="{{ route('mapel.hapus', $m->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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

@endsection