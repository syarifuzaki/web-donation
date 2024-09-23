<form wire:submit.prevent="login">
  <div class="mb-4">
    <div
      class="floating-icon {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} relative z-0 m-0 inline-flex w-full items-center rounded-md border">
      <span class="material-icons md-24 z-10 p-2">
        email
      </span>
      <input type="text" name="email" placeholder=" " autocomplete="off"
        class="{{ $errors->has('email') ? 'focus:border-red-500' : 'focus:border-emerald-600' }} mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-0 text-sm focus:outline-none focus:ring-0" wire:model="email" />
      <label for="email"
        class="-z-1 origin-0 {{ $errors->has('email') ? 'text-red-500' : '' }} absolute top-2.5 left-10 m-0 rounded-md bg-white px-1.5 py-0 text-sm duration-300">
        Email
      </label>
    </div>
    @error('email')
      <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
  </div>

  <div class="mb-3">
    <div class="floating-icon {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} relative z-0 m-0 inline-flex w-full items-center rounded-md border">
      <span class="material-icons md-24 z-10 p-2">
        lock
      </span>
      <input type="{{ $showPassword ? 'text' : 'password' }}" name="password" placeholder=" " autocomplete="off"
        class="{{ $errors->has('password') ? 'focus:border-red-500' : 'focus:border-emerald-600' }} mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-0 text-sm focus:outline-none focus:ring-0" wire:model="password" />
      <span wire:click.prevent="togglePassword" class="material-icons md-24 z-10 cursor-pointer p-2">
        {{ $showPassword ? 'visibility_off' : 'visibility' }}
      </span>
      <label for="password"
        class="-z-1 origin-0 {{ $errors->has('password') ? 'text-red-500' : '' }} absolute top-2.5 left-10 m-0 rounded-md bg-white px-1.5 py-0 text-sm duration-300">
        Kata Sandi
      </label>
    </div>
    @error('password')
      <span class="text-xs text-red-500">{{ $message }}</span>
    </div>
  @enderror

  {{-- <div class="floating relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-4">
    <input type="text" name="email" placeholder=" " required    autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-3 focus:outline-none focus:ring-0 focus:border-emerald-700 text-sm"/>
    <label for="email" class="-z-1 origin-0 absolute top-2.5 left-2 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
      Test
    </label>
  </div> --}}

  <div class="mb-3 text-right">
    <a href="{{ route('auth.forgot-password') }}" class="text-primary text-xs duration-300 hover:text-green-500">
      Lupa Password?
    </a>
  </div>

  <button type="submit"
    class="bg-primary mb-4 w-full rounded-md py-4 font-medium text-white duration-300 hover:bg-green-500">
    Masuk
  </button>

  <div class="mb-5 text-center text-xs font-medium">
    Anda belum memiliki akun? <a href="{{ route('auth.register') }}"
      class="text-secondary duration-300 hover:text-green-600">Daftar</a>
  </div>
</form>
