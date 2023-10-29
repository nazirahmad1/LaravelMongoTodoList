@extends('layout.layout')

@section('content')
    

    @foreach ($todos as $todo)
      
    <div class="card mb-3">
      <div class="p-3 card-header">
        <span class="p-2 badge badge-secondary text-white">
          {{$todo->status}}
        </span>
      </div>
      <div class="card-body">
        <h5 class="card-title">{{$todo->title}}</h5>
        <p class="card-text">{{$todo->description}}</p>
        <div class="text-right">
          <a href="/task/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
          <form action="/task/{{$todo->_id}}/delete" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger p-2">Delete</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach

    @endsection