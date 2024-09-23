<div>
  <div class="w-full flex flex-col bg-white p-4">
    <div class="mb-3 text-left text-base font-semibold">
      Nominal Donasi
    </div>
    <div class="flex flex-row items-center justify-center w-full mb-2">
      <div class="text-xl font-semibold flex-shrink-0 pl-4 py-3 bg-neutral-100 rounded-l-md">
        Rp
      </div>
      <input type="text" wire:model="amount" class="grow w-full text-right p-3 font-semibold text-2xl bg-neutral-100 rounded-r-md focus:outline-none" placeholder="0" type-currency="IDR" disabled>
    </div>
    <div class="text-xs text-neutral-400 pl-2">
      Minimal donasi Rp 10.000
    </div>
  </div>
  <div class="h-3 bg-gray-100"></div>
  <div class="w-full flex flex-col bg-white p-4">
    <div class="mb-3 text-left text-base font-semibold">
      Metode Donasi
    </div>
    <div class="my-0 mx-2 py-2 grid grid-cols-5 gap-4">
      <div class="col-span-1 self-center">
        <img src="{{ url('images/icon/ovo.png') }}" class="h-7 mx-auto" alt="">
      </div>
      <div class="col-span-4 self-center items-center flex justify-between">
        <div class="flex flex-col">
          <div class="text-sm">
            Kantong Donasi
          </div>
          <div class="text-xs text-primary font-semibold">
            (Rp 254.000) Saldo saat ini Rp 150.000
          </div>
        </div>
        <a href="{{ route('campaign.payment', ['slug' => $slug]) }}" class="text-xs bg-white hover:bg-green-50 text-primary border border-primary duration-300 px-3 py-1 rounded font-medium">
          Ganti
        </a>
      </div>
    </div>
  </div>
  <div class="h-3 bg-gray-100"></div>
  <div class="w-full flex flex-col bg-white p-4 pb-20">
    @if (!$isAnonymous)
    <div class="mb-2">
      <p class="text-sm font-semibold mb-1">
        Nama Donasi
      </p>
      <input type="text" wire:model="name" placeholder="Masukkan nama donasi"
        class="relative w-full rounded border bg-white px-3 py-2 text-sm placeholder-slate-300 shadow outline-none focus:outline-none focus:ring" />
    </div>
    @endif
    <div class="flex flex-row justify-between items-center mb-3">
      <span class="text-sm font-medium">Sembunyikan nama saya (Hamba Allah)</span>
      <label for="donation-name" class="inline-flex relative items-center cursor-pointer">
        <input type="checkbox" @if($isAnonymous) checked @endif wire:click="toggleName" id="donation-name" class="sr-only peer">
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
      </label>
    </div>
    <div class="mb-3">
      <p class="text-sm font-semibold mb-1">
        Tanggal Donasi
      </p>
      <input type="date" wire:model="date" placeholder="Masukkan nama donasi"
        class="relative w-full rounded border bg-white px-3 py-2 text-sm placeholder-slate-300 shadow outline-none focus:outline-none focus:ring" />
    </div>
    <div class="mt-2 flex flex-row justify-between items-center">
      <span class="text-sm font-medium">Berikan komentar (Opsional)</span>
      <label for="donation-note" class="inline-flex relative items-center cursor-pointer">
        <input type="checkbox" @if($showNote) checked @endif wire:click="toggleNote" id="donation-note" class="sr-only peer">
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
      </label>
    </div>
    @if ($showNote)
    <textarea id="message" wire:model="note" rows="4" class="mt-3 relative w-full rounded border bg-white px-3 py-2 text-sm placeholder-slate-300 shadow outline-none focus:outline-none focus:ring" placeholder="Masukkan komentar disini..."></textarea>
    @endif
  </div>
  
  <div class="fixed bottom-0 z-20 w-full max-w-screen-sm bg-white p-4 duration-500">
    <button 
      wire:click.prevent="submit"
      type="button"
      class="w-full rounded-md py-2 text-center text-sm font-semibold duration-300 shadow-md focus:outline-none bg-rose-500 hover:bg-rose-600 text-white"
    >
      Lanjut Pembayaran
    </button>
  </div>
</div>

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