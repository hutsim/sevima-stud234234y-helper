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
                        <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                        <p class="card-text">Fitur yang bisa kamu gunakan untuk mendata apa saja mata pelajaranmu.</p>
                        <a href="/mapel" class="card-link">See Detail</a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Tugas</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                        <p class="card-text">Fitur agar tugasmu lebih terorganisir dan kamu tidak akan lupa dengan deadlinenya.</p>
                        <a href="/tugas" class="card-link">See Detail</a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">AI Helper</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                        <p class="card-text">Fitur ini bisa bantu kamu untuk cari tahu apa pun yang kamu perlu tau. Bisa banget nih buat bantuin nugas !</p>
                        <a href="/ai" class="card-link">See Detail</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
