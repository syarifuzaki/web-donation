{{-- menu bar --}}
<div class="fixed bottom-0 grid w-full max-w-screen-sm grid-cols-5 border-t border-gray-200 bg-white p-2 z-20">
  <a
    href="{{ route('home') }}" 
    class="col-span-1 flex flex-col items-center justify-center @if (Route::currentRouteName() == 'home') text-primary @else text-terniary @endif"
  >
    <span class="material-icons text-2xl">
      home
    </span>
    <div class="text-2xs font-medium">
      Home
    </div>
  </a>
  <a
    href="{{ route('fundraising.me') }}"
    class="col-span-1 flex flex-col items-center justify-center @if (strpos(Route::currentRouteName(), 'fundraising') === 0) text-primary @else text-terniary @endif"
  >
    <span class="material-icons text-2xl">
      inventory_2
    </span>
    <div class="text-2xs font-medium">
      Penggalangan
    </div>
  </a>
  <a
    href="{{ route('my-donation.me') }}"
    class="col-span-1 flex flex-col items-center justify-center @if (strpos(Route::currentRouteName(), 'my-donation') === 0) text-primary @else text-terniary @endif"
  >
    <span class="material-icons text-2xl">
      volunteer_activism
    </span>
    <div class="text-2xs font-medium">
      Donasi
    </div>
  </a>
  <a
    href="{{ route('agent.menu') }}"
    class="col-span-1 flex flex-col items-center justify-center @if (strpos(Route::currentRouteName(), 'agent') === 0) text-primary @else text-terniary @endif"
  >
    <span class="material-icons text-2xl">
      handshake
    </span>
    <div class="text-2xs font-medium">
      Agen
    </div>
  </a>
  <a
    href="{{ route('account.profile') }}" 
    class="col-span-1 flex flex-col items-center justify-center @if (strpos(Route::currentRouteName(), 'account') === 0) text-primary @else text-terniary @endif"
  >
    <span class="material-icons text-2xl">
      person
    </span>
    <div class="text-2xs font-medium">
      Akun
    </div>
  </a>
</div>