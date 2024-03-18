@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Order success</h1>
        <a href="{{route('index')}}" class="btn btn-primary">Continue order</a>
    </div>
@endsection
