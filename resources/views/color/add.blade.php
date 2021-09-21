@extends('layouts.app')

@section('content')
  <div class="card my-5">
      <div class="card-header">
          Add a color
      </div>
      <div class="card-body">

        @if ($errors->any())

        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
        <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach

            </ul>
        </div>
    @endif

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            @if (session()->has('error'))
            <div class="alert  alert-danger">
                {{session()->get('error')}}
            </div>
            @endif



          <form action="{{route('colors.store')}}" method="post">
              @csrf
              <div class="form-group">
                  <label for="name">Color Name</label>
                  <input type="text" name="name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="hex">Color Hex number</label>
                <input type="text" name="hex" id="hex" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create color</button>
            </div>
          </form>
      </div>
  </div>
@endsection
