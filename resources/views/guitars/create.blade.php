@extends('layout')

@section('content')
  <div class="mx-auto max-w-6xl sm:px-6 lg:px-8">

    <form class="form border-1 bg-white p-6" method="POST" action="{{ route('guitars.store') }}">
      @csrf
      <div>
        <label class="text-sm" for="guitar-name">Guitar Name</label>
        <input class="border-1 text-lg" id="guitar_name" name="guitar_name" type="text">
      </div>
      <div>
        <label class="text-sm" for="Brand">Brand</label>
        <input class="border-1 text-lg" id="brand" name="brand" type="text">
      </div>
      <div>
        <label class="text-sm" for="year">Year Made</label>
        <input class="border-1 text-lg" id="year" name="year" type="text">
      </div>
      <div>
        <button class="border-1" type="submit">Submit</button>
      </div>

    </form>
  </div>
@endsection
