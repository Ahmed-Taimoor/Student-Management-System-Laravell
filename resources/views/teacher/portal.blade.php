@extends('layouts.app')

@section('content')
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm  position-relative">

        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Profile</strong>
            <h3 class="mb-0">Teacher Detail</h3>

            {{-- <a href="{{ route('portal') }}" class="stretched-link opacity-0">Read More</a> --}}
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="https://via.placeholder.com/150x150" class="bd-placeholder-img" alt="Academics Thumbnail">
        </div>
    </div>
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm  position-relative">

        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Management</strong>
            <h3 class="mb-0">Manage Students</h3>

            <a href="{{ route('viewstudent') }}" class="stretched-link opacity-0">Read More</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="https://via.placeholder.com/150x150" class="bd-placeholder-img" alt="Academics Thumbnail">
        </div>
    </div>
@endsection
