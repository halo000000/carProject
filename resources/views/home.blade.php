<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>carProject</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar></x-navbar>
    @include('components.hero')
    <x-after-hero></x-after-hero>
    <x-shoping-cart-tool></x-shoping-cart-tool>
    <x-explor-all-cars></x-explor-all-cars>
    <div class=" my-10 min-h-screen  grid grid-cols-1 gap-6 ">
        <x-what-we-do-section title="Buy any type of Car" description="know with us you can buy any type of car from all Iraq and Kurdistan region" image="./images/car1.png" buttonLink="#" buttonText="Buy Right Now" imageAlt="car image" aboveTitle="FEATURED PRODUCTS" ></x-what-we-do-section>
        <x-what-we-do-section title="Buy any type of Car" description="know with us you can buy any type of car from all Iraq and Kurdistan region" image="./images/car1.png" buttonLink="#" buttonText="Buy Right Now" imageAlt="car image" aboveTitle="FEATURED PRODUCTS" ></x-what-we-do-section>
        <x-what-we-do-section title="Buy any type of Car" description="know with us you can buy any type of car from all Iraq and Kurdistan region" image="./images/car1.png" buttonLink="#" buttonText="Buy Right Now" imageAlt="car image" aboveTitle="FEATURED PRODUCTS" ></x-what-we-do-section>
        
    </div>

    @include('components.footer')
</body>
</html>