@extends('layout')

@section('content')
  @include('partials._hero')
  @include('partials._search')
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @if (count($listings) < 1)
      <p>There are no listings</p>
    @endif

    @foreach ($listings as $listing)
      <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">
          <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
          <div>
            <h3 class="text-2xl">
              {{-- NAME --}}
              <a href="/listings/{{ $listing->id }} ">{{ $listing->name }} </a>
            </h3>
            {{-- TITLE --}}
            <div class="text-xl font-bold mb-4">{{ $listing->title }}</div>
            {{-- TAGS --}}
            <ul class="flex">
              <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                <a href="#">female</a>
              </li>
              <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                <a href="#">straight</a>
              </li>
            </ul>
            {{-- LOCATION --}}
            <div class="text-lg mt-4"><i class="fa-solid fa-location-dot"></i> {{ $listing->location }}</div>
          </div>
        </div>
      </div>
    @endforeach

  </div>
@endsection
