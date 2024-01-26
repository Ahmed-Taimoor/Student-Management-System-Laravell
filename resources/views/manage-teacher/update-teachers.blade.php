@extends('layouts.app')

@section('content')
    {{-- {{ route('updatestudent', ['id' => $student['id']]) }} --}}
    <form class="row g-3 needs-validation" action="{{ route('updateteacherreq', ['id' => $teacher->id]) }}" method="post">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label ">Student Name</label>
            <input type="text" class="form-control" name="name" value="{{ $teacher->name }}" required>

        </div>
        <div class="col-md-6">
            <label for="email" class="form-label ">Student Email</label>
            <input type="text" class="form-control" name="email" value="{{ $teacher->email }}" required>

        </div>

        <div class="col-12 d-flex justify-content-center mt-5">
            <button class="btn btn-primary" type="submit">Update Student</button>
        </div>
    </form>
@endsection
