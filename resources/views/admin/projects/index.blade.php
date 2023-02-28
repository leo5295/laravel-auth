@extends('layouts.admin')
@section('content')
<div>
    <a class="d-flex justify-content-end" href="{{route('admin.projects.create')}}">
        <button class="btn btn-primary m-3">+</button>
    </a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Slug</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item)
            <tr>
              <td>{{$item->title}}</td>
              <td>{{$item->content}}</td>
              <td>{{$item->slug}}</td>
            </tr>  
            @endforeach
        </tbody>
      </table>
</div>
@endsection