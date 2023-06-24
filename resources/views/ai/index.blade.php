@extends('layout.body')
@section('title', 'AI Helper')
@section('content')

<section class="ai">
	<div class="page-title">
	    <h4 class="fw-bold">Hi {{ auth()->user()->name }}, apa yang bisa AI bantu ? 👋</h4>
	    <p>Silahkan Masukkan Keyword Untuk Mendapatkan Bantuan Menggunakan AI</p>
	</div>

	<div class="col-lg-12">
		<div class="container">
			<div class="text-center">
				<h3 class="fw-bold">Search Something Here..</h3>
				<br>
				<form action="{{route('ai.index')}}" method="post">
					@csrf
					<div class="row">
						<div class="col-10">
							<div class="form-group">
								<input class="form-control" type="text" name="keyword">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<button class="btn btn-dark">Search !</button>
							</div>
						</div>
					</div>
				</form>
				<hr>
			</div>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				@if(count($text) > 0)
					@foreach($text as $t)
						<p><strong>You :</strong> {{ $t['keyword'] }}</p>
						<p><strong>Answer :</strong> {{$t['result']}}</p>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</section>

@endsection