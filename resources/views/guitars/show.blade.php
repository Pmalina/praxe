@extends('layout')

@section('content')
  <div class="mx-auto max-w-6xl sm:px-6 lg:px-8">

    <div>
      <h3>
        {{ $guitar['name'] }}</a>
      </h3>
      <ul>
        <li>
          Made by: {{ $guitar['brand'] }}
        </li>
      </ul>
    </div>

  </div>
@endsection
