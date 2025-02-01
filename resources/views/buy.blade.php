<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buy- </title>
    @vite('resources/css/app.css')

</head>
<body>
    <x-navbar></x-navbar>
    <div class="container h-screen mx-auto px-4 py-8">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Left Column - Gallery -->
            <div class="flex gap-4">
                <!-- Thumbnails -->
                <div class="flex flex-col gap-4">
                    <button class="border-2 border-black p-1 rounded">
                        <img src="img/Link [assets-wrapper]3.png" alt="Car view 1" class="w-20 h-20 object-cover" />
                    </button>
                    <button class="border border-gray-200 p-1 rounded">
                        <img src="img/Image [is-loaded]2.png" alt="Car view 2" class="w-20 h-20 object-cover" />
                    </button>
                    <button class="border border-gray-200 p-1 rounded">
                        <img src="img/Image [is-loaded].png" alt="Car view 3" class="w-20 h-20 object-cover" />
                    </button>
                    <button class="border border-gray-200 p-1 rounded">
                        <img src="img/Link [assets-wrapper]3.png" alt="Car view 4" class="w-20 h-20 object-cover" />
                    </button>
                </div>

                <!-- Main Image -->
                <div class="flex-1 bg-gray-100 rounded-lg">
                    <img src="img/Link [assets-wrapper]3.png" alt="Main car view"
                        class="w-full h-full object-contain" />
                </div>
            </div>

            <!-- Right Column - Content -->
            <div class="flex flex-col gap-6">
                <h1 class="text-4xl font-bold">buy the best car in the world just with a few buttons</h1>

                <!-- Rating -->
                <div class="flex items-center gap-2">
                    <div class="flex">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <span class="text-gray-600">157 Reviews</span>
                </div>

                <!-- Price -->
                <div class="flex items-center gap-4">
                    <span class="text-4xl font-bold">$4900</span>
                    <span class="text-2xl text-gray-400 line-through">$5000</span>
                </div>
                <span class="inline-flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Save 50% right now
                </span>

                <!-- Features -->
                <div>
                    <h2 class="font-bold mb-2">Features:</h2>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Made in USA
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            fully Electrical
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            best quality
                        </li>
                    </ul>
                </div>

                <!-- Colors -->
                <div>
                    <h2 class="font-bold mb-2">Colors</h2>
                    <div class="flex gap-2">
                        <button
                            class="w-8 h-8 rounded-full bg-emerald-500 ring-2 ring-offset-2 ring-emerald-500"></button>
                        <button class="w-8 h-8 rounded-full bg-orange-500"></button>
                        <button class="w-8 h-8 rounded-full bg-blue-500"></button>
                        <button class="w-8 h-8 rounded-full bg-navy-800"></button>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-4">
                    <button class="flex-1 bg-black text-white py-3 rounded-lg hover:bg-gray-800 transition-colors">
                        Add to cart
                    </button>
                    <button class="p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>

                <!-- Trust Badges -->
                <div class="flex flex-col gap-2 text-gray-600">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        100% Secured Payment
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        sell by the Professionals
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')

</body>
</html>
