@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Input</div>

                <div class="card-body">
                    @if($data)
                        <form action="{{route('post.update', $data->_id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="from-group">
                                <label for="usr">Title:</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="from-group">
                                <label for="comment">Content:</label>
                                <textarea rows="5" class="form-control" name="artikel" value="{{$data->artikel}}" ></textarea>
                            </div>
                            <br>
                            <p align="center"><button class="btn btn-primary">Save</button></p>
                        </form>
                    @else
                        <form action="{{route('post.store')}}" method="post">
                            @csrf
                            <div class="from-group">
                                <label for="usr">Title:</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="from-group">
                                <label for="comment">Content:</label>
                                <textarea rows="5" class="form-control" name="artikel" > </textarea>
                            </div>
                            <br>
                            <p align="center"><button class="btn btn-primary">Save</button></p>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
