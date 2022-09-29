@extends('layout')

@section('content')
  <div class="mx-auto max-w-6xl sm:px-6 lg:px-8">

    @if (count($guitars) > 0)
      @foreach ($guitars as $guitar)
        <div>
          <h3>
            <a href="{{ route('guitars.show', ['guitar' => $guitar->id]) }}">{{ $guitar->name }}
            </a>
          </h3>
        </div>
      @endforeach
    @else
      <h2>There are no guitars to display</h2>
    @endif
    <div>
      User Input:{{ $userInput }}
    </div>
  </div>
@endsection
