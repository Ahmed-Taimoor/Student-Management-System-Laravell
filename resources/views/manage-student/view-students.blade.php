@extends('layouts.app')

@section('content')
    <a href="{{ route('addstudent') }}" class="btn btn-warning my-3 ">Add One More Student</a>
    <!-- resources/views/upload.blade.php -->

    <form id="fileUploadForm" enctype="multipart/form-data" class="my-4">
        @csrf
        <input type="file" name="file" id="file" onchange="uploadFile()">
    </form>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Student Id</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="">
                        <td scope="row">{{ $student['id'] }}</td>
                        <td scope="row">{{ $student['name'] }}</td>
                        <td scope="row">{{ $student['email'] }}</td>
                        <td scope=" d-flex justify-content-end  ">
                            <a href = '{{ route('updatestudent', ['id' => $student['id']]) }}'class="btn btn-primary"
                                role="group" aria-label="Vertical button group">
                                Edit
                            </a>
                            <a href = '{{ route('deletestudent', ['id' => $student['id']]) }}' class="btn btn-danger"
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

@push('scripts')
    <script>
        function uploadFile() {
            var formData = new FormData($('#fileUploadForm')[0]);

            $.ajax({
                url: '{{ route('students.upload') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#uploadStatus').html('File uploaded successfully!');
                },
                error: function(error) {
                    $('#uploadStatus').html('File upload failed. Please try again.');
                }
            });
        };
    </script>
@endpush
