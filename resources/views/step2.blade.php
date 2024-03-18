@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="meal">Please select a Restaurant </label>
                <select class="form-control" id="meal" name="restaurant">
                    @php $uniqueRestaurant= [] @endphp
                    @foreach($datas as $data)
                            @if(!in_array($data['restaurant'], $uniqueRestaurant))
                                <option value="{{ $data['restaurant'] }}">{{ $data['restaurant'] }}</option>
                                @php $uniqueRestaurant[] = $data['restaurant'] @endphp
                            @endif
                    @endforeach
                </select>
            </div>
            <a href="{{route('index')}}" class="btn btn-danger mt-4">Previous</a>
            <button class="btn btn-primary mt-4">Next</button>
            @csrf
        </form>
    </div>
@endsection
