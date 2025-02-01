<main class="bg-white">
  <div class="relative min-h-[100svh]">
    <!-- Hero Section -->
    <div class="relative flex flex-col md:flex-row min-h-[100svh]">
      <!-- Left Content -->
      <div class="relative md:absolute left-0 top-0 w-full md:w-1/2 h-full flex items-center z-10 px-6 sm:px-8 md:px-12 py-12 md:py-0">
        <div class="w-full text-center md:text-left">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
            with Carshop you can
            <br class="hidden md:block"/>
            do anything cars
          </h1>
          <button class="mt-4 md:mt-8 bg-black text-white px-6 sm:px-8 py-2.5 sm:py-3 rounded-full hover:bg-gray-800 transition-colors text-sm sm:text-base">
            Learn More
          </button>
        </div>
      </div>

      <!-- Right Image -->
      <div class="relative md:absolute right-0 top-0 w-full md:w-1/2 h-[50vh] md:h-full order-first md:order-none">
        <div class="relative w-full h-full">
          <img 
            src="./Images/car1.png" 
            alt="Featured car" 
            class="w-full h-full object-cover"
            style="filter: brightness(0.8);"
            loading="eager"
          />
          <!-- Gradient Overlay - Adaptive for mobile and desktop -->
          <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-white via-transparent to-transparent"></div>
        </div>
      </div>
    </div>
  </div>
</main>

<style>
/* Optional: Add smooth transitions for gradient changes */
.bg-gradient-to-t,
.bg-gradient-to-r {
transition: opacity 0.3s ease;
}

/* Optional: Improve image rendering */
img {
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
</style>