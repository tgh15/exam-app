<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- SEO Meta Tags -->
        <meta name="description" content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
        <meta name="author" content="Sang Tutor" />

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->
        <meta name="color-scheme" content="light only">

        <!-- Webpage Title -->
        <title>Sang Tutor</title>

        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
        <link href={{asset("assets/landing/css/fontawesome-all.css")}} rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <link href={{asset("assets/landing/css/swiper.css")}} rel="stylesheet" />
        <link href={{asset("assets/landing/css/magnific-popup.css")}} rel="stylesheet" />
        <link href={{asset("assets/landing/css/styles.css")}} rel="stylesheet" /> <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />

        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png" />
        <style>
            .description> ul{
                list-style: decimal !important
            }
        </style>
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        <!-- Navigation -->
        <nav class="navbar fixed-top">
            <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">
                
                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

                <!-- Image Logo -->
                <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="index.html">
                    <img src={{asset("assets/logo.png")}} alt="alternative" class="h-10" />
                    {{-- <h1 class="font-bold" style="font-size: 1.5rem">Sang<span class="text-blue-400">Tutor</span></h1> --}}
                </a>

                <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
                    <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        <li>
                            <a class="nav-link page-scroll active" href="#header">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#details">Details</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                        </li>
                        {{-- <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                            </div>
                        </li> --}}
                        <li>
                            <a class="nav-link page-scroll" href="#download">Download</a>
                        </li>
                    </ul>
                    <span class="flex gap-1">
                        <a class="no-underline p-2 px-4 bg-blue-400 text-white rounded-md" href={{route('login')}}>
                            Login
                        </a>
                        <a class="no-underline p-2 px-4 border-blue-400 text-blue-400 rounded-md" href={{route('register')}}>
                            {{-- <i class="fab fa-android text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200"></i> --}}
                            Daftar
                        </a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        <!-- Header -->
        <header id="header" class="py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32" style="min-height: 100vh">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
                <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                    <h1 class="h1-large mb-5 font-bold animate__animated  animate__fadeInDown">Bimbel CPNS & PPPK bersama Sang<span class="text-blue-400">Tutor</span></h1>
                    <p class="p-large mb-8 animate__animated  animate__fadeInDown">Tingkatkan peluang lolos CPNS dan PPPK ! 
                        Bergabunglah sekarang dengan SangTutor dan siapkan diri Anda menghadapi tes CPNS dan PPPK dengan lebih percaya diri dan mudah!</p>
                    <a class="p-3 bg-blue-400 text-white rounded-lg font-bold hover:bg-blue-500" href="{{route('login')}}"></i>Login</a>
                    <a class="p-3 bg-blue-400 text-white rounded-lg font-bold hover:bg-blue-500" href="#your-link"></i>Beli Paket</a>
                </div>
                <div class="xl:text-right relative">
                    <div class="absolute bg-white z-50 h-full w-10"></div>
                    {{-- <img class="inline rounded-md" src={{asset("assets/landing/images/profile.svg")}} alt="alternative" /> --}}
                    <dotlottie-player src="https://lottie.host/26f557f7-e770-4355-bc81-324c129a6168/VWLrR1svKu.json" background="transparent" speed="1"  loop autoplay></dotlottie-player>
                    {{-- <iframe src="https://lottie.host/embed/26f557f7-e770-4355-bc81-324c129a6168/VWLrR1svKu.json"></iframe> --}}
                </div>
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->

    

        <!-- Introduction -->
        {{-- <div class="pt-4 pb-14 text-center">
            <div class="container px-4 sm:px-8 xl:px-4">
                <p class="mb-4 text-gray-800 text-3xl leading-10 lg:max-w-5xl lg:mx-auto"> Team management mobile apps don’t get better than Pavo. It’s probably the best app in the world for this purpose. Don’t hesitate to give it a try today and you will fall in love with it</p>
            </div> <!-- end of container -->
        </div> --}}
        <!-- end of introduction -->


        <!-- Features -->
        <div id="features" class="cards-1 min-h-screen">
            <div class="container w-[60%] px-4 sm:px-8 xl:px-4">

                {{-- <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src={{asset("assets/landing/images/features-icon-1.svg")}} alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Platform Integration</h5>
                        <p class="mb-4">You sales force can use the app on any smartphone platform without compatibility issues</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src={{asset("assets/landing/images/features-icon-2.svg")}} alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Easy On Resources</h5>
                        <p class="mb-4">Works smoothly even on older generation hardware due to our optimization efforts</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src={{asset("assets/landing/images/features-icon-3.svg")}} alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Great Performance</h5>
                        <p class="mb-4">Optimized code and innovative technology insure no delays and ultra-fast responsiveness</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src={{asset("assets/landing/images/features-icon-4.svg")}} alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Multiple Languages</h5>
                        <p class="mb-4">Choose from one of the 40 languages that come pre-installed and start selling smarter</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src={{asset("assets/landing/images/features-icon-5.svg")}} alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Free Updates</h5>
                        <p class="mb-4">Don't worry about future costs, pay once and receive all future updates at no extra cost</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src={{asset("assets/landing/images/features-icon-6.svg")}} alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Community Support</h5>
                        <p class="mb-4">Register the app and get acces to knowledge and ideas from the Pavo online community</p>
                    </div>
                </div>
                <!-- end of card --> --}}
                <div class="grid grid-rows-4 grid-flow-col gap-4">
                    <div class="rounded-lg shadow-lg sm:flex flex-col justify-center items-center p-4  sm:row-span-4 min-h-90" style="background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);">
                        <img class="w-72" src="{{asset('assets/landing/images/books.png')}}" alt="">
                        <div>
                            <h1 class="text-white font-bold">Video Materi</h1>
                            <p class="text-white">Tonton video series untuk memahami materi mulai dari dasar hingga lanjutan.</p>
                        </div>
                    </div>
                    <div class="rounded-lg shadow-lg sm:flex items-center  p-4 sm:col-span-2 sm:row-span-2" style="background-image: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);">
                        <img class="w-72" src="{{asset('assets/landing/images/8867390.png')}}" alt="">
                        <div>
                            <h1 class="text-white font-bold text-left">Tryout dan latihan soal</h1>
                            <p class="text-white text-left">Kerjakan try out dan latihan soal untuk mengasah kemampuan kamu menjawab soal ujian.</p>
                        </div>
                    </div>
                    <div class="rounded-lg shadow-lg sm:flex items-center  p-4 sm:row-span-2 sm:col-span-2" style="background-image: linear-gradient(to top, #c79081 0%, #dfa579 100%);">
                        <div>
                            <h1 class="text-white font-bold text-right">Kelas Bimbel</h1>
                            <p class="text-white text-right">Gabung bersama kelas bimbel untuk belajar secara interaktif bersama para coach profesional</p>
                        </div>
                        <img class="w-72" src="{{asset('assets/landing/images/131[1].png')}}" alt="">
                    </div>
                  </div>

            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of features -->


        <!-- Details 1 -->
        <div id="details" class="pt-12 pb-16 lg:pt-16">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
                <div class="lg:col-span-5 flex flex-row items-center">
                    <div>
                        <h1 class="text-4xl">"Raih impian menjadi ASN dengan persiapan terbaik!"</h1>
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-7">
                    <div class="xl:ml-14">
                        <img class="inline" src={{asset("assets/landing/images/profile.png")}} alt="alternative" />
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of container -->
        </div>
        <!-- end of details 1 -->


        <!-- Details 2 -->
        <div class="py-24">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
                <div class="lg:col-span-7">
                    <div class="mb-12 lg:mb-0 xl:mr-14">
                        <img class="inline" src={{asset("assets/landing/images/details-2.jpg")}} alt="alternative" />
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-5">
                    <div class="xl:mt-12">
                        <h2 class="mb-6">Instant results for the marketing department</h2>
                        <ul class="list mb-7 space-y-2">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Features that will help you and your marketers</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Smooth learning curve due to the knowledge base</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Ready out-of-the-box with minor setup settings</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>
                        <a class="btn-outline-reg" href="article.html">Details</a>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of container -->
        </div>
        <!-- end of details 2 -->


        <!-- Details Lightbox -->
        <!-- Lightbox -->
        <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="lg:col-span-8">
                    <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                        <img class="inline rounded-lg" src={{asset("assets/landing/images/details-lightbox.jpg")}} alt="alternative" />
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-4">
                    <h3 class="mb-2">Goals Setting</h3>
                    <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
                    <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                    <h4 class="mt-7 mb-2.5">User Feedback</h4>
                    <p class="mb-4">This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                    <ul class="list mb-6 space-y-2">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Splash screen panel</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Statistics graph report</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Events calendar layout</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Location details screen</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Onboarding steps interface</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
                    <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
        <!-- end of details lightbox -->


        <!-- Details 3 -->
        <div class="pt-16 pb-12">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
                <div class="lg:col-span-5">
                    <div class="mb-16 lg:mb-0 xl:mt-16">
                        <h2 class="mb-6">Platform integration and life time free updates</h2>
                        <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and understand why current users are so excited when using Pavo
                            together with their teams.</p>
                        <p class="mb-4">We will promptly answer any questions and honor your requests based on the service level agreement</p>
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-7">
                    <div class="ml-14">
                        <img class="inline" src={{asset("assets/landing/images/details-3.jpg")}} alt="alternative" />
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of container -->
        </div>
        <!-- end of details 3 -->


        <!-- Statistics -->
        <div class="counter">
            <div class="container px-4 sm:px-8">
                
                <!-- Counter -->
                <div id="counter">
                    <div class="cell">
                        <div class="counter-value number-count" data-count="231">1</div>
                        <p class="counter-info">Happy Users</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="385">1</div>
                        <p class="counter-info">Issues Solved</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="159">1</div>
                        <p class="counter-info">Good Reviews</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="127">1</div>
                        <p class="counter-info">Case Studies</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="211">1</div>
                        <p class="counter-info">Orders Received</p>
                    </div>
                </div>
                <!-- end of counter -->

            </div> <!-- end of container -->
        </div> <!-- end of counter -->
        <!-- end of statistics -->


        <!-- Testimonials -->
        <div class="slider-1 py-32 bg-gray">
            <div class="container px-4 sm:px-8">
                <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">What do users think about Pavo</h2>

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">
                            
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src={{asset("assets/landing/images/testimonial-1.jpg")}} alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to integrate it properly into my business flow and it's great</p>
                                        <p class="testimonial-author">Jude Thorn - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src={{asset("assets/landing/images/testimonial-2.jpg")}} alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">We were so focused on launching as many campaigns as possible that we've forgotten to target our loyal customers</p>
                                        <p class="testimonial-author">Roy Smith - Developer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src={{asset("assets/landing/images/testimonial-3.jpg")}} alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love the reports it generates and the amazing high accuracy</p>
                                        <p class="testimonial-author">Marsha Singer - Marketer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src={{asset("assets/landing/images/testimonial-4.jpg")}} alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">We've been waiting for a powerful piece of software that can help businesses manage their marketing projects</p>
                                        <p class="testimonial-author">Tim Shaw - Designer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src={{asset("assets/landing/images/testimonial-5.jpg")}} alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">Searching for a great prototyping and layout design app was difficult but thankfully I found app suite quickly</p>
                                        <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src={{asset("assets/landing/images/testimonial-6.jpg")}} alt="alternative" />
                                    <div class="card-body">
                                        <p class="italic mb-3">The app support team is amazing. They've helped me with some issues and I am so grateful to the entire team</p>
                                        <p class="testimonial-author">Ann Blake - Developer</p>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div> <!-- end of container -->
        </div> <!-- end of slider-1 -->
        <!-- end of testimonials -->


        <!-- Pricing -->
        <div id="pricing" class="cards-2">
            <div class="absolute bottom-0 h-40 w-full bg-white"></div>
            <div class="container px-4 pb-px sm:px-8">
                <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">Pricing options for all budgets</h2>
                <p class="mb-16 text-white lg:max-w-3xl lg:mx-auto"> Our pricing plans are setup in such a way that any user can start enjoying Pavo without worrying so much about costs. They are flexible and work for any type of industry </p>

                @forelse($packages as $package)
                <!-- Card-->
                <div class="card p-2">
                    <div class="card-body">
                        <div class="card-title">{{$package->name}}</div>
                        <h1 class="text-xl text-gray-500">Rp. <span class=" line-through">{{number_format($package->price_before)}}</span></h1>
                        <h1 class="text-4xl">Rp. <span >{{number_format($package->price)}}</span></h1>
                        <div class="mt-4 max-h-60 description overflow-hidden">
                            {!!$package->description!!}
                        </div>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Beli Paket</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->
                @empty
                @endforelse
                <!-- Card-->
                {{-- <div class="card">
                    <div class="card-body">
                        <div class="card-title">ADVANCED</div>
                        <div class="price"><span class="currency">$</span><span class="value">39</span></div>
                        <div class="frequency">monthly</div>
                        <p>This is a more advanced package suited for medium companies</p>
                        <ul class="list mb-7 space-y-2 text-left">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>List building and relations</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Seamless platform integration</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Great performance on devices</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div>  --}}
                <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                {{-- <div class="card">
                    <div class="card-body">
                        <div class="card-title">COMPLETE</div>
                        <div class="price"><span class="currency">$</span><span class="value">49</span></div>
                        <div class="frequency">monthly</div>
                        <p>This is a comprehensive package designed for big organizations</p>
                        <ul class="list mb-7 text-left space-y-2">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>List building and relations</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Seamless platform integration</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Great performance on devices</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Community support and videos</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                        </div>
                    </div>
                </div>  --}}
                <!-- end of card -->
                <!-- end of card -->

            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->


        <!-- Conclusion -->
        <div id="download" class="basic-5">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">
                <div class="mb-16 lg:mb-0">
                    <img src={{asset("assets/landing/images/conclusion-smartphone.png")}} alt="alternative" />
                </div>
                <div class="lg:mt-24 xl:mt-44 xl:ml-12">
                    <p class="mb-9 text-gray-800 text-3xl leading-10">Team management mobile applications don’t get much better than Pavo. Download it today</p>
                    <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                    <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
                </div>
            </div> <!-- end of container -->
        </div> <!-- end of basic-5 -->
        <!-- end of conclusion -->


        <!-- Footer -->
        <div class="footer">
            <div class="container px-4 sm:px-8">
                {{-- <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Pavo is a mobile application for marketing automation and you can reach the team at <a class="text-indigo-600 hover:text-gray-500" href="mailto:email@domain.com">email@domain.com</a></h4> --}}
                <div class="social-container">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    {{-- <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x"></i>
                        </a>
                    </span> --}}
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x"></i>
                        </a>
                    </span>
                </div> <!-- end of social-container -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container px-4 sm:px-8 flex justify-between">
                <ul class="mb-4 list-unstyled p-small">
                    <li class="mb-2"><a href="article.html">Article Details</a></li>
                    <li class="mb-2"><a href="terms.html">Terms & Conditions</a></li>
                    <li class="mb-2"><a href="privacy.html">Privacy Policy</a></li>
                </ul>
                <p class="pb-2 p-small statement">Copyright © <a href="#your-link" class="no-underline">Sang Tutor</a></p>

                <img src={{asset("assets/logo.png")}} alt="alternative" class="h-10" />
                    
            </div> 

        <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->


        <!-- Scripts -->
        <script src={{asset("assets/landing/js/jquery.min.js")}}></script> <!-- jQuery for JavaScript plugins -->
        <script src={{asset("assets/landing/js/jquery.easing.min.js")}}></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src={{asset("assets/landing/js/swiper.min.js")}}></script> <!-- Swiper for image and text sliders -->
        <script src={{asset("assets/landing/js/jquery.magnific-popup.js")}}></script> <!-- Magnific Popup for lightboxes -->
        <script src={{asset("assets/landing/js/scripts.js")}}></script> <!-- Custom scripts -->
    </body>
</html>
