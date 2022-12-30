
<x-guest-layout>

    <header>
        <nav class="mt-6">
            <ul class="flex justify-center  items-center space-x-4">
                <li><a href="/" class="text-md font-semibold text-gray-600 hover:text-gray-800">Home</a></li>
                <li><a href="{{ route("login") }}" class="text-md font-semibold text-gray-600 hover:text-gray-800">Login</a></li>
                <li><a href="{{ route("register") }}" class="text-md font-semibold text-gray-600 hover:text-gray-800">Register as guide</a></li>
            </ul>
        </nav>
    </header>
    <!-- component -->
    <section>
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap justify-center">
                <img alt="ecommerce" width="200" src="https://www.whitmorerarebooks.com/pictures/medium/2465.jpg">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$destination->destinationLocation}}</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$destination->destinationName}}</h1>
                    <div class="flex mb-4">
                      <span class="flex items-center">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                          <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                          <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                          <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                          <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                          <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <span class="text-gray-600 ml-3">4 Reviews</span>
                      </span>
                        <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                        <a class="text-gray-500">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                    <form action="{{ route("booking") }}" method="POST">
                    @csrf
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                        <div class="flex items-center mr-5  ">
                            <span class="mr-2">Pembayaran</span>
                            <select name="metode_pembayaran">
                                <option value="">- Pilih metode -</option>
                                <option value="BCA">BCA</option>
                                <option value="BNI">BNI</option>
                                <option value="MANDIRI">MANDIRI</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">Guide</span>
                            <div class="relative">
                                <input type="hidden" name="destination_id" value="{{ $destination->id }}">
                                <select name="user_id" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10" required>
                                    <option value="">- Pilih guide -</option>
                                    @foreach($destination->guide as $c)
                                        <option value="{{ $c->id }}-{{ $c->pivot->price }}">{{ $c->name }} - Rp. {{number_format($c->pivot->price)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center my-3">
                            <span class="mr-6">Name</span>
                            <input type="text" name="customerName" class="w-full">
                        </div>
                        <div class="flex items-center my-3">
                            <span class="mr-6">Phone</span>
                            <input type="number" name="customerPhone" class="w-full">
                        </div>
                        <div class="flex items-center my-3">
                            <span class="mr-2">Address</span>
                            <textarea name="customerAddress" class="w-full"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-primary-button>Booking</x-primary-button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
