{{-- <section class="relative h-96 flex flex-col justify-center align-center text-center mb-4 opacity-50">
  <div class="z-10">
    <img src="{{asset('images/nmpc_bg.png')}}" class="absolute bottom-0 left-0 block w-full h-full object-cover object-center" alt="...">
  </div>
</section> --}}

  <section class="relative h-96 w-auto flex flex-row justify-center align-center text-center mb-4">
            <!-- Carousel Container-->
            <div id="default-carousel" class="relative w-full hidden sm:block" data-carousel="slide">
              <!-- Carousel wrapper -->
              <div class="relative h-full overflow-hidden rounded-lg">
                   <!-- Item 1 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="{{asset('images/nmpc_bg.png')}}" class="absolute block w-full h-full" alt="...">
                  </div>
                  <!-- Item 2 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="{{asset('images/nmpc_bg01.png')}}" class="absolute block w-full h-full" alt="...">
                  </div>
                  <!-- Item 3 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="{{asset('images/nmpc_bg02.png')}}" class="absolute block w-full h-full" alt="...">
                  </div>
                  <!-- Item 4 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="{{asset('images/nmpc_bg03.png')}}" class="absolute block w-full h-full" alt="...">
                  </div>
                  <!-- Item 5 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="{{asset('images/nmpc_bg04.png')}}" class="absolute block w-full h-full" alt="...">
                  </div>
              </div>
              <!-- Slider indicators -->
              <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                  <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
              </div>
              <!-- Slider controls -->
              <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                      </svg>
                      <span class="sr-only">Previous</span>
                  </span>
              </button>
              <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <span class="sr-only">Next</span>
                  </span>
              </button>
          </div>
  </section>
@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endpush