@extends('layout.main')

@section('content')

<div class="container">

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Operator</th>
            <th scope="col">FROM</th>
            <th scope="col">TO</th>
            <th scope="col">Departure</th>
            <th scope="col">Arrival</th>
            <th scope="col">Train Number</th>
            <th scope="col">Carriage</th>
            <th scope="col">On Time</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{$train->operator}}</td>
                <td>{{$train->arriving_from}}</td>
                <td>{{$train->destination}}</td>
                <td>{{$train->departure}}</td>
                <td>{{$train->arrival}}</td>
                <td>{{$train->train_number}}</td>
                <td>{{$train->car_number}}</td>
                @if ($train->on_time)
                <td>&check;</td>
                @else <td>Delayed</td>
                @endif
                @if ($train->is_cancelled)
                <td>Cancelled</td>
                @else <td>On Schedule</td>
                @endif
            </tr>

            @endforeach
        </tbody>
      </table>

</div>

@endsection
