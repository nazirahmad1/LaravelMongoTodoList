<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
@extends('layout.layout')

@section('content')
    

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <strong>{{ $message }}</strong>
    </div>
@endif
    <form action="/task/{{$todo->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <div class="mt-5">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{$todo->title}}">
             @if ($errors->has('title'))
                  <span class="text-danger">{{$errors->first('title')}}</span>
                  @endif
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="5" name="description">{{$todo->description}}</textarea>
             @if ($errors->has('description'))
                  <span class="text-danger">{{$errors->first('description')}}</span>
                  @endif
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input name="status" class="form-control" placeholder="Status..." value="{{$todo->status}}"/>
             @if ($errors->has('status'))
                  <span class="text-danger">{{$errors->first('status')}}</span>
                  @endif
          </div
        
          <div class="mt-3">
            <button type="submit" class="btn btn-sm btn-success mt-5" style="margin-top:20px">Update</button>
          </div
    </form>
        

    @endsection