@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="#">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label for="meal">Meal </label>
                        </div>
                        <div class="col-10">
                            <p>{{ $datas['meal'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="meal">No of People </label>
                        </div>
                        <div class="col-10">
                            <p>{{ $datas['number_of_people'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <label for="meal">Restaurant </label>
                        </div>
                        <div class="col-10">
                            <p>{{ $datas['restaurant'] }}</p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-2">
                            <label for="meal">Dishes </label>
                        </div>
                        <div class="col-10">
                            <select class="form-control" id="meal" name="" multiple disabled>
                                @foreach($datas['name'] as $index => $name)
                                    <option value="{{$name}}">{{ $name }} -- {{ $datas['number_of_dish'][$index] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            <a href="{{route('step3')}}" class="btn btn-danger mt-4">Previous</a>
            <a href="{{route('success')}}" class="btn btn-primary mt-4">Submit</a>
        </form>
    </div>
@endsection
