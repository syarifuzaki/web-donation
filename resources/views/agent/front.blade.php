@push('metas')
  <title>Agen | Kafa-ka.com</title>
@endpush

@extends('layouts.app')

@section('content')
  {{-- header --}}
  <header class="bg-primary fixed left-0 right-0 top-0 bottom-0 z-20 flex h-[60px] w-full">
    <div class="mx-auto my-0 flex w-full max-w-[480px] flex-row items-center justify-start px-4">
      {{-- <a href="{{ url()->previous() }}" class="material-icons flex-shrink-0 text-white">
        arrow_back
      </a>
      <div class="font-medium text-lg text-white ml-2">
        Agen
      </div> --}}
      <a href="{{ route('agent.menu') }}" class="text-sm bg-white text-center font-medium rounded-full py-2 px-4 mx-auto">
        Sudah Daftar
      </a>
    </div>
  </header>


  <div class="mt-[60px] h-[calc(100vh-123px)] py-5 flex flex-col justify-evenly items-center bg-primary">
    {{-- main --}}
    <div class="w-full text-center">
      <div class="text-white text-2xl font-semibold">
        {{-- Agen --}}
        Gabung Menjadi <br>Agen Kafa-Ka
      </div>
    </div>
    <div class="w-full text-center">
      <img src="{{ asset('images/illustration/team-spirit.svg') }}" class="w-[280px] mx-auto" alt="">
      <div class="text-white text-sm px-8 mb-6">
        <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Minus excepturi quas voluptas corrupti quam dolore corporis dolorum dolor, molestiae voluptatem. Quam natus voluptatem distinctio tempora expedita eum consectetur iure accusamus?
      </div>
    </div>
    <a href="{{ route('agent.register') }}" class="px-6 py-2 text-base bg-white text-primary hover:bg-emerald-50 duration-300 font-medium rounded shadow-lg">
      Daftar sebagai Agen
    </a>

    @include('layouts.menu')
  </div>
@endsection
