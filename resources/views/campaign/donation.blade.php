@push('metas')
  <title>Donasi | Kafa-ka.com</title>
@endpush

@extends('layouts.app')

@section('content')
  {{-- header --}}
  <header class="bg-primary fixed left-0 right-0 top-0 bottom-0 z-20 flex h-[60px] w-full">
    <div class="mx-auto my-0 flex w-full max-w-[480px] flex-row items-center justify-start px-4">
      <a href="{{ url()->previous() }}" class="material-icons flex-shrink-0 text-white">
        arrow_back
      </a>
      <div class="font-medium text-lg truncate text-white ml-2">
        Infaq Yatim: Kebahagiaan untuk 500 anak-anak Yatim
      </div>
    </div>
  </header>

  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    {{-- main --}}
    @livewire('campaign.donation', ['slug' => $slug])
  </div>
@endsection
