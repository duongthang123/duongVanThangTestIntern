@extends('layouts.app')

@section('content')
    <div class="container">
        <form id="order-form" action="{{ route('store3') }}" method="POST">
            <div class="form-group">
                <div class="row">
                    <h4 class="mt-4">Click "add" for order dish</h4>
                    <div class="col-6">
                        <label for="meal">Please select a Dish </label>
                        <select class="form-control" id="name" disabled>
                                <option>---</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="meal">Please enter no of servings </label>
                        <input class="form-control" type="number" id="number_of_dish"
                               value="0" min="1" disabled/>
                    </div>
                </div>

                <div class="row">
                    <div id="selected-products" class="mt-4">
                        <p>List Orders</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-1">
                        <button class="btn btn-dark mt-4" id="add-btn" type="button">
                            Add
                        </button>
                    </div>
                </div>
            </div>
            <a href="{{ route('step2') }}" class="btn btn-danger mt-4">Previous</a>
            <button type="submit" class="btn btn-primary mt-4">Next</button>
            @csrf
        </form>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            var index = 0;
            $("#add-btn").click(function(){
                index++;
                var nameSelect = '<select class="form-control name" name="name[' + index + ']">@foreach($datas as $data)<option value="{{ $data['name'] }}">{{ $data['name'] }}</option>@endforeach</select>';
                var numberOfDishInput = '<input class="form-control number_of_dish" type="number" name="number_of_dish[' + index + ']" value="1" min="1">';
                var productItem = '<div class="row">' +
                    '<div class="col-6">' +
                    '<p>' + nameSelect + '</p>' +
                    '</div>' +
                    '<div class="col-6">' +
                    '<p>' + numberOfDishInput + '</p>' +
                    '</div>' +
                    '</div>';

                $("#selected-products").append(productItem);
            });
        });
    </script>
@endsection
