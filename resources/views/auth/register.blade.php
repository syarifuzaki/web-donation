@push('metas')
  <title>Daftar | Kafa-ka.com</title>
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
        Daftar
      </div>
      <div class="mb-5 text-xs font-medium">
        Hai, Silakan lengkapi data Anda terlebih dahulu.
      </div>
      <div>
        <div class="floating-icon relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-4">
          <span class="material-icons md-24 z-10 p-2">
            person
          </span>
          <input type="text" name="name" placeholder=" " required    autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-0 focus:outline-none focus:ring-0 focus:border-emerald-600 text-sm"/>
          <label for="name" class="-z-1 origin-0 absolute top-2.5 left-10 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            Nama Lengkap
          </label>
        </div>

        <div class="floating-icon relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-4">
          <span class="material-icons md-24 z-10 p-2">
            email
          </span>
          <input type="text" name="email" placeholder=" " required    autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-0 focus:outline-none focus:ring-0 focus:border-emerald-600 text-sm"/>
          <label for="email" class="-z-1 origin-0 absolute top-2.5 left-10 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            Email
          </label>
        </div>

        <div class="floating-icon relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-4">
          <div class="z-10 p-2 text-xs">
            +62
          </div>
          <input type="number" name="phone" placeholder=" " required    autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-0 focus:outline-none focus:ring-0 focus:border-emerald-600 text-sm"/>
          <label for="phone" class="-z-1 origin-0 absolute top-2.5 left-10 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            Nomor HP
          </label>
        </div>

        <div class="floating-icon relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-3">
          <span class="material-icons md-24 z-10 p-2">
            lock
          </span>
          <input id="password" type="password" name="password" placeholder=" " required autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-0 focus:outline-none focus:ring-0 focus:border-emerald-600 text-sm"/>
          <span id="togglePassword" class="material-icons md-24 z-10 p-2 cursor-pointer">
            visibility
          </span>
          <label for="password" class="-z-1 origin-0 absolute top-2.5 left-10 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            Kata Sandi
          </label>
        </div>

        <div class="floating-icon relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-3">
          <span class="material-icons md-24 z-10 p-2">
            lock
          </span>
          <input id="confirmPassword" type="password" name="confirm_password" placeholder=" " required autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-0 focus:outline-none focus:ring-0 focus:border-emerald-600 text-sm"/>
          <span id="toggleConfirmPassword" class="material-icons md-24 z-10 p-2 cursor-pointer">
            visibility
          </span>
          <label for="confirm_password" class="-z-1 origin-0 absolute top-2.5 left-10 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            Konfirmasi Kata Sandi
          </label>
        </div>

        <div class="flex mb-5">
          <input
            type="checkbox"
            name="sk"
            id="sk"
            class="cursor-pointer mt-1"
          />
          <label for="sk" class="text-xs m-0 ml-2">
            Dengan ini saya menyatakan telah membaca dan setuju kepada
            <a href="#" class="text-xs text-primary hover:text-green-500 duration-300">
              Syarat dan Ketentuan
            </a>
            dan
            <a href="#" class="text-xs text-primary hover:text-green-500 duration-300"
            >
              Kebijakan Privasi.
            </a>
          </label>
        </div>

        <button class="font-medium bg-primary rounded-md py-4 w-full text-white hover:bg-green-500 duration-300 mb-4">
          Daftar
        </button>

        <div class="text-center font-medium text-xs mb-5">
          Sudah memiliki akun? <a href="{{ route('auth.login') }}" class="text-secondary hover:text-green-600 duration-300">Masuk</a>
        </div>

        <div class="h-1 border-t border-gray-300 mb-5 relative flex justify-center">
          <div class="text-2xs bg-white px-2 absolute -top-2">atau</div>
        </div>

        <button class="font-medium bg-[#4385F3] rounded-md py-4 w-full text-white hover:bg-blue-600 duration-300 mb-4 flex items-center justify-center">
          <img src="{{ asset('images/icon/g-icon.svg') }}" class="mr-3" alt="Google">
          Daftar dengan Akun Google
        </button>
        <button class="font-medium bg-[#395185] rounded-md py-4 w-full text-white hover:bg-blue-900 duration-300 mb-2 flex items-center justify-center">
          <img src="{{ asset('images/icon/fb-icon.svg') }}" class="mr-3" alt="Facebook">
          Daftar dengan Akun Facebook
        </button>

      </div>
    </div>
  </div>
@endsection

@push('script')
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

    const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
    const confirmPassword = document.querySelector("#confirmPassword");

    toggleConfirmPassword.addEventListener("click", function () {
      // toggle the type attribute
      const type = confirmPassword.getAttribute("type") === "password" ? "text" : "password";
      confirmPassword.setAttribute("type", type);
      
      // toggle the icon
      confirmPassword.getAttribute("type") == "password" ? this.innerHTML = 'visibility' : this.innerHTML = 'visibility_off';
    });
  </script>
@endpush