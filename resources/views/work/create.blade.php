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
                        <form method="post" action="{{ route('work.store' ) }}">
                            <div class="form-group">
                                @csrf
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title"/>
                            </div>
                            <div class="form-group">
                                <label for="symptoms">Description :</label>
                                <textarea rows="5" columns="5" class="form-control" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
