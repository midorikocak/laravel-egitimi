@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Works</div>

                    <div class="card-body">
                        <h2><?=$work->title?></h2>
                        <p><?=$work->description?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
