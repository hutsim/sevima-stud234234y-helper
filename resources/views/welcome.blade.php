@extends('layout.body')
@section('title', 'Dashboard')
@section('welcome', 'active')
@section('content')
    <!-- ini dashboard -->
    <section class="Dashboard">
        <!-- page title -->
        <div class="page-title">
            <h4 class="fw-bold">Hi {{ auth()->user()->name }}, How are you ? 👋</h4>
        </div>
        <hr>
        <div class="dashboard-content">
            <h1 class="fw-bold text-center">Apa Yang Kamu Butuhkan Hari ini ?</h1>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Mata Pelajaran</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/mapel" class="card-link">See Detail</a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Tugas</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/tugas" class="card-link">See Detail</a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">AI Helper</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/ai" class="card-link">See Detail</a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">See Detail</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
