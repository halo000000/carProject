<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Your Car</title>
    <style>
        .custom-file-upload {
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            background-color: #f3f4f6;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
        }
        .custom-file-upload:hover {
            background-color: #e5e7eb;
        }
    </style>
        @vite('resources/css/app.css')

</head>
<body>
    

{{-- navbar  --}}
<x-navbar />
{{-- end navbar --}}
<div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-2xl p-8 w-full max-w-4xl">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Sell Your Car</h1>
        <form id="carSellForm" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="carName" class="block text-sm font-medium text-gray-700 mb-1">Car Name</label>
                    <input type="text" id="carName" name="carName" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label for="carModel" class="block text-sm font-medium text-gray-700 mb-1">Car Model</label>
                    <input type="text" id="carModel" name="carModel" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label for="carYear" class="block text-sm font-medium text-gray-700 mb-1">Year</label>
                    <input type="number" id="carYear" name="carYear" required min="1900" max="2099" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label for="carPrice" class="block text-sm font-medium text-gray-700 mb-1">Price ($)</label>
                    <input type="number" id="carPrice" name="carPrice" required min="0" step="0.01" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label for="carMileage" class="block text-sm font-medium text-gray-700 mb-1">Mileage</label>
                    <input type="number" id="carMileage" name="carMileage" required min="0" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label for="carColor" class="block text-sm font-medium text-gray-700 mb-1">Color</label>
                    <input type="text" id="carColor" name="carColor" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>
            <div>
                <label for="carDescription" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea id="carDescription" name="carDescription" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Car Photos (Max 4)</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4" id="photoUploadContainer">
                    <div class="relative">
                        <label for="photo1" class="custom-file-upload w-full h-32 flex items-center justify-center">
                            <span class="text-gray-500">Upload Photo</span>
                        </label>
                        <input type="file" id="photo1" name="photo1" accept="image/*" class="hidden" onchange="previewImage(this, 0)">
                    </div>
                    <div class="relative">
                        <label for="photo2" class="custom-file-upload w-full h-32 flex items-center justify-center">
                            <span class="text-gray-500">Upload Photo</span>
                        </label>
                        <input type="file" id="photo2" name="photo2" accept="image/*" class="hidden" onchange="previewImage(this, 1)">
                    </div>
                    <div class="relative">
                        <label for="photo3" class="custom-file-upload w-full h-32 flex items-center justify-center">
                            <span class="text-gray-500">Upload Photo</span>
                        </label>
                        <input type="file" id="photo3" name="photo3" accept="image/*" class="hidden" onchange="previewImage(this, 2)">
                    </div>
                    <div class="relative">
                        <label for="photo4" class="custom-file-upload w-full h-32 flex items-center justify-center">
                            <span class="text-gray-500">Upload Photo</span>
                        </label>
                        <input type="file" id="photo4" name="photo4" accept="image/*" class="hidden" onchange="previewImage(this, 3)">
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="w-full bg-slate-900 text-white font-bold py-3 px-4 rounded-md hover:bg-slate-700 transition duration-300 ease-in-out">
                    Submit Listing
                </button>
            </div>
        </form>
    </div>


    <script >document.addEventListener("DOMContentLoaded", () => {
        const form = document.getElementById("carSellForm")
        const photoUploadContainer = document.getElementById("photoUploadContainer")
      
        form.addEventListener("submit", (e) => {
          e.preventDefault()
          // Here you would typically send the form data to your server
          // For this example, we'll just log it to the console
          const formData = new FormData(form)
          for (const [key, value] of formData.entries()) {
            console.log(key, value)
          }
          alert("Form submitted successfully!")
        })
      })
      
      function previewImage(input, index) {
        const file = input.files[0]
        if (file) {
          const reader = new FileReader()
          reader.onload = (e) => {
            const container = input.parentElement
            container.style.backgroundImage = `url(${e.target.result})`
            container.style.backgroundSize = "cover"
            container.style.backgroundPosition = "center"
            const span = container.querySelector("span")
            if (span) span.style.display = "none"
          }
          reader.readAsDataURL(file)
        }
      }
      
      </script>
      
</div>
    {{-- footer --}}
    @include('components.footer')
    {{-- end footer --}}
</body>
</html>
