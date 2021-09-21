@extends('layouts.app')

@section('content')


    <div class="card">
        <div class="card-header">
            All colors
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Color</th>
                        <th>HEX Digits</th>
                        <th>Color Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($colors as $color)
                    <tr>
                        <td>
                            {{$color->id}}
                        </td>
                    <td scope="row">
                        <div class="color" id="color" style="background-color:{{$color->hex}} " ></div>
                    </td>
                        <td>{{$color->hex}}</td>
                        <td>{{$color->name}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
