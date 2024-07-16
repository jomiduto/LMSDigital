<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMS Digital - @yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-black': darkMode === true}"
  >
    {{-- Include header --}}
    @include('layouts.partials.header')

    <main>
        <section class="pt-35 md:pt-40 xl:pt-52 pb-20 lg:pb-30 xl:pb-59 relative overflow-hidden">
            <div class="hidden md:block w-1/2 2xl:w-187.5 h-auto 2xl:h-171.5 absolute right-0 top-0">
                <img src="./images/shape/shape-01.svg" alt="shape" class="hidden 2xl:block absolute top-[40%] -left-[10%] z-1" />
                <img src="./images/shape/shape-02.svg" alt="shape" class="hidden 2xl:block absolute right-[20%] bottom-0 z-10" />
                <img src="./images/shape/shape-03.svg" alt="shape" class="hidden 2xl:block absolute left-[15%] bottom-[10%] z-10" />
                <img src="./images/shape/shape-04.svg" alt="shape" class="absolute right-0 top-0" />
                <img src="./images/hero/hero.png" alt="Woman" class="absolute right-0 top-0 z-1" />
            </div>

            {{-- Include content header --}}
            <div class="mx-auto max-w-1390 px-4 md:px-8 2xl:px-0">
                <div class="flex lg:items-center">
                    <div class="animate_left md:w-1/2">
                    <h1 class="font-semibold text-3xl lg:text-4xl xl:text-title-xxl text-black dark:text-white mb-6">We specialize in UI/UX, Web Development, Digital Marketing.</h1>
                    <p class="xl:w-[79%]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla magna mauris. Nulla fermentum viverra sem eu rhoncus consequat varius nisi quis, posuere magna.
                    </p>
        
                    <div class="flex flex-col-reverse lg:flex-row gap-7.5 mt-10">
                        <a href="#" class="font-medium leading-7 text-white bg-primary py-3 px-7.5 rounded-full ease-in-out duration-300 inline-flex w-fit hover:shadow-1"
                        >Get Started Now</a
                        >
        
                        <span class="flex flex-col">
                        <a href="#" class="inline-block font-medium text-lg text-black dark:text-white"> Call us (0123) 456 – 789 </a>
                        <span class="inline-block">For any question or concern</span>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End header section --}}

        {{-- Section features --}}
        <section id="features">
            <div class="mx-auto max-w-1390 px-4 md:px-7.5 2xl:px-12.5">
              <div class="flex flex-wrap lg:flex-nowrap justify-center lg:justify-between gap-7.5 lg:gap-5 xl:gap-22.5">
                <!-- Small Features Item -->
                <div class="animate_top md:w-[45%] lg:w-1/3 flex gap-5 xl:gap-7.5">
                  <div class="flex items-center justify-center shrink-0 w-21 h-21 rounded-full bg-secondary">
                    <img src="./images/icon/icon-01.svg" alt="Icon" />
                  </div>
                  <div>
                    <h4 class="font-medium text-xl md:text-title-sm text-black dark:text-white mb-2.5">24/7 Support</h4>
                    <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
                  </div>
                </div>
    
                <!-- Small Features Item -->
                <div class="animate_top md:w-[45%] lg:w-1/3 flex gap-5 xl:gap-7.5">
                  <div class="flex items-center justify-center shrink-0 w-21 h-21 rounded-full bg-meta-green">
                    <img src="./images/icon/icon-02.svg" alt="Icon" />
                  </div>
                  <div>
                    <h4 class="font-medium text-xl md:text-title-sm text-black dark:text-white mb-2.5">Take Ownership</h4>
                    <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
                  </div>
                </div>
    
                <!-- Small Features Item -->
                <div class="animate_top md:w-[45%] lg:w-1/3 flex gap-5 xl:gap-7.5">
                  <div class="flex items-center justify-center shrink-0 w-21 h-21 rounded-full bg-meta-orange">
                    <img src="./images/icon/icon-03.svg" alt="Icon" />
                  </div>
                  <div>
                    <h4 class="font-medium text-xl md:text-title-sm text-black dark:text-white mb-2.5">Team Work</h4>
                    <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
                  </div>
                </div>
              </div>
            </div>
        </section>
        {{-- Small features end --}}
    </main>
</body>
</body>
</html>