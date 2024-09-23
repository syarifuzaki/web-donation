@push('metas')
  <title>Instruksi Pembayaran | Kafa-ka.com</title>
@endpush

@extends('layouts.app')

@section('content')
  {{-- header --}}
  <header id="header" class="fixed left-0 right-0 top-0 bottom-0 z-20 flex h-[60px] w-full bg-white shadow duration-500">
    <div class="mx-auto my-0 flex w-full max-w-[480px] flex-row items-center justify-start self-center px-5">
      <a href="{{ route('home') }}" class="material-icons flex-shrink-0">
        arrow_back
      </a>
      <div class="ml-2 truncate text-lg font-medium">
        Instruksi Pembayaran
      </div>
    </div>
  </header>


  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    <div class="p-4">
      <div class="text-center mt-4 mb-3 font-semibold text-xl">
        Konfirmasi Pembayaran
      </div>
      <div class="text-center text-sm mb-4">
        Transfer sesuai nominal di bawah ini:
      </div>
      <div class="text-center font-semibold mb-4 text-3xl">
        Rp 52.500
      </div>
      <div class="p-3 bg-gray-100 mb-5">
        <div class="grid grid-cols-12 mb-2">
          <span class="col-span-9 text-sm">
            Jumlah Isi Kantong Donasimu
          </span>
          <span class="col-span-3 text-sm text-right"> 
            Rp 50.000
          </span>
        </div>
        <div class="grid grid-cols-12 mb-2">
          <span class="col-span-9 text-sm">
            Biaya Admin
          </span>
          <span class="col-span-3 text-sm text-right"> 
            Rp 2.500
          </span>
        </div>
        <div class="border-t border-gray-300 w-full"></div>
        <div class="flex flex-row justify-between mt-2 font-semibold">
          <span>Total</span>
          <span>Rp 52.500</span>
        </div>
      </div>
      <div class="mb-3 text-center">Ke Rekening <span class="font-semibold">BCA Virtual Account</span></div>
      <div class="bg-gray-100 flex justify-between rounded p-4">
        <div class="">
          <img src="{{ url('images/icon/gopay.png') }}" class="h-10 w-auto mb-1" alt="">
          {{-- <p class="text-sm">Yayasan Kafa-Ka</p> --}}
          <p class="text-xl font-semibold">0385 0100 0265 303</p>
        </div>
        <div class="self-center">
          <button onclick="clipboard('038501000265303')" class="border-primary bg-white hover:bg-emerald-600 text-primary hover:text-white duration-300 rounded-full border py-1 px-4 text-sm font-semibold flex items-center">
            Salin
            <span class="material-icons text-base ml-1">
              content_copy
            </span>
          </button>
        </div>
      </div>
    </div>
    <div class="h-3 bg-gray-100"></div>
    <div class="flex flex-col w-full p-4 bg-white">
      <p class="text-sm font-semibold mb-2">Panduan Pembayaran</p>
      <div class="w-full flex flex-col">
        <button onclick="expand(1)" class="w-full border-b border-gray-300 px-2 py-3 flex flex-row items-center justify-between font-medium">
          BCA Mobile Banking (m-BCA)
          <span id="icon-1" class="material-icons text-base duration-300">
            expand_more
          </span>
        </button>
        <div id="method-1" class="p-2 hidden duration-300">
          <ol class="list-decimal list-outside pl-6">
            <li class="text-sm mb-1">
              Masuk ke aplikasi mobile banking BCA, pilih m-Banking dan input PIN kamu.
            </li>
            <li class="text-sm mb-1">
              Pilih menu m-Transfer lalu pilih menu BCA Virtual Account.
            </li>
            <li class="text-sm mb-1">
              Klik Input No. Virtual Account dan masukan nomor Virtual Account Kafa-Ka
            </li>
            <li class="text-sm mb-1">
              Cek nama dan nominal pembayaran telah sesuai klik OK.
            </li>
            <li class="text-sm mb-1">
              Masukan PIN m-BCA kamu dan klik OK.
            </li>
            <li class="text-sm mb-1">
              Transaksi donasi kamu selesai, mohon simpan nomor invoice sebagai bukti pembayaran.
            </li>
          </ol>
        </div>
        
        <button onclick="expand(2)" class="w-full border-b border-gray-300 px-2 py-3 flex flex-row items-center justify-between font-medium">
          BCA Internet Banking (KlikBCA)
          <span id="icon-2" class="material-icons text-base duration-300">
            expand_more
          </span>
        </button>
        <div id="method-2" class="p-2 hidden duration-300">
          <ol class="list-decimal list-outside pl-6">
            <li class="text-sm mb-1">
              Masuk ke halaman website KlikBCA (https://klikbca.com) dan pilih menu "login Individual".
            </li>
            <li class="text-sm mb-1">
              Masuk ke akun KlikBCA kamu dengan mengisi User ID dan PIN Internet Banking kamu.
            </li>
            <li class="text-sm mb-1">
              Pilih menu "Transfer ke BCA Virtual Account".
            </li>
            <li class="text-sm mb-1">
              Masukkan nomor Virtual Account Kafa-Ka yang tertera lalu pilih "Lanjutkan".
            </li>
            <li class="text-sm mb-1">
              Cek nama dan nominal pembayaran, apabila telah sesuai pilih "Lanjutkan".
            </li>
            <li class="text-sm mb-1">
              Masukkan respon KeyBCAAPPLI 1 yang munculpada Token BCAlalupilih "Kirim".
            </li>
            <li class="text-sm mb-1">
              Transaksi selesai, mohon simpan nomor invoice sebagai bukti pembayaran.
            </li>
          </ol>
        </div>

        <button onclick="expand(3)" class="w-full border-b border-gray-300 px-2 py-3 flex flex-row items-center justify-between font-medium">
          ATM BCA
          <span id="icon-3" class="material-icons text-base duration-300">
            expand_more
          </span>
        </button>
        <div id="method-3" class="p-2 hidden duration-300">
          <ol class="list-decimal list-outside pl-6">
            <li class="text-sm mb-1">
              Masukkan kartu ATM BCA dan PIN ATM BCA kamu.
            </li>
            <li class="text-sm mb-1">
              Pilih menu "Transaksi Lainnya" lalu.
            </li>
            <li class="text-sm mb-1">
              Pilih menu "Transfer" lalu pilih "Ke Rek. BCA Virtual Account".
            </li>
            <li class="text-sm mb-1">
              Klik Input No Virtual Account dan masukkan nomor Virtual Account Kitabisa lalu klik "OK".
            </li>
            <li class="text-sm mb-1">
              Cek nama dan nominal pembayaran, apabila telah sesuai pilih "Benar".
            </li>
            <li class="text-sm mb-1">
              Cek dan perhatikan konfirmasi pembayaran dari layar ATM, jika sudah benar pilih "Ya", atau pilih "Tidak" jika data di layar masih salah.
            </li>
            <li class="text-sm mb-1">
              Transaksi selesai, pilih "Tidak" untuk tidak melanjutkan transaksi lain.
            </li>
            <li class="text-sm mb-1">
              Terakhir jangan lupa ambil Kartu ATM BCA kamu.
            </li>
          </ol>
        </div>
        
        <button class="mt-7 font-medium bg-white rounded-md py-3 w-full text-red-500 hover:bg-red-100 duration-300 mb-4 text-sm border border-red-500 text-center">
          Batalkan Isi Kantong Donasimu
        </button>
      </div>
    </div>

  </div>
@endsection

@push('script')
  <script>
    function expand(id) {
      var method = document.getElementById('method-' + id);
      var icon = document.getElementById('icon-' + id);

      if (method.classList.contains('hidden')) {
        method.classList.remove('hidden');
        method.classList.add('block');
        icon.classList.add('rotate-180')
      } else {
        method.classList.remove('block');
        method.classList.add('hidden');
        icon.classList.remove('rotate-180');
      }
    }

    function clipboard(text) {
      Notiflix.Notify.success('Berhasil disalin');
    }

  </script>
@endpush
