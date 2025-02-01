@props(['title', 'description', 'aboveTitle', 'image', 'imageAlt', 'buttonText', 'buttonLink'])

<div class="relative overflow-hidden">
    <!-- Card Container -->
    <div class="grid md:grid-cols-2">
        <!-- Left Side - Image -->
        <div class="relative h-[400px] md:h-[500px]">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" class="absolute inset-0 w-full h-full object-cover" />

        </div>

        <!-- Right Side - Content -->
        <div class="bg-[#4a444a] text-white p-8 md:p-12 flex flex-col justify-center">
            <div class="max-w-md">
                <!-- Year -->
                <p class="text-lg mb-2">{{ $aboveTitle }}</p>

                <!-- Model -->
                <h2 class="text-3xl md:text-4xl font-medium mb-4">
                    {{ $title }}
                </h2>

                <!-- Tagline -->
                <p class=" text-base md:text-xl font-light mb-8">
                    {{ $description }}
                </p>

                <!-- Buttons -->
                <div class="flex gap-4">
                    <a href="{{ $buttonLink }}"
                        class="bg-white text-black px-8 py-2 rounded-full hover:bg-gray-100 transition-colors">
                        {{ $buttonText }}
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
