@extends('layouts.app')

@section('content')
<div class="container">
        <form action="{{ route('store') }}" method="POST">
            <div class="form-group">
                <label for="meal">Please select a meal </label>
                <select class="form-control" id="meal" name="meal">
                    @php $uniqueMeals = [] @endphp
                    @foreach($datas as $data)
                        @foreach($data['availableMeals'] as $meal)
                            @if(!in_array($meal, $uniqueMeals))
                                <option value="{{ $meal }}">{{ $meal }}</option>
                                @php $uniqueMeals[] = $meal @endphp
                            @endif
                        @endforeach
                    @endforeach
                </select>
            </div>

            <div class="form-group mt-4">
                <label for="number_of_people">Số lượng người:</label>
                <input type="number" min="1" max="" class="form-control" id="number_of_people" name="number_of_people"
                       value="1">
            </div>


            <button class="btn btn-primary mt-4">Tiếp theo</button>
            @csrf
        </form>
</div>
@endsection
