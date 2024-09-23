@push('metas')
  <title>Buat Penggalangan Dana | Kafa-ka.com</title>
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
      <div class="ml-2 text-lg font-medium text-white">
        Form Penggalangan Dana
      </div>
    </div>
  </header>

  <div class="mt-[60px] h-[calc(100vh-60px)]">
    <div class="flex flex-col bg-white p-4">
      <div class="mb-5">
        <p class="font-semibold">
          Judul
        </p>
        <p class="mb-3 text-sm">
          Masukkan judul dari penggalangan dana Anda.
        </p>
        <input type="text" placeholder="Masukkan judul"
          class="relative w-full rounded border bg-white px-3 py-2 text-sm placeholder-slate-300 shadow outline-none focus:outline-none focus:ring" />
      </div>

      <div class="mb-5">
        <p class="font-semibold">
          Gambar
        </p>
        <p class="mb-3 text-sm">
          Masukkan gambar yang terlihat jelas agar galang dana yang Anda buat dapat segera kami proses.
        </p>
        <input type="file" class="dropify" data-height="250" data-max-file-size-preview="3M"
          data-allowed-file-extensions="jpg jpeg png" />
      </div>
      <div class="mb-5">
        <p class="font-semibold">
          Deskripsi penggalangan
        </p>
        <p class="mb-3 text-sm">
          Ceritakan tentang diri Anda, alasan penggalangan dana, dan rencana penggalangan dana.
        </p>
        <textarea class="w-full rounded" name="tinymce" id="description" rows="10"></textarea>
      </div>
      <button
        class="bg-secondary border-secondary mb-4 w-full rounded-md border py-3 text-center text-sm font-medium text-white duration-300 hover:bg-emerald-600">
        Buat Penggalangan Dana
      </button>
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
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
    $(function() {
      'use strict';
      //Tinymce editor
      if ($("#description").length) {
        tinymce.init({
          selector: '#description',
          height: 400,
          default_text_color: 'red',
          forced_root_block: false,
          plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'table'
          ],
          toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
          image_advtab: true,
          content_css: [],
          init_instance_callback: function(editor) {
            var freeTiny = document.querySelector('.tox .tox-notification--in');
            freeTiny.style.display = 'none';
          },
          // setup: function(editor) {
          //   editor.on('init change', function() {
          //     editor.save();
          //   });
          //   editor.on('change', function(e) {
          //     this.set('description', editor.getContent());
          //   });
          // },
        });
      }
    });
  </script>
@endpush
