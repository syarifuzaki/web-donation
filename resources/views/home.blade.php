@push('style')
  <style>
    .slick-slider-dots {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
    }

    .slick-slider-dots ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .slick-slider-dots ul li {
      margin: 0 4px;
    }

    .slick-slider-dots ul li button {
      background: #fff;
      height: 8px;
      width: 8px;
      overflow: hidden;
      color: #fff;
      border: 1px solid #1b8c5c;
      border-radius: 4px;
    }

    .slick-slider-dots ul li.slick-active button {
      width: 20px;
      background: #1b8c5c;
      color: #1b8c5c;
      border: 1px solid #1b8c5c;
    }
  </style>
@endpush

@push('metas')
  <title>Kafa-ka.com</title>
@endpush

@extends('layouts.app')

@section('content')
  {{-- header --}}
  <header class="bg-primary fixed left-0 right-0 top-0 bottom-0 z-20 flex h-[60px] w-full">
    <div class="mx-auto my-0 flex w-full max-w-[480px] flex-row items-center justify-between px-4">
      <a href="" class="mr-4">
        <div class="h-[35px] w-[35px] rounded-full flex justify-center items-center bg-white text-primary font-semibold text-xl">
          K
        </div>
        {{-- <img src="https://picsum.photos/40" class="h-[35px] w-auto rounded-full" alt=""> --}}
      </a>
      <div class="flex grow items-center">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
          <input type="text" id="simple-search"
            class="block h-[33px] w-full rounded-full bg-white/30 p-2.5 pr-10 text-xs text-white placeholder:text-white focus:ring-blue-500"
            placeholder='Coba cari "Tolong menolong"' required>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
            <svg aria-hidden="true" class="h-5 w-5 text-white dark:text-white" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    {{-- main --}}

    {{-- banner slider --}}
    <div class="relative">
      <div class="banner-slider">
        <a href="#" class="m-3">
          <img src="https://i.picsum.photos/id/856/450/220.jpg?hmac=UM7A56oXzMnmWiMFqihOz_66J89cUDMI9qtvnXi5oAo"
            alt="Banner 1" class="w-full rounded-md">
        </a>
        <a href="#" class="m-3">
          <img src="https://i.picsum.photos/id/655/450/220.jpg?hmac=txb4wrT-cu8kHJhTkEUoBpfYFj0a9AEEv1S_vPlgc10"
            alt="Banner 2" class="w-full rounded-md">
        </a>
        <a href="#" class="m-3">
          <img src="https://i.picsum.photos/id/930/450/220.jpg?hmac=0jWjisxy7MdwfIFiyy3H69x_6uxUyFM66i-vaERLCfM"
            alt="Banner 3" class="w-full rounded-md">
        </a>
      </div>
      <div class="slick-slider-dots"></div>
    </div>

    <div class="h-3 bg-gray-100"></div>

    {{-- disorot --}}
    <div class="p-3">
      <p class="mb-3 text-base font-semibold">Disoroti</p>
      <div class="flex flex-row overflow-y-auto">
        <a href="{{ route('campaign.detail', ['slug' => 'campaign-1']) }}" class="card mx-2 mt-0 mb-4 flex w-[75%] flex-col rounded sm:w-[65%]">
          <img src="https://picsum.photos/280/150" class="object-fit h-[130px] w-full rounded-t" alt="">
          <div class="p-2">
            <div class="my-1 truncate text-xs font-medium">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, est.
            </div>
            <div class="bg-terniary my-3 h-1.5 w-full rounded-full">
              <div class="bg-secondary h-1.5 rounded-full" style="width: 70%"></div>
            </div>
            <div class="my-1 flex flex-row justify-between">
              <div class="text-xs font-medium">
                Rp 23.946.311
              </div>
              <div class="text-xs font-medium">
                10 hari lagi
              </div>
            </div>
          </div>
        </a>

        <a href="{{ route('campaign.detail', ['slug' => 'campaign-2']) }}" class="card mx-2 mt-0 mb-4 flex w-[75%] flex-col rounded sm:w-[65%]">
          <img src="https://picsum.photos/280/150" class="object-fit h-[130px] w-full rounded-t" alt="">
          <div class="p-2">
            <div class="my-1 truncate text-xs font-medium">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, est.
            </div>
            <div class="bg-terniary my-3 h-1.5 w-full rounded-full">
              <div class="bg-secondary h-1.5 rounded-full" style="width: 70%"></div>
            </div>
            <div class="my-1 flex flex-row justify-between">
              <div class="text-xs font-medium">
                Rp 23.946.311
              </div>
              <div class="text-xs font-medium">
                10 hari lagi
              </div>
            </div>
          </div>
        </a>

        <a href="{{ route('campaign.detail', ['slug' => 'campaign-3']) }}" class="card mx-2 mt-0 mb-4 flex w-[75%] flex-col rounded sm:w-[65%]">
          <img src="https://picsum.photos/280/150" class="object-fit h-[130px] w-full rounded-t" alt="">
          <div class="p-2">
            <div class="my-1 truncate text-xs font-medium">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, est.
            </div>
            <div class="bg-terniary my-3 h-1.5 w-full rounded-full">
              <div class="bg-secondary h-1.5 rounded-full" style="width: 70%"></div>
            </div>
            <div class="my-1 flex flex-row justify-between">
              <div class="text-xs font-medium">
                Rp 23.946.311
              </div>
              <div class="text-xs font-medium">
                10 hari lagi
              </div>
            </div>
          </div>
        </a>

      </div>
    </div>

    <div class="h-3 bg-gray-100"></div>

    {{-- iklan --}}
    <div class="ads-slider">
      <a href="#" class="">
        <img src="https://i.picsum.photos/id/176/760/500.jpg?hmac=8NBlznsYRiuYbx7GgczhUKEW44LZifY566rx2FYGvKM"
          alt="Ads 1" class="w-full">
      </a>
      <a href="#" class="">
        <img src="https://i.picsum.photos/id/974/760/500.jpg?hmac=HNsszdijjuZlIAvjUpZsSxP6D5inN3UfD5mDGCErG40"
          alt="Ads 2" class="w-full">
      </a>
      <a href="#" class="">
        <img src="https://i.picsum.photos/id/918/760/500.jpg?hmac=XHi6U1P7Dc_E72oYjbkPK_Q4aZ3myIOJwIXVg0IG9C4"
          alt="Ads 3" class="w-full">
      </a>
    </div>

    <div class="h-3 bg-gray-100"></div>

    {{-- kategori --}}
    <div class="bg-white p-3">
      <p class="mb-3 text-base font-semibold">Pilih Kategori Favoritmu</p>
      <div class="mb-3 grid grid-cols-3 gap-2">
        <div class="col-span-1 flex flex-col items-center">
          <div class="flex h-12 w-12 items-center justify-center rounded-2xl border-2 border-[#1b8c5c]">
            <span class="material-icons text-primary text-2xl">
              home
            </span>
          </div>
          <p class="my-2 text-xs">
            Bencana Alam
          </p>
        </div>

        <div class="col-span-1 flex flex-col items-center">
          <div class="shadow-item flex h-12 w-12 items-center justify-center rounded-2xl">
            <span class="material-icons text-terniary text-2xl">
              home
            </span>
          </div>
          <p class="my-2 text-xs">
            Bantuan Medis
          </p>
        </div>

        <div class="col-span-1 flex flex-col items-center">
          <div class="shadow-item flex h-12 w-12 items-center justify-center rounded-2xl">
            <span class="material-icons text-terniary text-2xl">
              home
            </span>
          </div>
          <p class="my-2 text-xs">
            Kemanusiaan
          </p>
        </div>

        <div class="col-span-1 flex flex-col items-center">
          <div class="shadow-item flex h-12 w-12 items-center justify-center rounded-2xl">
            <span class="material-icons text-terniary text-2xl">
              home
            </span>
          </div>
          <p class="my-2 text-xs">
            Rumah Ibadah
          </p>
        </div>

        <div class="col-span-1 flex flex-col items-center">
          <div class="shadow-item flex h-12 w-12 items-center justify-center rounded-2xl">
            <span class="material-icons text-terniary text-2xl">
              home
            </span>
          </div>
          <p class="my-2 text-xs">
            Kegiatan Sosial
          </p>
        </div>

        <div class="col-span-1 flex flex-col items-center">
          <div class="shadow-item flex h-12 w-12 items-center justify-center rounded-2xl">
            <span class="material-icons text-terniary text-2xl">
              home
            </span>
          </div>
          <p class="my-2 text-xs">
            Panti Asuhan
          </p>
        </div>

      </div>

      <a href="{{ route('campaign.detail', ['slug' => 'campaign-4']) }}" class="grid grid-cols-11 gap-3 border-b border-gray-200 mt-2 pb-2 md:gap-4">
        <div class="col-span-5 flex h-full w-full rounded bg-gray-100">
          <img src="https://picsum.photos/215/120" class="rounded object-fit" alt="">
        </div>
        <div class="col-span-6 flex flex-col justify-between">
          <div class="line-clamp-2 my-1 overflow-hidden text-xs font-medium">
            Infaq Yatim: Kebahagiaan untuk 500 anak-anak Yatim
          </div>
          <div class="w-100 my-1 flex items-center">
            <div class="text-2xs max-w-[110px] truncate">
              Pondok Pesantren Al-Islam
            </div>
            <span class="material-icons text-primary ml-1 text-xs">
              verified
            </span>
          </div>
          <div class="bg-terniary my-1 h-1 w-full rounded-full">
            <div class="bg-secondary h-1 rounded-full" style="width: 66%"></div>
          </div>
          <div class="my-1 flex flex-row justify-between">
            <div class="flex flex-col text-left">
              <div class="text-2xs">
                Terkumpul
              </div>
              <div class="text-xs font-semibold">
                Rp. 7.092.312.784
              </div>
            </div>
            <div class="flex flex-col text-right">
              <div class="text-2xs">
                Sisa hari
              </div>
              <div class="text-xs font-semibold">
                67
              </div>
            </div>
          </div>
        </div>
      </a>

      <a href="{{ route('campaign.detail', ['slug' => 'campaign-5']) }}" class="grid grid-cols-11 gap-3 border-b border-gray-200 mt-2 pb-2 md:gap-4">
        <div class="col-span-5 flex h-full w-full rounded bg-gray-100">
          <img src="https://picsum.photos/215/120" class="rounded object-fit" alt="">
        </div>
        <div class="col-span-6 flex flex-col justify-between">
          <div class="line-clamp-2 my-1 overflow-hidden text-xs font-medium">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, itaque!
          </div>
          <div class="w-100 my-1 flex items-center">
            <div class="text-2xs max-w-[110px] truncate">
              Lorem, ipsum.
            </div>
            <span class="material-icons text-primary ml-1 text-xs">
              verified
            </span>
          </div>
          <div class="bg-terniary my-1 h-1 w-full rounded-full">
            <div class="bg-secondary h-1 rounded-full" style="width: 10%"></div>
          </div>
          <div class="my-1 flex flex-row justify-between">
            <div class="flex flex-col text-left">
              <div class="text-2xs">
                Terkumpul
              </div>
              <div class="text-xs font-semibold">
                Rp. 2.845.136
              </div>
            </div>
            <div class="flex flex-col text-right">
              <div class="text-2xs">
                Sisa hari
              </div>
              <div class="text-xs font-semibold">
                321
              </div>
            </div>
          </div>
        </div>
      </a>

      <a href="{{ route('campaign.detail', ['slug' => 'campaign-6']) }}" class="grid grid-cols-11 gap-3 border-b border-gray-200 mt-2 pb-2 md:gap-4">
        <div class="col-span-5 flex h-full w-full rounded bg-gray-100">
          <img src="https://picsum.photos/215/120" class="w-full rounded object-fit" alt="">
        </div>
        <div class="col-span-6 flex flex-col justify-between">
          <div class="line-clamp-2 my-1 overflow-hidden text-xs font-medium">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga consequatur tenetur modi saepe qui obcaecati
            soluta facere. Voluptatum, voluptate iste!
          </div>
          <div class="w-100 my-1 flex items-center">
            <div class="text-2xs max-w-[110px] truncate">
              Lorem ipsum dolor sit amet.
            </div>
            <span class="material-icons text-primary ml-1 text-xs">
              verified
            </span>
          </div>
          <div class="bg-terniary my-1 h-1 w-full rounded-full">
            <div class="bg-secondary h-1 rounded-full" style="width: 99%"></div>
          </div>
          <div class="my-1 flex flex-row justify-between">
            <div class="flex flex-col text-left">
              <div class="text-2xs">
                Terkumpul
              </div>
              <div class="text-xs font-semibold">
                Rp. 10.092.312.784.332
              </div>
            </div>
            <div class="flex flex-col text-right">
              <div class="text-2xs">
                Sisa hari
              </div>
              <div class="text-xs font-semibold">
                2
              </div>
            </div>
          </div>
        </div>
      </a>

      <div class="mt-4 mb-1 text-center">
        <button
          class="text-primary relative w-[160px] rounded-full bg-emerald-200 p-1.5 text-xs duration-300 hover:bg-emerald-300">
          Lihat Semua
          <span class="material-icons absolute right-3 text-xs">
            arrow_forward_ios
          </span>
        </button>
      </div>
    </div>

    <div class="h-3 bg-gray-100"></div>

    <div class="bg-white px-4">
      <div class="border-gray-200 pt-3 pb-20 text-center text-sm text-gray-400">
        Copyright &copy; 2022 Kafa-Ka. All rights reserved
      </div>
    </div>

    @include('layouts.menu')
  </div>
@endsection

@push('script')
  <script>
    $('.banner-slider').slick({
      dots: true,
      infinite: true,
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      appendDots: $('.slick-slider-dots'),
    });

    $('.ads-slider').slick({
      infinite: true,
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 10000,
    });
  </script>
@endpush
