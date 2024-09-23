@push('metas')
  <title>Donasi | Kafa-ka.com</title>
@endpush

@extends('layouts.app')

@section('content')
  {{-- header --}}
  <header id="header"
    class="fixed left-0 right-0 top-0 bottom-0 z-20 flex h-[60px] w-full bg-white shadow duration-500">
    <div class="mx-auto my-0 flex w-full max-w-[480px] flex-row self-center items-center justify-start px-5">
      <a href="{{ route('home') }}" class="material-icons flex-shrink-0">
        arrow_back
      </a>
      <div class="ml-2 truncate text-lg font-medium">
        Pilih Metode Pembayaran
      </div>
    </div>
  </header>


  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    <div class="px-5 py-3 bg-neutral-100 text-sm font-medium">
      Pembayaran dengan Saldo Agen
    </div>
    <div class="divide-y divide-gray-200 bg-green-50">
      <a href="{{ route('campaign.confirm', ['slug' => $slug]) }}" class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center flex justify-between">
          <div class="flex flex-col">
            <div class="text-sm">
              Kantong Donasi
            </div>
            <div class="text-xs text-secondary font-semibold">
              (Rp 25.000) Saldo saat ini Rp 50.000
            </div>
          </div>
          <span class="material-icons text-secondary">
            check_circle
          </span>
        </div>
      </a>
    </div>
    <div class="divide-y divide-gray-200 bg-red-50">
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center flex justify-between">
          <div class="flex flex-col">
            <div class="text-sm">
              Kantong Donasi
            </div>
            <div class="text-xs text-red-500 font-semibold">
              (Rp 254.000) Saldo saat ini Rp 150.000
            </div>
          </div>
          <button class="text-xs bg-blue-500 hover:bg-blue-600 duration-300 text-white px-3 py-1 rounded font-medium">
            Isi Saldo
          </button>
        </div>
      </div>
    </div>
    <div class="px-5 py-3 bg-neutral-100 text-sm font-medium">
      Pembayaran Instan (Verifikasi otomatis, minimal nominal Rp 10.000)
    </div>
    <div class="divide-y divide-gray-200 bg-white">
      <a href="{{ route('campaign.confirm', ['slug' => $slug]) }}" class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/gopay.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          GO-PAY
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </a>
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          ShopeePay
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          OVO
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          Dana
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          LinkAja
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
    </div>
    <div class="px-5 py-3 bg-neutral-100 text-sm font-medium">
      Virtual account (verifikasi otomatis, minimal nominal Rp. 10,000)
    </div>
    <div class="divide-y divide-gray-200 bg-white">
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/gopay.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          BRI Virtual Account
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          BCA Virtual Account
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          Mandiri Virtual Account
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          BNI Virtual Account
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
    </div>
    <div class="px-5 py-3 bg-neutral-100 text-sm font-medium">
      Transfer bank (verifikasi manual 1x24 jam, minimal nominal Rp. 10,000)
    </div>
    <div class="divide-y divide-gray-200 bg-white pb-3">
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/gopay.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          Transfer BRI
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          Transfer BCA
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
      <div class="my-0 mx-6 py-4 grid grid-cols-5 gap-4 cursor-pointer">
        <div class="col-span-1 self-center">
          <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
        </div>
        <div class="col-span-4 self-center items-center text-sm flex justify-between">
          Transfer Mandiri
          <span class="material-icons">
            chevron_right
          </span>
        </div>
      </div>
    </div>


  </div>
@endsection

@push('script')
  <script>

  </script>
@endpush
