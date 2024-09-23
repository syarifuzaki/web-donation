<div>
  <div class="flex w-full flex-col bg-white p-4">
    <div class="mb-3 text-left text-base font-medium">
      Pilih Nominal Donasi
    </div>
    <div class="space-y-4">
      <button wire:click.prevent="submit" class="flex flex-row w-full items-center justify-between p-4  rounded-md shadow-md hover:shadow-lg duration-300 border border-neutral-200">
        <div class="font-semibold text-base">
          Rp 25.000
        </div>
        <div class="material-icons flex-shrink-0 text-primary">
          arrow_forward_ios
        </div>
      </button>

      <button wire:click.prevent="submit" class="flex flex-row w-full items-center justify-between p-4 rounded-md shadow-md hover:shadow-lg duration-300 border border-neutral-200">
        <div class="font-semibold text-base">
          Rp 50.000
        </div>
        <div class="material-icons flex-shrink-0 text-primary">
          arrow_forward_ios
        </div>
      </button>

      <button wire:click.prevent="submit" class="flex flex-row w-full items-center justify-between p-4 rounded-md shadow-md hover:shadow-lg duration-300 border border-neutral-200">
        <div class="font-semibold text-base">
          Rp 100.000
        </div>
        <div class="material-icons flex-shrink-0 text-primary">
          arrow_forward_ios
        </div>
      </button>

      <button wire:click.prevent="submit" class="flex flex-row w-full items-center justify-between p-4 rounded-md shadow-md hover:shadow-lg duration-300 border border-neutral-200">
        <div class="font-semibold text-base">
          Rp 200.000
        </div>
        <div class="material-icons flex-shrink-0 text-primary">
          arrow_forward_ios
        </div>
      </button>
    </div>
  </div>
  
  <div class="h-3 bg-gray-100"></div>

  <div class="flex w-full flex-col bg-white p-4">
    <div class="mb-3 text-left text-base font-medium">
      Nominal Donasi Lainnya
    </div>
    <div class="flex flex-row items-center justify-center w-full mb-2">
      <div class="text-xl font-semibold flex-shrink-0 pl-4 py-3 bg-neutral-100 rounded-l-md">
        Rp
      </div>
      <input type="text" wire:model="amount" class="grow w-full text-right p-3 font-semibold text-2xl bg-neutral-100 rounded-r-md focus:outline-none" placeholder="0" type-currency="IDR">
    </div>
    <div class="text-xs text-neutral-400 pl-2">
      Minimal donasi Rp 10.000
    </div>
  </div>
  
  <div class="fixed bottom-0 z-20 w-full max-w-screen-sm bg-white p-4 duration-500">
    <button 
      wire:click.prevent="submit"
      type="button"
      class="w-full rounded-md py-2 text-center text-sm font-semibold duration-300 shadow-md focus:outline-none {{ $disabled ? 'bg-neutral-100 text-neutral-400' : 'bg-rose-500 hover:bg-rose-600 text-white' }}"
      {{ $disabled ? 'disabled' : '' }}
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