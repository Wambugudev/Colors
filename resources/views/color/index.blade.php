@extends('layouts.app')

@section('content')

<style>
    .color{
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }
</style>
<div class=" justify-content-between pl-3 row" style="margin-top: 200px">
    @foreach ($colors as $color)
    <div class="col-xs-4 col-md-3">
      <h3 class=" pl-4 " style="color:{{$color->hex}} " >{{$color->name}}</h3>
    <div class="color align-content-center" id="color" style="background-color:{{$color->hex}} " ></div>
    <button class="btn my-2 ml-2" onclick="colorChange('{{$color->hex}}')" style="background-color:{{$color->hex}} ">Pick {{$color->name}}</button>
    </div>
    @endforeach
</div>

</div>
@endsection

@section('script')

<script>

    function colorChange(colorName){
        console.log(color)
        document.getElementById("home").style.color = colorName;
        document.getElementById("home2").style.color = colorName;
        document.getElementById("link2").style.color = colorName;
        document.getElementById("link1").style.color = colorName;
    }
</script>
@endsection

