@push('metas')
  <title>Akun | Kafa-ka.com</title>
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
        Akun
      </div>
    </div>
  </header>


  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white flex flex-col justify-between">
    {{-- main --}}
    <div>
      <div class="flex flex-col p-4">
        <img src="{{ asset('images/illustration/privacy-policy.svg') }}" class="w-[280px] mx-auto" alt="">
        
        <div class="mb-2 text-base font-medium">
          Silahkan login terlebih dahulu untuk mengakses profil kamu
        </div>
  
        <a href="{{ route('auth.login') }}" class="font-medium bg-secondary rounded-md py-3 w-full text-white hover:bg-emerald-600 duration-300 mb-4 text-sm border border-secondary text-center">
          Masuk sekarang juga
        </a>
  
        <a href="{{ route('auth.register') }}" class="font-medium bg-white rounded-md py-3 w-full text-secondary hover:bg-green-100 duration-300 mb-4 text-sm border border-secondary text-center">
          Daftar akun
        </a>
  
      </div>
      
      <div class="h-3 bg-gray-100"></div>
  
      <div class="w-full flex flex-col bg-white divide-y devide-gray-500">
        <div class="w-full flex flex-row justify-between items-center p-4">
          <div class="grow flex flex-row">
            <div class="rounded-full text-gray-600 bg-gray-300 h-14 w-14 flex items-center justify-center text-xl flex-shrink-0">
              KF
            </div>
            <div class="pl-3 grow w-full">
              <div class="text-gray-700 font-medium">
                User Kafa-ka
              </div>
              <div class="text-xs text-gray-500">
                user@kafa-ka.com
              </div>
              <div class="text-xs text-secondary">
                Belum Terverifikasi
              </div>
            </div>
          </div>
          <a href="{{ route('account.edit') }}" class="text-xs text-secondary h-fit rounded-full px-4 py-2 border border-secondary font-medium hover:bg-green-100 duration-300">
            Edit profile
          </a>
        </div>
  
        <div class="flex flex-row items-center w-full p-2">
          <span class="material-icons md-24 z-10 p-2 text-primary mr-3">
            wallet
          </span>
          <div class="grow flex flex-row justify-between items-center">
            <div class="flex flex-row w-full items-center justify-between">
              <div class="grow text-sm font-semibold text-gray-500 flex-shrink-0 pr-2">
                Kantong Donasimu
              </div>
              <div class="text-sm font-semibold text-secondary mr-3 truncate">
                Rp 0
              </div>
            </div>
            <span class="material-icons text-gray-500">
              arrow_forward_ios
            </span>
          </div>
        </div>
  
        <a href="{{ route('fundraising.me') }}" class="flex flex-row items-center w-full p-2">
          <span class="material-icons md-24 z-10 p-2 text-primary mr-3">
            inventory_2
          </span>
          <div class="grow flex flex-row justify-between items-center">
            <div class="text-sm font-semibold text-gray-500">
              Galang Dana Saya
            </div>
            <span class="material-icons text-gray-500">
              arrow_forward_ios
            </span>
          </div>
        </a>
  
        <a class="flex flex-row items-center w-full p-2">
          <span class="material-icons md-24 z-10 p-2 text-primary mr-3">
            lock
          </span>
          <div class="grow flex flex-row justify-between items-center">
            <div class="text-sm font-semibold text-gray-500">
              Ganti Kata Sandi
            </div>
            <span class="material-icons text-gray-500">
              arrow_forward_ios
            </span>
          </div>
        </a>
      </div>
  
      <div class="h-3 bg-gray-100"></div>
  
      <div class="flex flex-col bg-white divide-y devide-gray-500">
        <div class="flex flex-row items-center w-full p-2">
          <span class="material-icons md-24 z-10 p-2 text-primary mr-3">
            admin_panel_settings
          </span>
          <div class="grow flex flex-row justify-between items-center">
            <div class="text-sm font-semibold text-gray-500">
              Kebijakan Privasi
            </div>
            <span class="material-icons text-gray-500">
              arrow_forward_ios
            </span>
          </div>
        </div>
  
        <div class="flex flex-row items-center w-full p-2">
          <span class="material-icons md-24 z-10 p-2 text-primary mr-3">
            task
          </span>
          <div class="grow flex flex-row justify-between items-center">
            <div class="text-sm font-semibold text-gray-500">
              Syarat dan Ketentuan
            </div>
            <span class="material-icons text-gray-500">
              arrow_forward_ios
            </span>
          </div>
        </div>
  
        <div class="flex flex-row items-center w-full p-2">
          <span class="material-icons md-24 z-10 p-2 text-primary mr-3">
            info
          </span>
          <div class="grow flex flex-row justify-between items-center">
            <div class="text-sm font-semibold text-gray-500">
              Tentang Kafa-Ka
            </div>
            <span class="material-icons text-gray-500">
              arrow_forward_ios
            </span>
          </div>
        </div>
  
        <div class="flex flex-row items-center w-full p-2">
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
      </div>  

    </div>

    <div class="">
      <div class="flex flex-row p-4 w-full bg-white">
        <a href="{{ route('auth.register') }}" class="font-medium bg-white rounded-md py-3 w-full text-red-500 hover:text-white hover:bg-red-500 duration-300 text-sm border border-red-500 text-center">
          Keluar
        </a>
      </div>
  
      <div class="bg-white px-4">
        <div class="border-gray-200 pt-3 pb-20 text-center text-sm text-gray-400">
          Copyright &copy; 2022 Kafa-Ka. All rights reserved
        </div>
      </div>
    </div>

    
    @include('layouts.menu')
  </div>
@endsection
