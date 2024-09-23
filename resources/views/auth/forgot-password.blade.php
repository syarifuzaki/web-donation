@push('metas')
  <title>Lupa Kata Sandi | Kafa-ka.com</title>
@endpush

@extends('layouts.app')

@section('content')
  {{-- header --}}
  <header class="fixed left-0 right-0 top-0 bottom-0 z-20 flex h-[60px] w-full">
    <div class="mx-auto my-0 flex w-full max-w-[480px] flex-row items-center justify-start bg-white px-4">
      <a href="{{ url()->previous() }}" class="material-icons">
        arrow_back
      </a>
    </div>
  </header>


  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    {{-- main --}}
    <div class="flex flex-col bg-white px-4 pb-4">
      <div class="mb-4 text-center">
        {{-- <div
          class="mx-auto flex h-[60px] w-[200px] items-center justify-center rounded border border-green-600 text-center text-2xl text-green-600">
          Logo Kafa-Ka
        </div> --}}
        <img src="{{ url('images/icon/kafaka.png') }}" class="w-[220px] mx-auto border border-green-600 rounded p-2" alt="">
      </div>
      <div class="mb-2 text-xl font-semibold">
        Lupa Kata Sandi?
      </div>
      <div class="mb-5 text-xs font-medium">
        Masukan alamat email Anda, kami akan mengirimkan link untuk atur ulang kata sandi.
      </div>
      <div>
        <div class="floating-icon relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-5">
          <span class="material-icons md-24 z-10 p-2">
            email
          </span>
          <input type="text" name="email" placeholder=" " required    autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-0 focus:outline-none focus:ring-0 focus:border-emerald-600 text-sm"/>
          <label for="email" class="-z-1 origin-0 absolute top-2.5 left-10 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            Email
          </label>
        </div>

        <button class="font-medium bg-primary rounded-md py-4 w-full text-white hover:bg-green-500 duration-300 mb-4">
          Kirim Email
        </button>

        <div class="text-center font-medium text-xs mb-5">
          Kembali ke halaman
          <a href="{{ route('auth.login') }}" class="text-secondary hover:text-green-600 duration-300"> Masuk </a>
          atau
          <a href="{{ route('auth.register') }}" class="text-secondary hover:text-green-600 duration-300"> Daftar </a>
        </div>
      </div>
    </div>
  </div>
@endsection
