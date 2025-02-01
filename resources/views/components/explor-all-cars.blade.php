<script src="{{ asset('js/tiny-slider.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">

<style>
    .tns-controls {
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin-top: 1rem;
    }
    .tns-controls button {
        padding: 0.5rem;
    }
    .dot-active {
        background-color: black !important;
    }
    .dot-inactive {
        background-color: #9CA3AF !important;
    }
    /* Make images maintain aspect ratio */
    .slider-img {
        aspect-ratio: 16/9;
        object-fit: cover;
    }
</style>

<div class="bg-white p-4 md:p-8">
  <div class="max-w-6xl mx-auto">
    <h1 class="text-2xl md:text-4xl text-center mb-4 md:mb-8">Explore All Vehicles</h1>
    
    <!-- Responsive navigation buttons -->
    <div class="flex flex-wrap justify-center gap-2 md:gap-8 mb-4 md:mb-8 px-2">
      <button class="text-gray-600 border-b-2 border-gray-300 px-2 md:px-4 py-2 text-sm md:text-base whitespace-nowrap">Civilian Cars</button>
      <button class="text-gray-600 border-b-2 border-black px-2 md:px-4 py-2 text-sm md:text-base whitespace-nowrap">Crossovers & SUVs</button>
      <button class="text-gray-600 border-b-2 border-gray-300 px-2 md:px-4 py-2 text-sm md:text-base whitespace-nowrap">Industrial car</button>
    </div>

    <div class="slider">
      <div class="relative overflow-hidden rounded-lg bg-gradient-to-r from-gray-800 to-gray-900 text-white mx-2 md:mx-5">
        <img src="./images/car1.png" alt="Toyota Crown Signia" class="w-full slider-img"/>
        <div class="absolute bottom-0 left-0 right-0 p-3 md:p-6 bg-gradient-to-t from-black/60">
          <div class="flex justify-between items-end">
            <div>
              <p class="text-xs md:text-sm mb-1 md:mb-2">2025</p>
              <h2 class="text-xl md:text-2xl font-bold mb-1 md:mb-2">Toyota Crown Signia</h2>
              <p class="text-xs md:text-sm mb-2 md:mb-4">Experience the height of sophistication.</p>
              <div class="mb-2 md:mb-4">
                <span class="text-xl md:text-2xl font-bold">$43,590</span>
                <span class="text-xs md:text-sm ml-2">Starting MSRP*</span>
              </div>
              <div class="mb-2 md:mb-4">
                <span>39/37</span>
                <span class="text-xs md:text-sm ml-2">Up to Est. MPG*</span>
              </div>
              <div class="flex gap-2 md:gap-4">
                <button class="bg-white text-black px-3 md:px-6 py-1 md:py-2 rounded text-sm md:text-base">Explore</button>
                <button class="border border-white px-3 md:px-6 py-1 md:py-2 rounded text-sm md:text-base">Build</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="relative overflow-hidden rounded-lg bg-gradient-to-r from-gray-800 to-gray-900 text-white mx-2 md:mx-5">
        <img src="./images/car1.png" alt="Toyota Crown Signia" class="w-full slider-img"/>
        <div class="absolute bottom-0 left-0 right-0 p-3 md:p-6 bg-gradient-to-t from-black/60">
          <div class="flex justify-between items-end">
            <div>
              <p class="text-xs md:text-sm mb-1 md:mb-2">2025</p>
              <h2 class="text-xl md:text-2xl font-bold mb-1 md:mb-2">Toyota Crown Signia</h2>
              <p class="text-xs md:text-sm mb-2 md:mb-4">Experience the height of sophistication.</p>
              <div class="mb-2 md:mb-4">
                <span class="text-xl md:text-2xl font-bold">$43,590</span>
                <span class="text-xs md:text-sm ml-2">Starting MSRP*</span>
              </div>
              <div class="mb-2 md:mb-4">
                <span>39/37</span>
                <span class="text-xs md:text-sm ml-2">Up to Est. MPG*</span>
              </div>
              <div class="flex gap-2 md:gap-4">
                <button class="bg-white text-black px-3 md:px-6 py-1 md:py-2 rounded text-sm md:text-base">Explore</button>
                <button class="border border-white px-3 md:px-6 py-1 md:py-2 rounded text-sm md:text-base">Build</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="relative overflow-hidden rounded-lg bg-gradient-to-r from-gray-800 to-gray-900 text-white mx-2 md:mx-5">
        <img src="./images/car1.png" alt="Toyota Crown Signia" class="w-full slider-img"/>
        <div class="absolute bottom-0 left-0 right-0 p-3 md:p-6 bg-gradient-to-t from-black/60">
          <div class="flex justify-between items-end">
            <div>
              <p class="text-xs md:text-sm mb-1 md:mb-2">2025</p>
              <h2 class="text-xl md:text-2xl font-bold mb-1 md:mb-2">Toyota Crown Signia</h2>
              <p class="text-xs md:text-sm mb-2 md:mb-4">Experience the height of sophistication.</p>
              <div class="mb-2 md:mb-4">
                <span class="text-xl md:text-2xl font-bold">$43,590</span>
                <span class="text-xs md:text-sm ml-2">Starting MSRP*</span>
              </div>
              <div class="mb-2 md:mb-4">
                <span>39/37</span>
                <span class="text-xs md:text-sm ml-2">Up to Est. MPG*</span>
              </div>
              <div class="flex gap-2 md:gap-4">
                <button class="bg-white text-black px-3 md:px-6 py-1 md:py-2 rounded text-sm md:text-base">Explore</button>
                <button class="border border-white px-3 md:px-6 py-1 md:py-2 rounded text-sm md:text-base">Build</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat for other slides with the same responsive classes -->
    </div>

    <div class="flex justify-center items-center gap-2 md:gap-4 mt-4 md:mt-8">
      <div class="flex gap-1 md:gap-2" id="custom-dots"></div>
      <span class="text-xs md:text-sm text-gray-600" id="slider-counter">1 of 4</span>
    </div>

    <div class="flex flex-col md:flex-row justify-center gap-2 md:gap-4 mt-4 md:mt-8">
      <button onclick="exploreAllVehicles()" class="bg-white border border-gray-300 px-4 md:px-6 py-2 rounded text-sm md:text-base">
        Explore All Vehicles
      </button>
      <button onclick="searchInventory()" class="bg-white border border-gray-300 px-4 md:px-6 py-2 rounded flex items-center justify-center text-sm md:text-base">
        Search Inventory
        <svg class="w-3 h-3 md:w-4 md:h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Responsive configuration for the slider
    const slider = tns({
        "container": ".slider",
        "items": 1, // Start with 1 item on mobile
        "center": true,
        "loop": false,
        "swipeAngle": false,
        "arrowKeys": true,
        "mouseDrag": true,
        "speed": 400,
        "controlsPosition": 'bottom',
        "controlsText": [
            '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>', 
            '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
        ],
        "nav": false,
        "responsive": {
            768: {
                "items": 2, // Show 2 items on tablets and up
                "gutter": 20
            },
            1024: {
                "items": 2, // Keep 2 items on desktop but with more gutter
                "gutter": 30
            }
        }
    });

    const sliderInfo = slider.getInfo();
    const totalSlides = sliderInfo.slideCount;
    const counterElement = document.getElementById('slider-counter');
    const dotsContainer = document.getElementById('custom-dots');

    // Generate maximum 4 dots
    const maxDots = Math.min(4, totalSlides);
    for (let i = 0; i < maxDots; i++) {
        const dot = document.createElement('button');
        dot.className = `w-1.5 h-1.5 md:w-2 md:h-2 rounded-full ${i === 0 ? 'dot-active' : 'dot-inactive'}`;
        dot.onclick = () => {
            const slideIndex = Math.floor((i / maxDots) * totalSlides);
            slider.goTo(slideIndex);
        };
        dotsContainer.appendChild(dot);
    }

    // Update counter and dots on slide change
    slider.events.on('indexChanged', function(info) {
        const currentIndex = info.index;
        counterElement.textContent = `${currentIndex + 1} of ${totalSlides}`;

        // Update dots based on current position
        const dots = dotsContainer.getElementsByTagName('button');
        Array.from(dots).forEach((dot, index) => {
            const segmentSize = totalSlides / maxDots;
            const currentSegment = Math.floor(currentIndex / segmentSize);
            dot.className = `w-1.5 h-1.5 md:w-2 md:h-2 rounded-full ${index === currentSegment ? 'dot-active' : 'dot-inactive'}`;
        });
    });
});

function exploreAllVehicles() {
    window.location.href = "#";
}

function searchInventory() {
    window.location.href = "#";
}
</script>