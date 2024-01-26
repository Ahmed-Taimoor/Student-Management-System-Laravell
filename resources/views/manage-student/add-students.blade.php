@extends('layouts.app')

@section('content')
    <div class="col-12">
        <button id="addStudentButton" class="btn btn-warning right">Add More</button>
    </div>
    <form id="studentdata" class="row g-3">
        @csrf
        <div id="studentRecord">
            @include('manage-student.partials.student-row')
        </div>


        <div class="col-12">
            <button id="submitform" type="button" class="btn btn-success ">Submit</button>
        </div>
    </form>
@endsection
