@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Works</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Title</td>
                                    <td colspan="2">Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($works as $work)
                                    <tr>
                                        <td>{{$work->id}}</td>
                                        <td>{{$work->title}}</td>
                                        <td><a href="{{ route('work.show', $work->id)}}" class="btn btn-primary">View</a></td>

                                        <td><a href="{{ route('work.edit', $work->id)}}" class="btn btn-primary">Edit</a></td>
                                        <td>
                                            <form action="{{ route('work.destroy', $work->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
