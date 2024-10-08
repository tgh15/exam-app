<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href={{asset("assets/images/logos/favicon.png")}} />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <!-- Core Css -->
    <link rel="stylesheet" href={{asset("assets/css/theme.css")}} />
    <title>Modernize TailwindCSS HTML Admin Template</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-slate-100">
    <main>
        <!--start the project-->
        <div id="main-wrapper" class=" flex">
            @include("layouts.navigation")
            <div class=" w-full page-wrapper overflow-hidden">

                @include("layouts.header")

                <!-- Main Content -->
                <main class="h-full overflow-y-auto  max-w-full  pt-4">
                    <div class="container full-container py-5 flex flex-col gap-6">
                        <div class="card-body ">
                            @if($errors->any())
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            <div class="bg-red-400 border text-sm text-white rounded-md p-4" role="alert">
                                                <span class="font-bold">Danger</span> {{$error}}
                                              </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            {{$slot}}
                        </div>
                    </div>
                </main>
                <!-- Main Content End -->

            </div>
        </div>
        <!--end of project-->
    </main>



    {{-- <script src={{asset("assets/libs/jquery/dist/jquery.min.js")}}></script> --}}
    <script src={{asset("assets/libs/simplebar/dist/simplebar.min.js")}}></script>
    <script src={{asset("assets/libs/iconify-icon/dist/iconify-icon.min.js")}}></script>
    <script src={{asset("assets/libs/@preline/dropdown/index.js")}}></script>
    <script src={{asset("assets/libs/@preline/overlay/index.js")}}></script>
    {{-- <script src={{asset("assets/js/sidebarmenu.js")}}></script> --}}
    <script src="https://cdn.tiny.cloud/1/fwxbc8l73byh3acjud3x6lfpzh5i9n8drah9njkgsx6tco3d/tinymce/6/tinymce.min.js"></script>



    {{-- <script src={{asset("assets/libs/apexcharts/dist/apexcharts.min.js")}}></script> --}}
    {{-- <script src={{asset("assets/js/dashboard.js")}}></script> --}}
    @stack('js')
</body>

</html>