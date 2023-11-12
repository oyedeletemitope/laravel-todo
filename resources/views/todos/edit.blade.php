@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todo Application</div>

                <div class="card-body">
                    <h4>Edit Todo</h4>
                    <form method="post" action="{{route('todos.update')}}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="todo_id" id="" value="{{$todo->id}}">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$todo->title}}">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deescription</label>
                            <textarea name="description" class="form-control" cols="5" rows="10">
                            {{$todo->description}}

                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="is_completed" class="form-control">
                                <option disabled selected>Selcet Option</option>
                                <option value="1">Completed</option>
                                <option value="0">incomplete</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection