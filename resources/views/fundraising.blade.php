@push('metas')
  <title>Penggalangan Dana | Kafa-ka.com</title>
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
        Penggalanan Dana Saya
      </div>
    </div>
  </header>
  
  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    {{-- main --}}
    <div class="flex flex-col p-4">
      <div class="flex justify-between items-center">
        <div class="font-semibold">
          Buat Galang Dana
        </div>
      </div>
      <img src="{{ asset('images/illustration/charity.svg') }}" class="w-[280px] mx-auto" alt="">

      <a href="{{ route('fundraising.add') }}" class="font-medium bg-white rounded-md py-3 w-full text-secondary hover:bg-green-100 duration-300 text-sm border border-dashed border-secondary text-center flex items-center justify-center">
        Galang Dana Sekarang
        <span class="material-icons md-18 ml-2">
          add
        </span>
      </a>

    </div>
    <div class="h-3 bg-gray-100"></div>

    <div class="flex flex-col bg-white pb-20">
      <div class="p-4 font-semibold">
        Kelola Galang Dana
      </div>
      <div class="w-full flex flex-row overflow-x-auto flex-nowrap space-x-2 px-4 pb-3">
        <button class="flex-shrink-0 rounded-full border border-primary bg-primary text-white font-medium px-3 py-2 focus:outline-none text-sm">
          Semua
        </button>

        <button class="flex-shrink-0 rounded-full border border-gray-300 bg-white text-terniary font-medium px-3 py-2 focus:outline-none text-sm">
          Sedang Berjalan
        </button>

        <button class="flex-shrink-0 rounded-full border border-gray-300 bg-white text-terniary font-medium px-3 py-2 focus:outline-none text-sm">
          Dalam Review
        </button>

        <button class="flex-shrink-0 rounded-full border border-gray-300 bg-white text-terniary font-medium px-3 py-2 focus:outline-none text-sm">
          Selesai         
        </button>

        <button class="flex-shrink-0 rounded-full border border-gray-300 bg-white text-terniary font-medium px-3 py-2 focus:outline-none text-sm">
          Ditolak         
        </button>
      </div>
      <div class="flex flex-col p-4">
        <div class="card w-full p-3 rounded flex flex-col">
          <div class="grid grid-cols-11 gap-3 mb-2">
            <div class="col-span-5 flex h-full w-full rounded bg-gray-100">
              <img src="https://picsum.photos/215/120" class="rounded object-fit" alt="">
            </div>
            <div class="col-span-6 flex flex-col justify-between">
              <div class="line-clamp-3 my-1 overflow-hidden text-xs font-medium">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nisi error facere, minima laborum quas in blanditiis quo neque sunt?
              </div>
              {{-- <div class="w-100 my-1 flex items-center">
                <div class="text-2xs max-w-[110px] truncate">
                  Pondok Pesantren Al-Islam
                </div>
                <span class="material-icons text-primary ml-1 text-xs">
                  verified
                </span>
              </div> --}}
              <button class="bg-gray-100 text-gray-400 px-5 py-1.5 font-medium w-fit text-sm rounded">
                Dalam Review
              </button>
            </div>
          </div>
          <div class="mb-2 text-xs">
            Perubahan Terakhir <span class="font-semibold">12 Agt 2022 14.09</span>
          </div>


          <div class="bg-terniary my-1 h-1 w-full rounded-full">
            <div class="bg-secondary h-1 rounded-full" style="width: 66%"></div>
          </div>
          
          <div class="mt-2 flex flex-row flex-nowrap">
            <button class="grow text-sm font-semibold text-center border border-secondary rounded text-secondary hover:bg-secondary hover:text-white duration-300"> 
              Lanjutkan
            </button>
            <button class="ml-2 material-icons md-24 text-terniary border rounded p-2 hover:bg-gray-100 duration-300">
              delete_forever
            </button>
          </div>
        </div>
        <img src="{{ asset('images/illustration/search.svg') }}" class="w-[280px] mx-auto" alt="">
        <div class="text-sm text-center font-semibold">
          Tidak ada Galang Dana yang ditemukan
        </div>
      </div>
    </div> 
    
    @include('layouts.menu')
  </div>
@endsection
