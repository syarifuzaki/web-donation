@push('metas')
  <title>Masuk | Kafa-ka.com</title>
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
        <a href="{{ route('home') }}">
          <img src="{{ url('images/icon/kafaka.png') }}" class="w-[220px] mx-auto border border-green-600 rounded p-2" alt="">
        </a>
      </div>
      <div class="mb-2 text-xl font-semibold">
        Login
      </div>
      <div class="mb-5 text-xs font-medium">
        Hai, Silakan masukkan akun Anda terlebih dahulu, atau daftarkan diri Anda sebagai pengguna tetap di Kafa-Ka.com
      </div>

      <div>
        @livewire('auth.login')
      </div>

      <div class="h-1 border-t border-gray-300 mb-5 relative flex justify-center">
        <div class="text-2xs bg-white px-2 absolute -top-2">atau</div>
      </div>

      <button class="font-medium bg-white hover:bg-gray-100 rounded-md py-4 w-full duration-300 mb-4 flex items-center justify-center border">
        <img src="{{ asset('images/icon/google.svg') }}" class="mr-3 w-5" alt="Google">
        Masuk dengan Akun Google
      </button>
      <button class="font-medium bg-white hover:bg-gray-100 rounded-md py-4 w-full duration-300 mb-2 flex items-center justify-center border">
        <img src="{{ asset('images/icon/facebook.svg') }}" class="mr-3 w-5" alt="Facebook">
        Masuk dengan Akun Facebook
      </button>
    </div>
  </div>
@endsection

{{-- @push('script')
  <script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
      // toggle the type attribute
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      
      // toggle the icon
      password.getAttribute("type") == "password" ? this.innerHTML = 'visibility' : this.innerHTML = 'visibility_off';
    });
  </script>
@endpush --}}