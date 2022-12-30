<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TourID</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container my-5">
    <div class="row">
        <header>
            <nav class="mt-6">
                <ul class="flex justify-center  items-center space-x-4">
                    <li><a href="/" class="text-md font-semibold text-gray-600 hover:text-gray-800">Home</a></li>
                    <li><a href="{{ route("login") }}" class="text-md font-semibold text-gray-600 hover:text-gray-800">Login</a></li>
                    <li><a href="{{ route("register") }}" class="text-md font-semibold text-gray-600 hover:text-gray-800">Register as guide</a></li>
                </ul>
            </nav>
        </header>
        <section class="text-gray-600 body-font h-screen">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4 text-left mb-10">Provinsi</div>
                <div class="flex overflow-x-auto -m-4 text-left items-center">
                    @foreach($provinsi as $p)
                        <a href="">
                            <div class="relative rounded-[15px] bg-white p-6">
                                <div class="space-y-4">
                                    <p class="text-sm font-semibold text-slate-800">{{ $p->name }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="flex flex-wrap -m-4 text-left mt-10">Destinasi wisata</div>
                <div class="flex flex-wrap -m-4 text-left mt-10">
                    @foreach($destinations as $destination)
                        <a href="{{ route("detail-destinations",$destination->destinationSlug) }}" class="group relative w-96 overflow-hidden rounded-[16px] bg-gray-300 p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 hover:to-pink-500">
                            <div class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible"></div>
                            <div class="relative rounded-[15px] bg-white p-6">
                                <div class="space-y-4">
                                    <img src="https://nuxt.com/assets/home/ux-fast-light.svg" alt="" />
                                    <p class="text-lg font-semibold text-slate-800">{{ $destination->destinationName }}</p>
                                    <p class="font-md text-slate-500">{{ $destination->destinationLocation }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
