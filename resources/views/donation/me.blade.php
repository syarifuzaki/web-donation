@push('metas')
  <title>Donasi Saya | Kafa-ka.com</title>
@endpush

@extends('layouts.app')

@section('content')
  {{-- header --}}
  <header class="bg-primary fixed left-0 right-0 top-0 bottom-0 z-20 flex h-[60px] w-full">
    <div class="mx-auto my-0 flex w-full max-w-[480px] flex-row items-center justify-start px-4">
      <a href="{{ url()->previous() }}" class="material-icons flex-shrink-0 text-white">
        arrow_back
      </a>
      <div class="font-medium text-lg text-white ml-2">
        Donasi Saya
      </div>
    </div>
  </header>


  <div class="mt-[60px] h-[calc(100vh-60px) bg-white">
    {{-- main --}}
    <div class="flex flex-col bg-white">
      <div class="px-4 pt-4 pb-3 flex justify-between items-center">
        <div class="font-semibold">
          Riwayat Donasi
        </div>
      </div>
      <div class="flex flex-col">
        <a href="{{ route('my-donation.detail', ['id' => 1]) }}" class="flex flex-row px-4 py-3 bg-white hover:bg-gray-100 duration-300 border-b border-gray-200">
          <img src="https://picsum.photos/400/200" class="h-[70px] w-[70px] object-fit mr-3 rounded" alt="">
          <div class="grow flex flex-row">
            <div class="flex flex-col justify-between h-full">
              <div class="line-clamp-2 overflow-hidden font-medium text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe architecto tempora minus molestias! Consequuntur nemo quaerat soluta doloribus quasi totam?
              </div>
              <div class="text-2xs">
                12 Agt 2022
                <span class="ml-4 font-medium">Rp 30.000</span>
              </div>
            </div>
            <div class="ml-2 text-2xs text-primary border border-primary bg-green-50 px-3 py-1 rounded-md h-fit">Berhasil</div>
            
          </div>
        </a>

        <a href="{{ route('my-donation.detail', ['id' => 2]) }}" class="flex flex-row px-4 py-3 bg-white hover:bg-gray-100 duration-300 border-b border-gray-200">
          <img src="https://picsum.photos/400/200" class="h-[70px] w-[70px] object-fit mr-3 rounded" alt="">
          <div class="grow flex flex-row">
            <div class="flex flex-col justify-between h-full">
              <div class="line-clamp-2 overflow-hidden font-medium text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe architecto tempora minus molestias! Consequuntur nemo quaerat soluta doloribus quasi totam?
              </div>
              <div class="text-2xs">
                12 Agt 2022
                <span class="ml-4 font-medium">Rp 30.000</span>
              </div>
            </div>
            <div class="ml-2 text-2xs text-red-400 border border-red-400 bg-red-50 px-3 py-1 rounded-md h-fit">Dibatalkan</div>
          </div>
        </a>

        <a href="{{ route('my-donation.detail', ['id' => 3]) }}" class="flex flex-row px-4 py-3 bg-white hover:bg-gray-100 duration-300 border-b border-gray-200">
          <img src="https://picsum.photos/400/200" class="h-[70px] w-[70px] object-fit mr-3 rounded" alt="">
          <div class="grow flex flex-row">
            <div class="flex flex-col justify-between h-full">
              <div class="line-clamp-2 overflow-hidden font-medium text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe architecto tempora minus molestias! Consequuntur nemo quaerat soluta doloribus quasi totam?
              </div>
              <div class="text-2xs">
                12 Agt 2022
                <span class="ml-4 font-medium">Rp 30.000</span>
              </div>
            </div>
            <div class="ml-2 text-2xs text-blue-400 border border-blue-400 bg-blue-50 px-3 py-1 rounded-md h-fit">Pending</div>
            
          </div>
        </a>
      </div>
    </div>
    <div class="flex flex-col p-4 py-[13vh] bg-white">
      <img src="{{ asset('images/illustration/people-flying.svg') }}" class="w-[280px] mx-auto" alt="">
      
      <div class="mb-2 text-sm font-medium text-center">
        Siap memulai catatan kebaikanmu?
      </div>

      <a href="{{ route('home') }}" class="font-medium bg-white rounded-md py-3 w-full text-secondary hover:bg-green-100 duration-300 mb-4 text-sm border border-secondary text-center">
        Donasi Sekarang
      </a>

    </div>
    
    @include('layouts.menu')
  </div>
@endsection
