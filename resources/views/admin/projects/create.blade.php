@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1>Add New Project</h1>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" value="{{ old('description') }}"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="technologies">Technologies</label>
                <input type="text" class="form-control" id="technologies" name="technologies"
                    value="{{ old('technologies') }}">
            </div>
            <div class="form-group mb-3">
                <label for="url">Project URL</label>
                <input type="url" class="form-control" id="url" name="url" value="{{ old('url') }}">
            </div>
            <div class="form-group mb-3">
                <label for="image_url">Image URL</label>
                <input type="text" class="form-control" id="image_url" name="image_url" value="{{ old('image_url') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
