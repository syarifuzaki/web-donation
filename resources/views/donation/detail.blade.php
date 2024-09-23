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
        Detail Donasi
      </div>
    </div>
  </header>


  <div class="mt-[60px] h-[calc(100vh-60px)]">
    {{-- main --}}
    <div class="flex flex-col p-4 bg-white">
      {{-- <div class="text-center mt-4 mb-3 font-semibold text-xl">
        Terima Kasih!
      </div>
      <div class="text-center text-sm">
        Donasimu telah kami terima dan akan kami salurkan
      </div>

      <div class="text-center mt-4 mb-3 font-semibold text-xl">
        Donasi Dibatalkan!
      </div>
      <div class="text-center text-sm">
        Batas waktu pembayaran telah berakhir atau pembayaran gagal tercatat di sistem
      </div> --}}

      <div class="text-center mt-4 mb-3 font-semibold text-xl">
        Menunggu Pembayaran
      </div>
      <div class="text-center text-sm">
        Segera lakukan transfer sebelum
      </div>
      <div class="text-center text-sm font-semibold">
        26 Agt 2022 12:00 WIB
      </div>
      <a href="{{ route('my-donation.instruction', ['id' => 1]) }}" class="mt-2 bg-secondary hover:bg-emerald-600 duration-300 text-white rounded px-3 py-1 text-sm w-fit mx-auto font-semibold flex justify-center items-center">
        Lihat Instruksi Pembayaran
        <span class="material-icons ml-2">
          chevron_right
        </span>
      </a>

      <div class="my-5 rounded border border-gray-300 p-4">
        <div class="grid grid-cols-4 mb-3">
          <div class="col-span-2 text-sm">
            Tanggal
          </div>
          <div class="col-span-2 text-sm font-medium">
            12 Agt 2022 10:12 WIB
          </div>
        </div>
        <div class="grid grid-cols-4 mb-3">
          <div class="col-span-2 text-sm">
            Metode Pembayaran
          </div>
          <div class="col-span-2 text-sm font-medium">
            GO-PAY
          </div>
        </div>
        <div class="grid grid-cols-4 mb-3">
          <div class="col-span-2 text-sm">
            ID Donasi
          </div>
          <div class="col-span-2 text-sm font-medium">
            #85808698
          </div>
        </div>
        <div class="grid grid-cols-4">
          <div class="col-span-2 text-sm">
            Status
          </div>
          <div class="col-span-2">
            <div class="text-xs text-primary border border-primary px-3 py-0.5 rounded-md h-fit w-fit">Berhasil</div>
          </div>
        </div>
      </div>
      
      <div class="grid grid-cols-11 gap-3 py-2 md:gap-4">
        <div class="col-span-5 flex h-full w-full rounded bg-gray-100">
          <img src="https://picsum.photos/215/120" class="rounded object-fit" alt="">
        </div>
        <div class="col-span-6 flex flex-col justify-between">
          <div class="line-clamp-2 my-1 overflow-hidden text-xs font-medium">
            Infaq Yatim: Kebahagiaan untuk 500 anak-anak Yatim
          </div>
          <div class="w-100 my-1 flex items-center">
            <div class="text-2xs max-w-[110px] truncate">
              Pondok Pesantren Al-Islam
            </div>
            <span class="material-icons text-primary ml-1 text-xs">
              verified
            </span>
          </div>
          <button class="bg-rose-500 hover:bg-rose-600 duration-300 text-white px-5 py-1.5 font-medium w-fit text-sm rounded">
            Donasi Lagi
          </button>
        </div>
      </div>
      
    </div>

    <div class="h-3 bg-gray-100"></div>
    
    <div class="bg-white flex flex-col w-full p-4">
      <div class="flex flex-row justify-between">
        <div class="text-sm">
          Detail Pembayaran
        </div>
        <div class="text-sm font-semibold">
          Rp 30.000
        </div>
      </div>
    </div>

    <div class="h-3 bg-gray-100"></div>

    <div class="bg-white flex flex-row items-center w-full p-2">
      <span class="material-icons md-24 z-10 p-2 text-primary mr-3">
        contact_support
      </span>
      <div class="grow flex flex-row justify-between items-center">
        <div class="text-sm font-semibold text-gray-500">
          Butuh Bantuan?
        </div>
        <span class="material-icons text-gray-500">
          arrow_forward_ios
        </span>
      </div>
    </div>

    {{-- @include('layouts.menu') --}}
  </div>
@endsection
