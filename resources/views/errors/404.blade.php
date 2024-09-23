@push('style')
  <style>
  </style>
@endpush

@push('metas')
  <title>Page Not Found | Kafa-ka.com</title>
@endpush

@extends('layouts.app')

@section('content')
  {{-- header --}}
  <header class="bg-primary fixed left-0 right-0 top-0 bottom-0 z-20 flex h-[60px] w-full">
    <div class="mx-auto my-0 flex w-full max-w-[480px] flex-row items-center justify-between px-4">
      <a href="" class="mr-4">
        <div class="h-[35px] w-[35px] rounded-full flex justify-center items-center bg-white text-primary font-semibold text-xl">
          K
        </div>
      </a>
      <div class="flex grow items-center">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
          <input type="text" id="simple-search"
            class="block h-[33px] w-full rounded-full bg-white/30 p-2.5 pr-10 text-xs text-white placeholder:text-white focus:ring-blue-500"
            placeholder='Coba cari "Tolong menolong"' required>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
            <svg aria-hidden="true" class="h-5 w-5 text-white dark:text-white" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    {{-- main --}}

    <div class="flex flex-col px-5">
      <img src="{{ asset('images/illustration/404.svg') }}" class="w-[300px] mx-auto" alt="">

      <div class="mb-1 text-base font-semibold text-center">
        Maaf, halaman tidak ditemukan
      </div>

      <div class="mb-8 text-sm text-center">
        Halaman yang kamu cari tidak ada di sistem kami atau sedang mengalami gangguan
      </div>

      <a href="{{ route('home') }}" class="font-medium bg-primary rounded-md py-3 w-full text-white hover:bg-secondary duration-300 mb-4 text-sm text-center">
        Kembali ke halaman utama
      </a>
    </div>
  </div>
@endsection
