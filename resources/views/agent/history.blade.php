@push('metas')
  <title>Riwayat Kantong Donasi | Kafa-ka.com</title>
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
        Riwayat Kantong Donasimu
      </div>
    </div>
  </header>

  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">

    <img src="{{ asset('images/illustration/all-data.svg') }}" class="w-[280px] mx-auto" alt="">
    <div class="text-sm text-center font-semibold mb-5">
      Belum ada Riwayat Kantong Donasi yang ditemukan
    </div>

    <div class="px-5 py-3 bg-neutral-100 text-xs font-medium">
      Agustus 2022
    </div>
    <div class="divide-y divide-gray-200 bg-white">
      <div class="my-0 mx-4 py-4 flex flex-col">
        <div class="flex flex-row justify-between text-sm font-medium mb-1">
          <div class="grow truncate">
            Pengisian Kantong Donasimu
          </div>
          <div class="flex-shrink-0 pl-4">
            + Rp 50.000
          </div>
        </div>
        <div class="flex flex-row justify-between text-2xs">
          <div class="text-gray-400">
            26 Agt 2022
          </div>
          <div class="text-blue-500">
            Pending
          </div>
        </div>
      </div>
      <div class="my-0 mx-4 py-4 flex flex-col">
        <div class="flex flex-row justify-between text-sm font-medium mb-1">
          <div class="grow truncate">
            Penarikan Kantong Donasimu
          </div>
          <div class="flex-shrink-0 pl-4">
            - Rp 200.000
          </div>
        </div>
        <div class="flex flex-row justify-between text-2xs">
          <div class="text-gray-400">
            26 Agt 2022
          </div>
          <div class="text-blue-500">
            Pending
          </div>
        </div>
      </div>
      <div class="my-0 mx-4 py-4 flex flex-col">
        <div class="flex flex-row justify-between text-sm font-medium mb-1">
          <div class="grow truncate">
            Donasi - Infaq Yatim: Kebahagiaan untuk 500 anak-anak Yatim
          </div>
          <div class="flex-shrink-0 pl-4">
            - Rp 50.000
          </div>
        </div>
        <div class="flex flex-row justify-between text-2xs">
          <div class="text-gray-400">
            25 Agt 2022
          </div>
          <div class="text-green-500">
            Berhasil
          </div>
        </div>
      </div>
      <div class="my-0 mx-4 py-4 flex flex-col">
        <div class="flex flex-row justify-between text-sm font-medium mb-1">
          <div class="grow truncate">
            Pengisian Kantong Donasimu
          </div>
          <div class="flex-shrink-0 pl-4">
            + Rp 200.000
          </div>
        </div>
        <div class="flex flex-row justify-between text-2xs">
          <div class="text-gray-400">
            25 Agt 2022
          </div>
          <div class="text-green-500">
            Berhasil
          </div>
        </div>
      </div>
      <div class="my-0 mx-4 py-4 flex flex-col">
        <div class="flex flex-row justify-between text-sm font-medium mb-1">
          <div class="grow truncate">
            Pengisian Kantong Donasimu
          </div>
          <div class="flex=shrink-0 pl-4">
            + Rp 125.000
          </div>
        </div>
        <div class="flex flex-row justify-between text-2xs">
          <div class="text-gray-400">
            13 Agt 2022
          </div>
          <div class="text-red-500">
            Dibatalkan
          </div>
        </div>
      </div>
    </div>
    <div class="px-5 py-3 bg-neutral-100 text-xs font-medium">
      Juli 2022
    </div>
    <div class="divide-y divide-gray-200 bg-white">
      <div class="my-0 mx-4 py-4 flex flex-col">
        <div class="flex flex-row justify-between text-sm font-medium mb-1">
          <div class="grow truncate">
            Pengisian Kantong Donasimu
          </div>
          <div class="flex=shrink-0 pl-4">
            + Rp 25.000
          </div>
        </div>
        <div class="flex flex-row justify-between text-2xs">
          <div class="text-gray-400">
            30 Jul 2022
          </div>
          <div class="text-red-500">
            Dibatalkan
          </div>
        </div>
      </div>
      <div class="my-0 mx-4 py-4 flex flex-col">
        <div class="flex flex-row justify-between text-sm font-medium mb-1">
          <div class="grow truncate">
            Pengisian Kantong Donasimu
          </div>
          <div class="flex=shrink-0 pl-4">
            + Rp 50.000
          </div>
        </div>
        <div class="flex flex-row justify-between text-2xs">
          <div class="text-gray-400">
            29 Jul 2022
          </div>
          <div class="text-red-500">
            Dibatalkan
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script>

  </script>
@endpush
