@push('metas')
  <title>Topup Saldo | Kafa-ka.com</title>
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
        Isi Kantong Donasimu
      </div>
    </div>
  </header>

  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    <div class="flex w-full flex-col bg-white p-4">
      <div class="mb-3 text-left text-base font-medium">
        Nominal Kantong Donasimu
      </div>
      <div class="flex flex-row items-center justify-center w-full mb-2">
        <div class="text-xl font-semibold flex-shrink-0 pl-4 py-3 bg-neutral-100 rounded-l-md">
          Rp
        </div>
        <input type="text" class="grow w-full text-right p-3 font-semibold text-2xl bg-neutral-100 rounded-r-md focus:outline-none" placeholder="0" type-currency="IDR">
      </div>
      <div class="text-xs text-neutral-400 pl-2">
        Minimal nominal Rp 10.000
      </div>
      <div class="mt-3 grid grid-cols-3 gap-4">
        <button class="col-span-1 rounded border border-green-500 text-green-500 hover:border-green-500 hover:text-green-500 duration-300 flex items-center justify-center p-3 text-sm">
          Rp 50.000
        </button>
        <button class="col-span-1 rounded border border-neutral-300 text-neutral-600 hover:border-green-500 hover:text-green-500 duration-300 flex items-center justify-center p-3 text-sm">
          Rp 100.000
        </button>
        <button class="col-span-1 rounded border border-neutral-300 text-neutral-600 hover:border-green-500 hover:text-green-500 duration-300 flex items-center justify-center p-3 text-sm">
          Rp 150.000
        </button>
        <button class="col-span-1 rounded border border-neutral-300 text-neutral-600 hover:border-green-500 hover:text-green-500 duration-300 flex items-center justify-center p-3 text-sm">
          Rp 250.000
        </button>
        <button class="col-span-1 rounded border border-neutral-300 text-neutral-600 hover:border-green-500 hover:text-green-500 duration-300 flex items-center justify-center p-3 text-sm">
          Rp 500.000
        </button>
        <button class="col-span-1 rounded border border-neutral-300 text-neutral-600 hover:border-green-500 hover:text-green-500 duration-300 flex items-center justify-center p-3 text-sm">
          Rp 1.000.000
        </button>
      </div>
    </div>
    <div class="h-3 bg-gray-100"></div>
    <div class="flex w-full flex-col bg-white p-4">
      <div class="text-left text-base font-medium">
        Pilih Metode Pembayaran
      </div>
    </div>
    <div class="pb-20">
      <div class="px-5 py-3 bg-neutral-100 text-sm font-medium">
        Pembayaran Instan (Verifikasi otomatis, minimal nominal Rp 10.000)
      </div>
      <div class="divide-y divide-gray-200 bg-white">
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
    </div>


    <div class="fixed bottom-0 z-20 w-full max-w-screen-sm bg-white p-4 duration-500">
      <a
        href="{{ route('agent.topup-instruction', ['id' => 1]) }}" 
        type="button"
        class="w-full rounded-md py-2 text-center text-sm font-semibold duration-300 swzhadow-md focus:outline-none bg-rose-500 hover:bg-rose-600 text-white"
      >
        Isi Kantong Donasimu
      </a>
    </div>

  </div>
@endsection

@push('script')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
        element.addEventListener('keyup', function(e) {
        let cursorPostion = this.selectionStart;
          let value = parseInt(this.value.replace(/[^,\d]/g, ''));
          let originalLenght = this.value.length;
          if (isNaN(value)) {
            this.value = "";
          } else {    
            this.value = value.toLocaleString('id-ID', {
              currency: 'IDR',
              minimumFractionDigits: 0
            });
            cursorPostion = this.value.length - originalLenght + cursorPostion;
            this.setSelectionRange(cursorPostion, cursorPostion);
          }
        });
      });
    });
  </script>
@endpush
