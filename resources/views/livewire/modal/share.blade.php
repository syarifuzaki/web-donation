<div>
  <!-- Modal -->
  <div class="{{ $display ? 'block' : 'hidden' }} fixed inset-0 z-30 bg-black/50 opacity-100 backdrop-blur-sm"></div>
  <div
    class="{{ $display ? 'flex' : 'hidden' }} z-40 fixed inset-0 items-end justify-center overflow-y-auto overflow-x-hidden outline-none focus:outline-none pointer-event-none">
    <div class="relative my-0 mx-0 w-full md:mx-auto md:w-1/3">
      <!--content-->
      <div
        class="relative flex max-h-[85vh] w-full flex-col rounded-t-xl border-0 bg-white shadow-lg outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-between rounded-t p-3 pb-0">
          <h3 class="text-base font-medium">
            Bagikan lewat
          </h3>
          <button wire:click="hide" class="modal-close cursor-pointer rounded-sm p-1 duration-500 hover:bg-gray-200">
            <svg class="fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              viewBox="0 0 18 18">
              <path
                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
              </path>
            </svg>
          </button>
        </div>
        <!--body-->
        <div class="p-3 w-full">
          <div class="flex w-full">
            <input id="clipboard" class="grow rounded-l-lg px-3 py-2 border-t mr-0 border-b border-l text-gray-800 bg-gray-200 border-gray-200 font-medium text-xs truncate shadow appearance-none focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-400" readonly value="https://kafaka.test/campaign/campaign-4-lorem-ipsum"/>
            <button onclick="copyToClipboard()" class="py-2 px-5 rounded-r-lg bg-indigo-500 text-white font-medium border-indigo-500 hover:bg-indigo-600 border-t border-b border-r text-sm duration-300">Salin</button>
          </div>
          <div class="w-full border-t border-gray-200 my-3"></div>
          <div class="w-full grid grid-cols-4 gap-3">
            <a href="https://api.whatsapp.com/send?text=https://kafaka.test/campaign/campaign-4" target="_blank" class="col-span-1 flex flex-col items-center justify-center rounded-md py-2 hover:bg-indigo-50 duration-300">
              <svg class="w-10 h-10 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#25D366"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"/></svg>
              <div class="text-2xs mt-2">
                Whatsapp
              </div>
            </a>

            <a href="https://www.facebook.com/sharer/sharer.php?u=https://kafaka.test/campaign/campaign-4" target="_blank" class="col-span-1 flex flex-col items-center justify-center rounded-md py-2 hover:bg-indigo-50 duration-300">
              <svg class="w-10 h-10 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#4267B2"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
              <div class="text-2xs mt-2">
                Facebook
              </div>
            </a>

            <a href="http://twitter.com/intent/tweet?text=https://kafaka.test/campaign/campaign-4" target="_blank" class="col-span-1 flex flex-col items-center justify-center rounded-md py-2 hover:bg-indigo-50 duration-300">
              <svg class="w-10 h-10 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#00acee"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"/></svg>
              <div class="text-2xs mt-2">
                Twitter
              </div>
            </a>

            <a href="https://t.me/share/url?url=https://kafaka.test/campaign/campaign-4&text=" target="_blank" class="col-span-1 flex flex-col items-center justify-center rounded-md py-2 hover:bg-indigo-50 duration-300">
              <svg class="w-10 h-10 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#0088cc"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/></svg>
              <div class="text-2xs mt-2">
                Telegram
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
