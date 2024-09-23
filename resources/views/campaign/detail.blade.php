@push('metas')
  <title>Donasi | Kafa-ka.com</title>
@endpush

@extends('layouts.app')

@section('content')
  {{-- header --}}
  <header id="header"
    class="fixed left-0 right-0 top-0 bottom-0 z-20 flex h-[60px] w-full bg-transparent text-white duration-500">
    <div class="mx-auto my-0 flex w-full max-w-[480px] flex-row items-center justify-start px-4">
      <a href="{{ route('home') }}" class="material-icons flex-shrink-0">
        arrow_back
      </a>
      <div id="title" class="ml-2 hidden truncate text-lg font-medium">
        Infaq Yatim: Kebahagiaan untuk 500 anak-anak Yatim
      </div>
    </div>
  </header>


  <div class="h-[calc(100vh)]">
    <img src="https://picsum.photos/480/270" class="w-full" alt="">
    {{-- main --}}
    <div class="flex w-full flex-col bg-white p-4">
      <div class="mb-3 text-left text-lg font-semibold">
        Infaq Yatim: Kebahagiaan untuk 500 anak-anak Yatim
      </div>
      <div class="text-primary font-semibold">
        Rp 227.254.794
        <span class="text-xs font-medium text-gray-600">dari Rp 140.087.250</span>
      </div>
      <div class="bg-terniary my-1 h-1.5 w-full rounded-full">
        <div class="bg-primary h-1.5 rounded-full" style="width: 66%"></div>
      </div>
      <div class="mb-4 flex w-full flex-row justify-between">
        <div class="font-semibold">
          1062
          <span class="text-xs font-medium">
            Donasi
          </span>
        </div>
        <div class="font-semibold">
          14
          <span class="text-xs font-medium">
            Hari lagi
          </span>
        </div>
      </div>
      <div class="flex flex-row flex-nowrap space-x-3">
        <button 
          onclick="openModal()"
          type="button"
          class="flex flex-row items-center justify-center rounded-md bg-indigo-500 py-2.5 px-5 text-center text-sm font-semibold text-white duration-300 hover:bg-indigo-600">
          <span class="material-icons mr-2"
        >
            share
          </span>
          Bagikan
        </button>
        <a
          href="{{ url()->current() }}/donation"
          class="grow rounded-md bg-rose-500 py-2.5 text-center text-sm font-semibold text-white duration-300 hover:bg-rose-600">
          Berikan Donasi
        </a>
      </div>
    </div>

    <div class="h-3 bg-gray-100"></div>

    <div class="flex w-full flex-col bg-white p-4">
      <div class="font-semibold">
        Informasi Penggalangan Dana
      </div>

      <div class="mt-4 rounded border border-gray-300 p-4">
        <div class="mb-2 text-sm font-medium">Penggalang Dana</div>

        <div class="flex w-full flex-row items-center">
          <div
            class="border-primary text-primary mr-3 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full border text-xl font-semibold">
            K
          </div>
          <div class="flex grow flex-col truncate">
            <div class="mb-1 flex flex-row items-center">
              <div class="truncate text-sm font-semibold">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident in id dolore impedit perspiciatis. Qui
                amet soluta id corrupti consequatur.
              </div>
              <span class="material-icons text-primary ml-1 text-lg">
                verified
              </span>
            </div>
            <div class="text-xs text-gray-400">
              Identitas lembaga terverifikasi
            </div>
          </div>
        </div>
      </div>

      <div class="mt-4 rounded border border-gray-300 p-4">
        <div class="mb-2 text-sm font-medium">Penerima Donasi</div>

        <div class="mb-2 flex w-full flex-row items-start">
          <div class="mr-3 flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-gray-300">
            <span class="material-icons text-2xl text-gray-500">
              person
            </span>
          </div>
          <div class="flex grow flex-col truncate">
            <div class="mb-1 flex flex-row items-center">
              <div class="truncate text-sm font-medium">
                User dummy 1
              </div>
            </div>
            <div class="text-xs text-gray-400">
              Identitas terverifikasi
            </div>
          </div>
        </div>

        <div class="mb-2 flex w-full flex-row items-start">
          <div class="mr-3 flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-gray-300">
            <span class="material-icons text-2xl text-gray-500">
              credit_card
            </span>
          </div>
          <div class="flex grow flex-col truncate">
            <div class="mb-1 flex flex-row items-center">
              <div class="truncate text-sm font-medium">
                Rekening Penerima
              </div>
            </div>
            <div class="text-xs text-gray-400">
              Rekening Penerima terverifikasi
            </div>
          </div>
        </div>

        <div class="flex w-full flex-row items-start">
          <div class="mr-3 flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-gray-300">
            <span class="material-icons text-2xl text-gray-500">
              place
            </span>
          </div>
          <div class="flex grow flex-col truncate">
            <div class="mb-1 flex flex-row items-center">
              <div class="truncate text-sm font-medium">
                Lokasi
              </div>
            </div>
            <div class="text-xs text-gray-400">
              Kab. Bangka Belitung
            </div>
          </div>
        </div>

      </div>

      <div class="mt-4 rounded border border-gray-300 p-4">
        <div class="mb-2 text-sm font-medium">Penyalur Dana</div>

        <div class="flex w-full flex-row items-start">
          <div class="mr-3 flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-gray-300">
            <span class="material-icons text-2xl text-gray-500">
              account_balance_wallet
            </span>
          </div>
          <div class="flex grow flex-col truncate">
            <div class="mb-1 flex flex-row items-center">
              <div class="truncate text-sm font-medium">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, ea!
              </div>
            </div>
            <div class="text-xs text-gray-400">
              Rekening bank terverifikasi
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="h-3 bg-gray-100"></div>

    <div class="flex w-full flex-col bg-white p-4">
      <div class="mb-3 flex flex-row items-center justify-between">
        <div class="font-semibold">
          Cerita
        </div>
        <div class="text-sm">
          12 Agustus 2022
        </div>
      </div>
      <div id="story" class="relative overflow-hidden" style="max-height: 200px;">
        <div id="storyBlur" class="absolute bottom-0 h-[100px] w-full"
          style="background: linear-gradient(rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%)">
        </div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quo ullam magni voluptatum in dolores, odio, sit
          recusandae quas adipisci maiores voluptas numquam repellat veritatis. Ducimus quaerat laboriosam ea cum
          blanditiis? Neque vitae provident rem error recusandae voluptatibus aperiam. A ut error modi eos voluptatibus
          rerum consequatur eligendi minima eum eius veniam earum delectus quibusdam exercitationem, vero nihil.
          Voluptatibus praesentium ipsum doloremque vel sapiente, voluptate ea ab doloribus minus iste nam fuga velit sed ut
          iusto repellendus. Sequi provident aliquid expedita non animi, laborum quod aperiam, iste eveniet excepturi
          quisquam perferendis quas. Eos autem accusantium magnam qui magni mollitia explicabo temporibus. Voluptatum totam,
          natus dignissimos illum eveniet, ea non assumenda veritatis facere atque delectus beatae soluta quos
          necessitatibus obcaecati cupiditate aut temporibus facilis quas mollitia. Fugit, laudantium odit nam eos
          doloremque debitis nesciunt, voluptatibus temporibus culpa recusandae voluptate, ipsa sit facere aliquid
          accusantium sapiente minima repudiandae ab. Expedita perferendis necessitatibus saepe in praesentium, error iure
          debitis nisi voluptatibus cumque voluptates vel dolor veritatis adipisci libero, aliquam a labore eos? Nisi
          dolorem amet fugiat adipisci maiores minima, vitae debitis, rerum earum assumenda cupiditate hic vel nihil
          sapiente, facilis deserunt doloremque blanditiis enim. Magnam nulla et dolorum delectus officia libero! Dicta ad
          enim quibusdam? Sed cumque animi qui consectetur exercitationem! Aspernatur alias sed ducimus, quas neque numquam
          tenetur quod maxime repellendus sunt porro nihil cumque dolor cupiditate, asperiores consectetur explicabo
          voluptatem dolorem! Hic natus minus impedit molestias accusamus animi doloribus quae illum distinctio ipsum quo
          eius repellat, recusandae laudantium minima deserunt repellendus aspernatur alias cumque dolor enim. Facilis,
          exercitationem sit consequuntur fuga distinctio facere quae ipsam, adipisci harum sed ab impedit dolorum officia?
          Animi totam optio delectus, obcaecati fugit debitis ducimus facilis a? Perferendis quasi et mollitia iste repellat
          veritatis doloribus expedita natus ex eveniet sunt ullam cumque, pariatur molestias dolor laborum itaque voluptas
          sit cupiditate odio qui? Amet, dignissimos magni? Facere nesciunt dolor aliquid quis soluta, illum suscipit,
          voluptate nobis sit nostrum vero dolorem fuga asperiores ab numquam alias deserunt, repudiandae hic obcaecati
          libero nulla voluptatibus. Minus distinctio eius ea tempore neque deserunt pariatur fugiat rerum eligendi culpa,
          rem earum praesentium ducimus, ipsam id laborum numquam consequuntur et? Dicta et nobis dolorum ex tenetur
          accusamus nihil reiciendis voluptas numquam rerum quaerat tempore voluptates non, nostrum architecto ducimus fugit
          debitis mollitia itaque doloremque nesciunt excepturi. Similique numquam modi magni sequi, praesentium culpa
          facere maxime vitae! Assumenda pariatur quaerat tenetur quis. Rerum quas pariatur impedit ducimus explicabo
          recusandae veniam neque harum eum veritatis provident deleniti, quis praesentium fugit voluptas blanditiis
          similique qui quae. Numquam praesentium voluptatum recusandae voluptas. Ad non laboriosam odit voluptatum
          mollitia, sapiente sunt sint rem cumque nostrum voluptates aliquam, odio officiis! Architecto cupiditate inventore
          officiis veniam, animi corrupti debitis minus recusandae voluptate quaerat aperiam commodi natus molestiae quidem
          dolores, ipsum, perspiciatis dignissimos iure impedit magnam. Ratione quo itaque suscipit nobis non dicta
          similique accusantium, dignissimos maiores eos. Neque quam voluptates quae quasi quos eveniet modi non perferendis
          delectus qui maiores aspernatur cupiditate, vitae quaerat! Nulla numquam quasi sapiente ex non?
      </div>
      <button id="expand" onclick="expand()"
        class="text-secondary my-3 mx-auto flex w-fit flex-row items-center justify-center rounded-full bg-green-100 px-6 py-1.5 text-xs duration-300 hover:bg-green-200">
        <div id="expand-text">
          Baca selengkapnya
        </div>
        <span id="expand-icon" class="material-icons ml-2 text-sm">
          expand_more
        </span>
      </button>
    </div>

    <div class="h-[72px] bg-gray-100"></div>

    <div id="menu"
      class="fixed bottom-0 z-20 flex w-full max-w-screen-sm flex-row flex-nowrap space-x-3 bg-white p-4 duration-500">
      <button 
        onclick="openModal()"
        type="button"
        class="flex flex-row items-center justify-center rounded-md bg-indigo-500 py-2 px-5 text-center text-sm font-semibold text-white duration-300 hover:bg-indigo-600"
      >
        <span class="material-icons mr-2">
          share
        </span>
        Bagikan
      </button>
      <a
        href="{{ url()->current() }}/donation"
        class="grow rounded-md bg-rose-500 py-2 text-center text-sm font-semibold text-white duration-300 hover:bg-rose-600"
      >
        Berikan Donasi
      </a>
    </div>
  </div>
  @livewire('modal.share')
