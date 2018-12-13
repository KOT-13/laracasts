@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form action="/projects/{{ $project->id }}" method="post">
        @method('patch')
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>
            
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea type="text" class="textarea" name="description">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>

@endsection