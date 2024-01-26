@extends('layouts.app')

@section('content')
    <a href="{{ route('addteacher') }}" class="btn btn-warning my-3 ">Add Teachers</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Teacher Id</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Teacher Email</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr class="">
                        <td scope="row">{{ $teacher['id'] }}</td>
                        <td scope="row">{{ $teacher['name'] }}</td>
                        <td scope="row">{{ $teacher['email'] }}</td>
                        <td scope=" d-flex justify-content-end  ">
                            <a href = '{{ route('updateteacher', ['id' => $teacher['id']]) }}'class="btn btn-primary"
                                role="group" aria-label="Vertical button group">
                                Edit
                            </a>
                            <a href = '{{ route('deleteteacher', ['id' => $teacher['id']]) }}' class="btn btn-danger"
                                role="group" aria-label="Vertical button group">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
