@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <form action="{{route('admin.projects.update', $project->slug)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Aggiungi title</label>
          <input value="{{ old('title') ?? $project['title'] }}" type="text" class="form-control" id="" aria-describedby="" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi descrizione</label>
            <textarea rows="5" class="form-control" id="" aria-describedby="" name="content">{{old('content') ?? $project['content']}}</textarea>
        </div>
    
        <div class="form-group">
    
            <button type="submit" class="btn btn-primary">Crea il nuovo projects</button>
        </div>
      </form>
</div>
@endsection