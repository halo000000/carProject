<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>buy- </title>
    @vite('resources/css/app.css')

</head>
<body>
    <x-navbar></x-navbar>




        <style>
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            .animate-fadeInUp {
                animation: fadeInUp 0.5s ease-out forwards;
            }
            .animate-spin {
                animation: spin 1s linear infinite;
            }
            @keyframes spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
        </style>

        <div class="container mx-auto px-4 py-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold mb-4">Find Your Perfect Car</h2>
                <div class="flex flex-col md:flex-row gap-4 mb-4">
                    <div class="flex-grow">
                        <input type="text" id="searchInput" placeholder="Search cars..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex gap-4">
                        <select id="priceFilter" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Price Range</option>
                            <option value="0-20000">$0 - $20,000</option>
                            <option value="20000-40000">$20,000 - $40,000</option>
                            <option value="40000-60000">$40,000 - $60,000</option>
                            <option value="60000+">$60,000+</option>
                        </select>
                        <select id="yearFilter" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Year</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                        </select>
                    </div>
                </div>
                <button id="searchButton" class="w-full  bg-slate-900 text-white font-bold py-2 px-4 rounded-lg hover:bg-slate-950 transition duration-300">Search</button>
            </div>
            <div id="loadingSpinner" class="hidden mt-8 flex justify-center">
                <svg class="animate-spin h-10 w-10 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </div>
            <div id="results" class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Results will be dynamically inserted here -->
            </div>
        </div>

    
        <script >document.addEventListener("DOMContentLoaded", () => {
            const searchInput = document.getElementById("searchInput")
            const priceFilter = document.getElementById("priceFilter")
            const yearFilter = document.getElementById("yearFilter")
            const searchButton = document.getElementById("searchButton")
            const resultsContainer = document.getElementById("results")
          
            // Sample car data (replace with your actual data or API call)
            const cars = [
              { name: "Toyota Camry", price: 25000, year: 2022 },
              { name: "Honda Civic", price: 22000, year: 2021 },
              { name: "Ford Mustang", price: 45000, year: 2023 },
              { name: "Chevrolet Malibu", price: 28000, year: 2022 },
              { name: "Tesla Model 3", price: 55000, year: 2023 },
              { name: "BMW 3 Series", price: 65000, year: 2023 },
            ]
          
            searchButton.addEventListener("click", performSearch)
          
            function performSearch() {
              const searchTerm = searchInput.value.toLowerCase()
              const selectedPrice = priceFilter.value
              const selectedYear = yearFilter.value
          
              const filteredCars = cars.filter((car) => {
                const matchesSearch = car.name.toLowerCase().includes(searchTerm)
                const matchesPrice = selectedPrice ? isPriceInRange(car.price, selectedPrice) : true
                const matchesYear = selectedYear ? car.year.toString() === selectedYear : true
          
                return matchesSearch && matchesPrice && matchesYear
              })
          
              displayResults(filteredCars)
            }
          
            function isPriceInRange(price, range) {
              const [min, max] = range.split("-").map(Number)
              return price >= min && (max ? price <= max : true)
            }
          
            function displayResults(cars) {
              resultsContainer.innerHTML = ""
              if (cars.length === 0) {
                resultsContainer.innerHTML = '<p class="text-center text-gray-500">No cars found matching your criteria.</p>'
                return
              }
          
              cars.forEach((car) => {
                const carElement = document.createElement("div")
                carElement.className = "bg-white rounded-lg shadow-md p-4"
                carElement.innerHTML = `
                          <h3 class="text-xl font-semibold mb-2">${car.name}</h3>
                          <p class="text-gray-600">Price: $${car.price.toLocaleString()}</p>
                          <p class="text-gray-600">Year: ${car.year}</p>
                      `
                resultsContainer.appendChild(carElement)
              })
            }
          })
          
          </script>

    
    



















    
    <div class="min-h-screen grid grid-cols-1 md:grid-cols-2 gap-8 p-5 ">
        <!-- Car Cards Container -->
        
     
    <x-car-card></x-car-card>
    <x-car-card></x-car-card>
    <x-car-card></x-car-card>
    <x-car-card></x-car-card>
    <x-car-card></x-car-card>
    <x-car-card></x-car-card>


    </div>
    @include('components.footer')
</body>
</html>