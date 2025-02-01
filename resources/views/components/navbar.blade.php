<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Bazar</title>
</head>
<body class="bg-gray-100">

    <nav class="bg-white flex h-16 items-center justify-between border-b px-4 md:px-6">
        <!-- Logo -->
        <a href="/" class="text-xl font-semibold">
            Auto bazar
        </a>

        <!-- Navigation Links (hidden on mobile) -->
        <div class="hidden items-center gap-6 md:flex" id="nav-links">
            <a href="/" class="flex items-center gap-1">Home</a>
            <a href="/info" class="flex items-center gap-1">About</a>
            <a href="/cars" class="flex items-center gap-1">Buy cars</a>
            <a href="/carParts" class="flex items-center gap-1">Buy car parts</a>
            <a href="/sellCar" class="flex items-center gap-1">Sell car parts</a>
            <a href="/car-category" class="flex items-center gap-1">car category</a>
        </div>

        <!-- User Icon and Hamburger Menu -->
        <div class="flex items-center gap-4">
            <button id="profile-btn" class="rounded-full p-2 hover:bg-gray-100">
              <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_71_295)">
                <path d="M33.6406 17.5046C33.649 21.5279 32.1306 25.4047 29.3917 28.3524C28.766 29.0369 28.0797 29.6635 27.3413 30.2246C24.5539 32.3493 21.1457 33.5 17.6406 33.5C14.1354 33.5 10.7273 32.3493 7.93988 30.2246C7.20146 29.6635 6.5152 29.0369 5.8895 28.3524C4.12167 26.4397 2.84765 24.1245 2.17814 21.6077C1.50863 19.0909 1.46386 16.4488 2.04773 13.9108C2.6316 11.3728 3.82645 9.01567 5.52849 7.04422C7.23053 5.07277 9.38828 3.5466 11.8143 2.59827C14.2403 1.64994 16.8612 1.30814 19.4494 1.60255C22.0376 1.89697 24.5147 2.8187 26.6656 4.28768C28.8165 5.75665 30.5762 7.72845 31.7917 10.0318C33.0073 12.3351 33.6419 14.9003 33.6406 17.5046Z" fill="white" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M20.1711 11.3468C19.4219 10.8464 18.5412 10.5793 17.6403 10.5793C16.4321 10.5793 15.2734 11.0591 14.4191 11.9133C13.5647 12.7674 13.0847 13.926 13.0847 15.134C13.0847 16.0349 13.3519 16.9155 13.8525 17.6646C14.3531 18.4136 15.0646 18.9974 15.897 19.3421C16.7294 19.6868 17.6453 19.777 18.529 19.6012C19.4126 19.4255 20.2243 18.9917 20.8614 18.3548C21.4986 17.7178 21.9325 16.9062 22.1083 16.0226C22.2841 15.1391 22.1938 14.2232 21.849 13.3909C21.5042 12.5586 20.9202 11.8473 20.1711 11.3468ZM14.9035 11.0395C15.7135 10.4983 16.6659 10.2095 17.6403 10.2095C18.9468 10.2095 20.1997 10.7284 21.1235 11.6519C22.0472 12.5755 22.5662 13.828 22.5662 15.134C22.5662 16.1079 22.2773 17.06 21.7361 17.8699C21.1948 18.6797 20.4255 19.3109 19.5254 19.6837C18.6253 20.0564 17.6348 20.154 16.6792 19.9639C15.7236 19.7739 14.8459 19.3048 14.157 18.6161C13.4681 17.9274 12.999 17.0499 12.809 16.0947C12.6189 15.1395 12.7165 14.1494 13.0893 13.2496C13.4621 12.3497 14.0934 11.5806 14.9035 11.0395Z" fill="#D8D8D8"/>
                <path d="M20.1711 11.3468L19.6156 12.1784M20.1711 11.3468C19.4219 10.8464 18.5412 10.5793 17.6403 10.5793C16.4321 10.5793 15.2734 11.0591 14.4191 11.9133C13.5647 12.7674 13.0847 13.926 13.0847 15.134C13.0847 16.0349 13.3519 16.9155 13.8525 17.6646C14.3531 18.4136 15.0646 18.9974 15.897 19.3421C16.7294 19.6868 17.6453 19.777 18.529 19.6012C19.4126 19.4255 20.2243 18.9917 20.8614 18.3548C21.4986 17.7178 21.9325 16.9062 22.1083 16.0226C22.2841 15.1391 22.1938 14.2232 21.849 13.3909C21.5042 12.5586 20.9202 11.8473 20.1711 11.3468ZM14.9035 11.0395C15.7135 10.4983 16.6659 10.2095 17.6403 10.2095C18.9468 10.2095 20.1997 10.7284 21.1235 11.6519C22.0472 12.5755 22.5662 13.828 22.5662 15.134C22.5662 16.1079 22.2773 17.06 21.7361 17.8699C21.1948 18.6797 20.4255 19.3109 19.5254 19.6837C18.6253 20.0564 17.6348 20.154 16.6792 19.9639C15.7236 19.7739 14.8459 19.3048 14.157 18.6161C13.4681 17.9274 12.999 17.0499 12.809 16.0947C12.6189 15.1395 12.7165 14.1494 13.0893 13.2496C13.4621 12.3497 14.0934 11.5806 14.9035 11.0395Z" stroke="black" stroke-width="2"/>
                <path d="M27.9772 28.3689C27.4104 26.437 26.3092 24.6904 24.7843 23.3395C22.8141 21.5943 20.273 20.6308 17.6408 20.6308C15.0087 20.6308 12.4676 21.5943 10.4974 23.3395C8.97248 24.6904 7.8713 26.437 7.30448 28.3689C7.20454 28.2734 7.10596 28.1764 7.00879 28.078C7.69091 25.91 9.02188 23.9977 10.8282 22.6034C12.7795 21.0973 15.1753 20.2806 17.6406 20.2813C20.1058 20.2806 22.5021 21.0973 24.4534 22.6034C26.2598 23.9977 27.5908 25.91 28.2729 28.078C28.1757 28.1764 28.0771 28.2734 27.9772 28.3689Z" fill="#D8D8D8" stroke="black" stroke-width="2"/>
                </g>
                <defs>
                <clipPath id="clip0_71_295">
                <rect width="34" height="34" fill="white" transform="translate(0.640625 0.5)"/>
                </clipPath>
                </defs>
                </svg>
                
                <span class="sr-only">User account</span>
            </button>
            <button id="hamburger-btn" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="/" class="block rounded-md px-3 py-2 text-base font-medium">Home</a>
            <a href="/info" class="block rounded-md px-3 py-2 text-base font-medium">About</a>
            <a href="/cars" class="block rounded-md px-3 py-2 text-base font-medium">Buy cars</a>
            <a href="/carParts" class="block rounded-md px-3 py-2 text-base font-medium">Buy car parts</a>
            <a href="/sellCar" class="block rounded-md px-3 py-2 text-base font-medium">Sell car parts</a>
            <a href="/car-category" class="block rounded-md px-3 py-2 text-base font-medium">car category</a>
        </div>
    </div>

    <!-- Profile Card (hidden by default) -->
    <div id="profile-card" class="hidden absolute right-4 mt-2 w-80 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5  z-50">
        <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">User Profile</h3>
            <div id="profile-info">
                <p><strong>Username:</strong> <span id="username">JohnDoe123</span></p>
                <p><strong>Email:</strong> <span id="email">john@example.com</span></p>
                <p><strong>Phone:</strong> <span id="phone">+1 234 567 8900</span></p>
                <p><strong>Age:</strong> <span id="age">30</span></p>
                <p><strong>Gender:</strong> <span id="gender">Male</span></p>
                <p><strong>Location:</strong> <span id="location">New York, USA</span></p>
            </div>
            <div id="profile-edit" class="hidden">
                <input id="edit-username" class="w-full mb-2 p-1 border rounded" placeholder="Username">
                <input id="edit-email" class="w-full mb-2 p-1 border rounded" placeholder="Email">
                <input id="edit-phone" class="w-full mb-2 p-1 border rounded" placeholder="Phone">
                <input id="edit-age" class="w-full mb-2 p-1 border rounded" placeholder="Age">
                <input id="edit-gender" class="w-full mb-2 p-1 border rounded" placeholder="Gender">
                <input id="edit-location" class="w-full mb-2 p-1 border rounded" placeholder="Location">
            </div>
            <div class="mt-4 flex justify-between">
                <button id="edit-btn" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</button>
                <button id="logout-btn" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

