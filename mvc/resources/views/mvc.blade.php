@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($notes as $note)
                <div class="alert alert-success">{{$note->text}}</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
