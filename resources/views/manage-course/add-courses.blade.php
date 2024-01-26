@extends('layouts.app')

@section('content')
    <form id="courceData" class="row g-3">
        @csrf
        <div class="row mt-4 bg-primary-subtle p-3 border border-primary-subtle studentrow ">
            <div class="col">
                <label for="name" class="form-label">Course Name</label>
                <input name="name" type="text" class="form-control" id="name">
            </div>
            <select class="js-example-basic-multiple" name="user[]" multiple="multiple">
                @foreach ($users as $user)
                    {{-- {{ $user }} --}}
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>







        <div class="col-12">
            <button id="submitCourceForm" type="button" class="btn btn-success ">Submit</button>
        </div>
    </form>

    {{-- {{ $users }} --}}
@endsection
