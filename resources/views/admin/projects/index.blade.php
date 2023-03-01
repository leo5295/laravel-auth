@extends('layouts.admin')
@section('content')
<div>
    <a class="d-flex justify-content-end" href="{{route('admin.projects.create')}}">
        <button class="btn btn-primary m-3">Crea nuovo progetto</button>
    </a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Slug</th>
            <th scope="col">Elimina</th>
            <th scope="col">Edit</th>
            <th scope="col">Vedi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item)
            <tr>
              <td>{{$item->title}}</td>
              <td>{{$item->content}}</td>
              <td>{{$item->slug}}</td>
              <td>
                <div>
                  <form action="{{route('admin.projects.destroy', ['project' => $item['slug']] )}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" name="" id="" value="Elimina" class="btn btn-danger">
                  </form>
              </div>
              </td>
              <td>
                <a href="{{route('admin.projects.edit', $item)}}">
                  <button class="btn btn-secondary">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button>
                </a>
              </td>
              <td>
                <a href="{{route('admin.projects.show', $item->slug)}}">
                  <button class="btn btn-warning">
                    <i class="fa-solid fa-eye"></i>
                  </button>
                </a>
              </td>
            </tr>  
            @endforeach
        </tbody>
      </table>
</div>
@endsection