@endsection

@push('script')
  <script>
    var header = document.getElementById('header');
    var title = document.getElementById('title');
    var menu = document.getElementById('menu');

    document.addEventListener('scroll', () => {
      if (window.scrollY >= 60) {
        header.classList.remove('bg-transparent');
        header.classList.remove('text-white');
        title.classList.remove('hidden');
        header.classList.add('bg-white');
        header.classList.add('text-gray-500');
        title.classList.add('inline');
      } else {
        header.classList.remove('bg-white');
        header.classList.remove('text-gray-500');
        title.classList.remove('inline');
        header.classList.add('bg-transparent');
        header.classList.add('text-white');
        title.classList.add('hidden');
      }

      if (window.scrollY >= 480) {
        menu.classList.remove('hidden');
        menu.classList.add('flex');
      } else {
        menu.classList.remove('flex');
        menu.classList.add('hidden');
      }
    })

    var story = document.getElementById('story');
    var blur = document.getElementById('storyBlur');
    var btnExpand = document.getElementById('expand');
    var expandText = document.getElementById('expand-text');
    var expandIcon = document.getElementById('expand-icon');

    function expand() {
      if (expandIcon.innerText == 'expand_more') {
        story.style.maxHeight = 'fit-content';
        blur.classList.add('hidden');
        expandText.innerHTML = 'Baca lebih ringkas';
        expandIcon.innerHTML = 'expand_less';
      } else {
        story.style.maxHeight = '200px';
        blur.classList.remove('hidden');
        expandText.innerHTML = 'Baca selengkapnya';
        expandIcon.innerHTML = 'expand_more';
      }
    };

    function copyToClipboard() {
      document.getElementById("clipboard").select();
      document.execCommand('copy');
      alert('Berhasil tersalin');
    }

    function openModal()
    {
      window.livewire.emitTo('modal.share', 'show');
    }
  </script>
@endpush
