<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="fixed top-0 left-0 right-0 z-50 bg-blue-200 dark:bg-gray-800">
        <div class="max-w-[1180px] mx-auto px-3.5 sm:px-6 lg:px-8 md:py-1">
            <div class="relative flex items-center justify-between sm:h-16 h-14">
                <div class="flex items-center flex-1 sm:items-stretch sm:justify-start">
                    <div class="flex items-center flex-shrink-0"><a class="hidden md:block"
                            href="https://ayocpns.com/app">
                            <div><img class="dark:hidden block h-7 sm:h-8 w-auto"
                                    src="https://dx46tjf3n01xc.cloudfront.net/build/assets/ayocpns-blue.d6e9eb35.png"
                                    alt="Workflow"><img class="hidden dark:block h-7 sm:h-8 w-auto"
                                    src="https://dx46tjf3n01xc.cloudfront.net/build/assets/ayocpns-white.e358b4fa.png"
                                    alt="Workflow"></div>
                        </a>
                        <div><a class="" href="https://ayocpns.com/app">
                                <div class="md:hidden">
                                    <div><img class="dark:hidden block h-7 sm:h-8 w-auto"
                                            src="https://dx46tjf3n01xc.cloudfront.net/build/assets/ayocpns-blue.d6e9eb35.png"
                                            alt="Workflow"><img class="hidden dark:block h-7 sm:h-8 w-auto"
                                            src="https://dx46tjf3n01xc.cloudfront.net/build/assets/ayocpns-white.e358b4fa.png"
                                            alt="Workflow"></div>
                                </div>
                            </a><!----></div>
                    </div>
                </div>
                <div
                    class="absolute inset-y-0 right-0 flex items-center md:pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!----><button
                        class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-0"
                        id="headlessui-switch-4" role="switch" type="button" tabindex="0" aria-checked="false"><span
                            class="translate-x-0 pointer-events-none relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"><span
                                class="opacity-100 ease-in duration-200 absolute inset-0 h-full w-full flex items-center justify-center transition-opacity"
                                aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="h-3 w-3 text-yellow-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z">
                                    </path>
                                </svg></span><span
                                class="opacity-0 ease-out duration-100 absolute inset-0 h-full w-full dark:bg-gray-800 rounded-full flex items-center justify-center transition-opacity"
                                aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" aria-hidden="true" class="h-3 w-3 text-blue-ayocpns-secondary">
                                    <path fill-rule="evenodd"
                                        d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z"
                                        clip-rule="evenodd"></path>
                                </svg></span></span></button>
                    <div class="mt-1 px-1.5 md:px-3 lg:px-5"><a href="https://wa.me/6285183171763" target="_blank"
                            class="hidden md:inline-block focus:outline-none focus:ring-0"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 text-gray-700 sm:h-6 sm:w-6 dark:text-gray-200 hover:text-gray-900 dark:hover:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z">
                                </path>
                            </svg></a></div>
                    <div class="relative">
                        <div><button id="headlessui-menu-button-5" type="button" aria-haspopup="true"
                                aria-expanded="false"
                                class="text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-white flex text-sm rounded-full focus:outline-none focus:ring-0"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="h-5 sm:h-6 w-6 sm:w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                                    </path>
                                </svg><span class="absolute -mt-0.5 ml-2.5 flex h-3 w-3"><span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-primary opacity-100"></span><span
                                        class="relative inline-flex justify-center rounded-full h-3 w-3 bg-red-primary"><span
                                            class="text-[10px] relative text-white -top-1">4</span></span></span></button>
                        </div><!---->
                    </div>
                    <div class="relative hidden ml-3 lg:ml-5 md:block"><button id="headlessui-menu-button-2"
                            type="button" aria-haspopup="true" aria-expanded="false"
                            class="border-l border-gray-300 pl-5 md:pl-3 lg:pl-5 text-gray-700 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white flex items-center text-[15px] focus:outline-none focus:ring-0"><span
                                class="font-semibold">Aan</span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="stroke-[2.5] w-4 h-4 ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5">
                                </path>
                            </svg></button><!----></div>
                </div>
            </div>
        </div>
    </nav>
    <main class="py-14"><!---->
        <section>
            <div class="bg-white dark:bg-gray-800">
                <div class="max-w-[1180px] mx-auto pt-3 pb-8 md:pb-3 px-3.5 sm:px-6 lg:px-8">
                    <div class="mt-0 sm:mt-3">
                        
                        {{$slot}}
                        
                        
                        <div class="mt-3 sm:hidden">
                            <div class="h-0.5 bg-gray-200 dark:bg-gray-600 w-full"></div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    @stack('js')
</body>

</html>