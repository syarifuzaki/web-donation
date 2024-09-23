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
      <a href="{{ route('agent.front') }}" class="text-sm bg-white text-center font-medium rounded-full py-2 px-4 mx-auto">
        Daftar Agen
      </a>
    </div>
  </header>


  <div class="mt-[60px] h-[calc(100vh-60px)] flex flex-col justify-start bg-white">
    {{-- main --}}
    <div class="w-full pt-0 pb-10 bg-primary text-center rounded-b-3xl shadow-xl">
      <div class="text-white text-2xl font-semibold">
        {{-- Agen --}}
        Kantong Donasimu
      </div>
      <div class="mt-14 mb-2 text-gray-200 text-sm">
        Saldo saat ini
      </div>
      <div class="mb-14 text-white text-4xl font-semibold">
        Rp 540.000
      </div>
      <div class="w-5/6 grid grid-cols-2 gap-5 mx-auto">
        <a href="{{ route('agent.topup') }}" class="rounded-full p-3 bg-white text-primary font-medium text-center text-base flex items-center justify-center hover:bg-emerald-50 duration-300 shadow-lg">
          Topup
          <span class="material-icons text-xl ml-2">
            payments
          </span>
        </a>
        <a href="{{ route('agent.withdrawal') }}" class="rounded-full p-3 bg-white text-primary font-medium text-center text-base flex items-center justify-center hover:bg-emerald-50 duration-300 shadow-lg">
          Tarik Dana
          <span class="material-icons text-xl ml-2">
            currency_exchange
          </span>
        </a>
      </div>
      {{-- <img src="{{ asset('images/illustration/team-spirit.svg') }}" class="w-[280px] mx-auto" alt=""> --}}
    </div>
    
    <div class="px-4 pb-3 pt-6">
      <div class="flex items-center justify-between">
        <div class="flex items-center font-medium text-base">
          <span class="material-icons mr-1">
            history_edu
          </span>
          Riwayat Kantong Donasi
        </div>
        <a href="{{ route('agent.history') }}" class="text-xs font-medium text-blue-500 hover:text-blue-600 duration-300">
          Lihat semua
        </a>
      </div>
    </div>
    <div class="pb-16">
      <div class="text-sm text-center font-semibold mt-2 mb-5">
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
      </div>
    </div>
    {{-- <div class="grid grid-cols-2 gap-4 px-4 py-8 pb-20">
      <a
        href="{{ route('agent.topup') }}" 
        class="col-span-1 bg-white hover:bg-green-50 w-full rounded-md border flex flex-col items-center justify-center p-4 card hover:shadow-md duration-300"
      >
        <span class="material-icons text-3xl text-primary mb-1">
          payments
        </span>
        <div class="text-sm text-center font-medium">
          Topup Saldo
        </div>
      </a>

      <a
        href="{{ route('agent.withdrawal') }}"
        class="col-span-1 bg-white hover:bg-green-50 w-full rounded-md border flex flex-col items-center justify-center p-4 card hover:shadow-md duration-300"
      >
        <span class="material-icons text-3xl text-primary mb-1">
          currency_exchange
        </span>
        <div class="text-sm text-center font-medium">
          Tarik Dana
        </div>
      </a>

      <a 
        href="{{ route('fundraising.add') }}" 
        class="col-span-1 bg-white hover:bg-green-50 w-full rounded-md border flex flex-col items-center justify-center p-4 card hover:shadow-md duration-300"
      >
        <span class="material-icons text-3xl text-primary mb-1">
          archive
        </span>
        <div class="text-sm text-center font-medium">
          Galang Dana
        </div>
      </a>

      <a
        href="{{ route('agent.history') }}" 
        class="col-span-1 bg-white hover:bg-green-50 w-full rounded-md border flex flex-col items-center justify-center p-4 card hover:shadow-md duration-300"
      >
        <span class="material-icons text-3xl text-primary mb-1">
          history_edu
        </span>
        <div class="text-sm text-center font-medium">
          Riwayat Saldo
        </div>
      </a>
      
      <a
        href="{{ route('agent.register') }}" 
        class="col-span-1 bg-white hover:bg-green-50 w-full rounded-md border flex flex-col items-center justify-center p-4 card hover:shadow-md duration-300"
      >
        <span class="material-icons text-3xl text-primary mb-1">
          assignment_add
        </span>
        <div class="text-sm text-center font-medium">
          Daftar
        </div>
      </a>
    </div> --}}
    
    @include('layouts.menu')
  </div>
@endsection
