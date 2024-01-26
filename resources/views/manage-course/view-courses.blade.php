@extends('layouts.app')

@section('content')
    <a href="{{ route('addcourse') }}" class="btn btn-warning my-3 ">Add Courses</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Course Id</th>
                    <th scope="col">Course Name</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr class="">
                        <td scope="row">{{ $course['course_id'] }}</td>
                        <td scope="row">{{ $course['course_name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
