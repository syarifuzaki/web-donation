@push('metas')
  <title>Penarikan Saldo | Kafa-ka.com</title>
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
        Penarikan Kantong Donasimu
      </div>
    </div>
  </header>

  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    <div class="flex w-full flex-col bg-white p-4">
      <div class="mb-3 text-left text-base font-medium">
        Nominal Penarikan
      </div>
      <div class="flex flex-col w-full p-4 rounded-md shadow-md duration-300 border border-neutral-200">
        <div class="flex flex-row items-center justify-center w-full mb-2">
          <div class="text-xl font-semibold flex-shrink-0 pl-4 py-3 bg-neutral-100 rounded-l-md">
            Rp
          </div>
          <input type="text" wire:model="amount" class="grow w-full text-right p-3 font-semibold text-2xl bg-neutral-100 rounded-r-md focus:outline-none" placeholder="0" type-currency="IDR">
        </div>
        <div class="w-full flex flex-row justify-between">
          <div class="text-sm">
            Kantong Donasimu
          </div>
          <div class="text-primary text-sm font-semibold">
            500.000
          </div>
        </div>
      </div>
    </div>
    <div class="h-3 bg-gray-100"></div>
    <div class="w-full flex flex-col bg-white p-4">
      <div class="mb-3 text-left text-base font-medium">
        Transfer ke Rekening 
      </div>
      <p class="mb-2 text-sm font-medium">
        Bank Tujuan
      </p>
      <input type="text" placeholder="Masukkan bank tujuan"
        class="relative mb-4 w-full rounded border bg-white px-3 py-2 text-sm placeholder-slate-300 shadow outline-none focus:outline-none focus:ring" />
      <p class="mb-2 text-sm font-medium">
        Nomor Rekening
      </p>
      <input type="text" placeholder="Masukkan nomor rekening"
        class="relative mb-4 w-full rounded border bg-white px-3 py-2 text-sm placeholder-slate-300 shadow outline-none focus:outline-none focus:ring" />
      
      <button class="mt-2 font-semibold bg-white rounded-md py-2.5 w-full text-primary hover:bg-green-100 duration-300 mb-4 text-sm border border-primary text-center">
        Periksa
      </button>
    </div>
    <div class="h-3 bg-gray-100"></div>
    <div class="w-full flex flex-col bg-white p-4 pb-20">
      <div class="mb-3 text-left text-base font-medium">
        Keterangan penarikan Kantong Donasimu
      </div>
      <ol class="list-decimal list-outside pl-4">
        <li class="text-sm mb-1">
          Penarikan Kantong Donasimu akan diproses maksimal 2x24 jam di hari kerja.
        </li>
        <li class="text-sm mb-1">
          Minimal penarikan <span class="font-semibold">Rp 100.000</span>.
        </li>
        <li class="text-sm mb-1">
          Pengembalian Kantong Donasimu dikenakan <span class="font-semibold">biaya admin bank</span>.
        </li>
        <li class="text-sm mb-1">
          Maksimal penarikan Kantong Donasimu <span class="font-semibold">Rp 2.000.000</span> dalam 1 kali transaksi.
        </li>
        <li class="text-sm mb-1">
          Jika request refund kamu melebihi <span class="font-semibold">Rp 2.000.000</span>, kamu dapat menghubungi Help Center
        </li>
      </ol>
    </div>

    <div class="fixed bottom-0 z-20 w-full max-w-screen-sm bg-white p-4 duration-500">
      <button 
        type="button"
        class="w-full rounded-md py-2 text-center text-sm font-semibold duration-300 shadow-md focus:outline-none bg-rose-500 hover:bg-rose-600 text-white"
      >
        Tarik Kantong Donasimu
      </button>
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
