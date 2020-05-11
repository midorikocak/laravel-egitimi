@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    <paper>
        <div class="table-responsive">

            <table id="works" class="table table-striped">
                <thead>
                <tr>
                    <th class="fit">ID</th>
                    <th>Title</th>
                    <th class="no-sort fit">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($works as $work)
                    <tr>
                        <td>{{$work->id}}</td>
                        <td>{{$work->title}}</td>
                        <td class="d-flex flex-row"><a href="{{ route('work.show', $work->id)}}"
                                                       class="btn btn-primary">View</a>

                            <a href="{{ route('work.edit', $work->id)}}" class="btn btn-primary">Edit</a>

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
    </paper>
    <div class="py-4">
        {{ $works->links() }}
    </div>



@endsection
