@extends('layout')

@section('content')
    <h1 class="title">Create a new Project</h1>

    <form action="/projects" method="post">
        @csrf
        <div class="field">
            <div class="control">
               <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Project title" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project description">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Create Project</button>
            </div>
        </div>

      @include('errors')
    </form>
@endsection