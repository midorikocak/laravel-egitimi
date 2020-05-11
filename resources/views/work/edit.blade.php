@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Works</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form method="post" action="{{ route('work.update', $work->id ) }}">
                            <div class="form-group">
                                @csrf
                                @method('PATCH')
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" value="{{ $work->title }}"/>
                            </div>
                            <div class="form-group">
                                <label for="symptoms">Description :</label>
                                <textarea rows="5" columns="5" class="form-control" name="description">{{ $work->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
