@push('metas')
  <title>Daftar Agen | Kafa-ka.com</title>
@endpush

@push('style')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
    integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        Daftar Agen
      </div>
    </div>
  </header>


  <div class="mt-[60px] h-[calc(100vh-60px)] bg-white">
    {{-- main --}}
    <div class="flex flex-col bg-white p-4">
      <div>

        <div class="mb-4">
          <p class="text-xl font-semibold">
            Form Identitas Kamu
          </p>
          <p class="text-xs font-medium">
            Lengkapi semua form identitas dibawah ini.
          </p>
        </div>

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


        <div class="floating-icon relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-4">
          <span class="material-icons md-24 z-10 p-2">
            badge
          </span>
          <input type="number" name="nik" placeholder=" " required    autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-0 focus:outline-none focus:ring-0 focus:border-emerald-600 text-sm"/>
          <label for="nik" class="-z-1 origin-0 absolute top-2.5 left-10 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            NIK
          </label>
        </div>

        <div class="floating relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-4">
          <input type="date" name="birth_date" placeholder=" " required    autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-3 focus:outline-none focus:ring-0 focus:border-emerald-600 text-sm"/>
          <label for="birth_date" class="-z-1 origin-0 absolute top-2.5 left-2 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            Tanggal Lahir
          </label>
        </div>

        <div class="floating relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-4">
          <input type="text" name="birth_place" placeholder=" " required    autocomplete="off" class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-3 focus:outline-none focus:ring-0 focus:border-emerald-600 text-sm"/>
          <label for="birth_place" class="-z-1 origin-0 absolute top-2.5 left-2 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            Tempat Lahir
          </label>
        </div>
        
        <div class="floating relative z-0 m-0 inline-flex w-full items-center rounded-md border border-gray-300 mb-4">
          <textarea name="address" id="" rows="3" placeholder=" " class="mt-0 block w-full appearance-none border-0 border-b-2 border-transparent bg-transparent py-2.5 px-3 focus:outline-none focus:ring-0 focus:border-emerald-700 text-sm"></textarea>
          <label for="address" class="-z-1 origin-0 absolute top-2.5 left-2 m-0 rounded-md px-1.5 py-0 duration-300 bg-white text-sm">
            Alamat
          </label>
        </div>

        <div class="mb-4">
          <p class="text-xl font-semibold">
            Foto Identitas Kamu
          </p>
          <p class="text-xs font-medium">
            Masukkan foto yang terlihat jelas agar pendaftaran Agen dapat segera kami proses.
          </p>
        </div>
        <div class="mb-4">
          <p class="text-sm mb-1">Foto KTP</p>
          <input type="file" class="dropify" data-height="250" data-max-file-size-preview="3M" data-allowed-file-extensions="jpg jpeg png" />
          <div class="text-xs font-medium">
            *Ukuran foto tidak boleh melebihi 2MB.
          </div>
        </div>


        <div class="mb-4">
          <p class="text-sm mb-1">Foto Selfie</p>
          <input type="file" class="dropify" data-height="250" data-max-file-size-preview="3M" data-allowed-file-extensions="jpg jpeg png" />
          <div class="text-xs font-medium">
            *Ukuran foto tidak boleh melebihi 2MB.
          </div>
        </div>

        <button
          class="bg-secondary border-secondary mt-3 mb-4 w-full rounded-md border py-3 text-center text-sm font-medium text-white duration-300 hover:bg-emerald-600">
          Daftar Sebagai Agen
        </button>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
    integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $('.dropify').dropify({
      messages: {
        'default': 'Pilih Gambar',
        'replace': 'Ganti Gambar',
        'remove': 'Hapus',
        'error': 'Ooops, terjadi kesalahan .'
      },
      tpl: {
        wrap:            '<div class="dropify-wrapper"></div>',
        loader:          '<div class="dropify-loader"></div>',
        message:         '<div class="dropify-message"><span class="material-icons md-24">photo_camera</span> <p><button class="text-sm font-medium font-poppins">Upload foto</button></p></div>',
        preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">replace</p></div></div></div>',
        filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
        clearButton:     '<button type="button" class="dropify-clear">remove</button>',
        errorLine:       '<p class="dropify-error">error</p>',
        errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
      }
    });
  </script>
@endpush