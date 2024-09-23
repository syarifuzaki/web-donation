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
    <div class="bg-gradient-to-br from-emerald-400 to-emerald-600 p-4 text-white">
      <div class="mb-1 text-sm">
        Batas Waktu Pembayaran
      </div>
      <div class="flex flex-row flex-nowrap items-center justify-between">
        <div class="text-sm font-semibold">
          Jum'at, 26 Agustus 2022 11:07 WIB
        </div>
        <div class="flex flex-row items-center text-sm font-semibold">
          <div class="material-icons mr-2">
            timer
          </div>
          00:16:23
        </div>
      </div>
    </div>
    <div class="rounded-t-lg bg-white p-4">
      <div class="flex justify-between">
        <p class="self-center font-semibold">BCA Virtual Account</p>
        <div class="rounded py-1 px-2">
          <img src="http://kafaka.test/images/icon/ovo.png" class="h-7 mx-auto" alt="">
        </div>
      </div>
      <div class="mt-1 bg-gray-100 flex justify-between rounded p-4">
        <div>
          <p class="text-sm">Yayasan Kafa-Ka</p>
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
    <div class="flex flex-col bg-white p-4">
      <p class="text-sm font-semibold">Total Nominal Transfer</p>
      <div class="flex justify-between p-4">
        <div class="flex text-3xl font-semibold">
          <span class="mr-1">Rp</span>
          <span>111.150.</span>
          <div class="text-primary">
            <div>668</div>
            <div class="before:empty-content before:border-t-solid before:border-r-solid before:border-l-solid before:border-b-solid after:empty-content after:border-t-solid after:border-r-solid after:border-l-solid after:border-b-solid after:border-b-solid relative before:absolute before:left-[7px] before:top-[-12px] before:border-t-[10px] before:border-r-[10px] before:border-l-[10px] before:border-b-[10px] before:border-t-transparent before:border-r-transparent before:border-l-transparent before:border-b-yellow-500 before:border-opacity-50 after:absolute after:left-[7px] after:top-[-10.5px] after:border-t-[10px] after:border-r-[10px] after:border-l-[10px] after:border-b-[10px] after:border-t-transparent after:border-r-transparent after:border-l-transparent  after:border-b-yellow-50"></div>
          </div>
        </div>
        <div class="self-center">
          <button onclick="clipboard('111150668')" class="border-primary bg-white hover:bg-emerald-600 text-primary hover:text-white duration-300 rounded-full border py-1 px-4 text-sm font-semibold flex items-center">
            Salin
            <span class="material-icons text-base ml-1">
              content_copy
            </span>
          </button>
        </div>
      </div>
      <div class="border-yellow-500 bg-yellow-50 -mt-2 flex rounded border-[0.5px] border-opacity-50 p-2">
        <div class="material-icons text-2xl mr-2 text-yellow-400">
          error
        </div>
        <p class="text-sm">
          <span class="font-semibold mr-0.5">
            PENTING!
          </span>Pastikan transfer tepat sampai 3 digit terakhir agar
          donasi terverifikasi otomatis
        </p>
      </div>
      <p class="text-xs mt-2 ">*Jumlah akan didonasikan hingga 3 digit terakhir</p>
      <button class="mt-4 w-full text-center rounded bg-primary text-white text-sm font-medium py-3">
        Cek Status Pembayaran
      </button>
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
        
        <a href="{{ route('home') }}" class="mt-7 font-medium bg-white rounded-md py-3 w-full text-secondary hover:bg-green-100 duration-300 mb-4 text-sm border border-secondary text-center">
          Donasi ke Penggalangan Lain
        </a>
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
