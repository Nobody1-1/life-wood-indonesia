<x-app-layout>
    <div class="relative w-full h-full flex sm:flex-row flex-col">
        <div class="w-full h-3/4 bg-[#6B7D75] absolute z-0">

        </div>
        <div class="flex pt-48 text-white flex-col px-20 md:text-5xl text-3xl font-semibold z-50">
            <p>Welcome To</p>
            <p class="">PT. Life Wood Indonesia Tbk.</p>
            <p class="md:text-xl text-lg font-normal mt-2 w-full ">PT Life Wood Indonesia specializes in manufacturing and exporting high-quality wooden furniture. </p>
            <a href="{{route('product')}}" class="text-xl flex items-center justify-center font-normal px-5 text-black hover:border-none hover:bg-white bg-transparent md:mt-12 mt-8 rounded-3xl border-black border-2 py-2 w-36 h-12">
                Explore
            </a>
            <div class="animate-bounce pt-10">
                <div class="text-4xl pl-14 text-[#FF0004]"><svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M6.293 6.293a1 1 0 0 1 1.414 0L12 10.586l4.293-4.293a1 1 0 1 1 1.414 1.414l-5 5a1 1 0 0 1-1.414 0l-5-5a1 1 0 0 1 0-1.414m0 6a1 1 0 0 1 1.414 0L12 16.586l4.293-4.293a1 1 0 0 1 1.414 1.414l-5 5a1 1 0 0 1-1.414 0l-5-5a1 1 0 0 1 0-1.414"/></g></svg></div>
                <p class="text-lg font-semibold text-gray-700 mb-2">To see our product</p>
            </div>
        </div>
        <div x-data="{ activeIndex: 0, images: ['{{ asset('images/kursi.png') }}', '{{ asset('images/vatra 1.png') }}', '{{ asset('images/vatt.png') }}'] }" x-init="setInterval(() => activeIndex = (activeIndex + 1) % images.length, 3000)" class="h-full w-1/2 mx-auto sm:mx-0 sm:mt-56 sm:mr-20 z-50">

            <!-- Gambar -->
            <img :src="images[activeIndex]"
                class="fade h-[350px] transition-opacity duration-700 ease-in-out"
                alt="Gambar Kursi">
            <!-- Indikator (Titik-titik) -->
            <div class="dots flex space-x-3 items-center justify-center absolute left-1/2 -bottom-20">
                <template x-for="(image, index) in images" :key="index">
                    <div @click="activeIndex = index"
                        :class="activeIndex === index ? 'bg-[#FF0004]' : 'bg-gray-500'"
                        class="rounded-full h-2 w-2 cursor-pointer transition-colors"></div>
                </template>
            </div>
        </div>

    </div>
    
</x-app-layout>
<div class="relative h-screen w-full flex pl-20 space-x-10 justify-between font-semibold text-white items-center bg-[#6B7D75]">
    <div class="w-1/2" data-aos="fade-right" data-aos-duration="1000" >
        <p class="text-3xl mb-5">What is <span class="text-[#FF914D]">PT. Life Wood</span> ? </p>
        <p class="text-lg">Established in 2015, PT. Life Wood is a Foreign Investment Company (PMA) specializing in the wooden furniture industry, classified under KBLI code 31001. We are committed to producing high-quality furniture that blends elegance, durability, and exceptional craftsmanship.</p>
    </div>
    
    <div data-aos="fade-up-right" data-aos-duration="1000" class="relative w-[65%] custom-shape bg-black h-screen flex items-center justify-end overflow-hidden">
        <div class="-skew-x-[24deg] bg-white right-[600px] w-12 h-screen absolute"></div>
        <!-- Gambar Sofa -->
        <img src="{{asset('images/pixabay.jpg')}}" alt="Sofa" class="w-full h-full ml-10">
    </div>

</div>
<div class="bg-white w-full h-3"></div>
<div class="relative h-screen w-full flex pr-20 space-x-10 justify-between font-semibold text-white items-center bg-[#6B7D75]">
    
    <div data-aos="fade-up-left" data-aos-duration="1000"  class="relative w-[65%] custom-shape-left bg-black h-screen flex items-center justify-start overflow-hidden">
        <div class="skew-x-[24deg] bg-white left-[600px] w-12 h-screen absolute"></div>
        <!-- Gambar Sofa -->
        <img src="{{asset('images/furniture.jpg')}}" alt="Sofa" class="w-full h-full mr-10">
    </div>
    <div class="w-1/2" data-aos="fade-left" data-aos-duration="1000" >
        <p class="text-lg">Our product range includes tables, chairs, sofas, dining tables, beds, and cupboards, all crafted from premium teak wood, mahogany wood, and meh wood. With a skilled team of 20 professionals, we ensure meticulous attention to detail in every piece, maintaining the highest quality standards for international markets.Established in 2015, PT. Life Wood is a Foreign Investment Company (PMA) specializing in the wooden furniture industry, classified under KBLI code 31001. We are committed to producing high-quality furniture that blends elegance, durability, and exceptional craftsmanship.</p>
    </div>

</div>
<div class="bg-white w-full h-3"></div>
<div class="relative h-screen w-full flex pl-20 space-x-10 justify-between font-semibold text-white items-center bg-[#6B7D75]">
    <div class="w-1/2" data-aos="fade-right" data-aos-duration="1000" >
        <p class="text-lg">As an export-focused company, PT. Life Wood exclusively serves global clients and does not offer sales within Indonesia. Our strengths lie in our exclusive designs, premium materials, and expert craftsmanship, positioning us as a trusted name in the global wooden furniture industry.For partnerships and further information about our premium furniture collections, feel free to contact us.</p>
    </div>
    
    <div data-aos="fade-up-right" data-aos-duration="1000"  class="relative w-[65%] custom-shape bg-black h-screen flex items-center justify-end overflow-hidden">
        <div class="-skew-x-[24deg] bg-white right-[600px] w-12 h-screen absolute"></div>
        <!-- Gambar Sofa -->
        <img src="{{asset('images/modern-sofa.jpg')}}" alt="Sofa" class="w-full h-full ml-10">
    </div>

</div>
<div class="bg-white w-full h-3"></div>
<div class="h-screen w-full bg-[#6B7D75] flex flex-col py-12 items-center justify-start">
    <h1 data-aos="fade-down" data-aos-duration="1000"  class="md:text-4xl text-2xl text-white">What Makes <span class="text-[#FF914D]">Our Product</span> Stand Out ?</h1>
    <div data-aos="fade-up" data-aos-duration="1000"  class="w-1/2 h-1/2 mt-24 items-center grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 justify-center">
        <div class="rounded-xl text-[#6B7D75] flex flex-col items-center justify-center w-44 h-40 bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 100 100"><path fill="currentColor" d="M54.284 44.798v-10.11c3.297.807 6.52 2.344 9.157 4.762l.011-.015c.197.157.436.265.708.265c.358 0 .665-.173.877-.428l.015.003l4.262-6.008l-.01-.005c.175-.202.291-.458.291-.746c0-.34-.153-.638-.387-.849c-3.953-3.651-9-5.843-14.924-6.502v-5.806h-.001c0-.637-.516-1.153-1.153-1.153h-4.578c-.637 0-1.153.516-1.153 1.153v5.659c-9.89 1.025-15.75 7.326-15.75 14.725c0 9.963 8.205 12.82 15.75 14.652v11.354c-4.845-.868-8.827-3.379-11.536-6.19q-.028-.03-.06-.058l-.052-.051l-.008.011a1.13 1.13 0 0 0-.719-.273a1.14 1.14 0 0 0-.998.608l-.014-.002l-4.125 6.124l.005.01a1.13 1.13 0 0 0-.292.748c0 .367.182.679.448.89l-.011.016c4.029 4.029 9.67 6.959 17.362 7.619v5.44c0 .637.516 1.153 1.153 1.153h4.578c.637 0 1.153-.517 1.153-1.153h.001V75.2c10.769-1.1 16.117-7.398 16.117-15.531c0-10.035-8.498-12.967-16.117-14.871m-6.886-1.686c-3.003-.951-5.055-2.051-5.055-4.176c0-2.49 1.832-4.248 5.055-4.688zm6.886 22.784V56.08c3.224 1.025 5.495 2.199 5.495 4.615c0 2.345-1.759 4.468-5.495 5.201"/></svg>
                <p class="mt-1">Nice Price</p>
            </div>
        <div class="relative rounded-xl text-[#6B7D75] flex flex-col items-center justify-center w-44 h-40 bg-white">
            <svg  xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"><path fill="currentColor" d="M6 4V1.5h2V4h8V1.5h2V4h4v18H2V4zM4 6v3h16V6zm16 5H4v9h16z"/></svg>
            <svg class="absolute right-[68px] top-[55px]" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M8 7a.75.75 0 0 1 .75-.75h5.625a.75.75 0 0 1 0 1.5H9.5v2.066h2.723c1.834 0 3.527 1.295 3.527 3.127v1.399c0 1.132-.514 2.01-1.274 2.585c-.739.56-1.687.82-2.598.823c-.912.003-1.862-.25-2.603-.81C8.512 16.364 8 15.482 8 14.342a.75.75 0 0 1 1.5 0c0 .643.27 1.092.678 1.401c.43.325 1.043.51 1.694.507c.651-.002 1.266-.19 1.699-.518c.412-.313.679-.76.679-1.39v-1.4c0-.793-.794-1.626-2.027-1.626H8.75a.75.75 0 0 1-.75-.75z"/></svg>
            <p class="mt-3">5 Years Guarantee</p>
        </div>
        <div class="rounded-xl text-[#6B7D75] flex flex-col items-center text-center justify-center w-44 h-40 bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"><path fill="currentColor" d="M7 20q-1.25 0-2.125-.875T4 17H1.5l.45-2h2.825q.425-.475 1-.737T7 14t1.225.263t1 .737H13.4l2.1-9H4.55l.1-.425q.15-.7.687-1.137T6.6 4H18l-.925 4H20l3 4l-1 5h-2q0 1.25-.875 2.125T17 20t-2.125-.875T14 17h-4q0 1.25-.875 2.125T7 20m8.925-7h4.825l.1-.525L19 10h-2.375zm-.475-6.825L15.5 6l-2.1 9l.05-.175l.85-3.65zM.5 13.325l.5-2h5.5l-.5 2zm2-3.65l.5-2h6.5l-.5 2zM7 18q.425 0 .713-.288T8 17t-.288-.712T7 16t-.712.288T6 17t.288.713T7 18m10 0q.425 0 .713-.288T18 17t-.288-.712T17 16t-.712.288T16 17t.288.713T17 18"/></svg>
            <p>Free Delivery & Instalation</p>
        </div>
        <div class="rounded-xl text-[#6B7D75] flex flex-col items-center justify-center text-center lg:col-span-1 lg:col-start-1 lg:translate-x-[150px]  w-44 h-40 bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"><path fill="currentColor" d="M7 12v1h10v-1a3 3 0 0 1 2.993-3a4.6 4.6 0 0 0-.07-.78a4 4 0 0 0-3.143-3.143C16.394 5 15.93 5 15 5H9c-.93 0-1.394 0-1.78.077A4 4 0 0 0 4.077 8.22a4.6 4.6 0 0 0-.07.78A3 3 0 0 1 7 12"/><path fill="currentColor" d="M18.444 18H5.556a3.6 3.6 0 0 1-.806-.092V19a.75.75 0 0 1-1.5 0v-1.849A3.55 3.55 0 0 1 2 14.444V12a2 2 0 1 1 4 0v1.2a.8.8 0 0 0 .8.8h10.4a.8.8 0 0 0 .8-.8V12a2 2 0 1 1 4 0v2.444a3.55 3.55 0 0 1-1.25 2.707V19a.75.75 0 0 1-1.5 0v-1.092a3.6 3.6 0 0 1-.806.092"/></svg>
        <p>10 Years in Modern Design & Living</p>
        </div>
        <div class="rounded-xl text-[#6B7D75] flex flex-col items-center justify-center lg:col-span-1 lg:translate-x-[150px]  w-44 h-40 bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24"><path fill="currentColor" d="M23 10a2 2 0 0 0-2-2h-6.32l.96-4.57c.02-.1.03-.21.03-.32c0-.41-.17-.79-.44-1.06L14.17 1L7.59 7.58C7.22 7.95 7 8.45 7 9v10a2 2 0 0 0 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73zM1 21h4V9H1z"/></svg>
        <p class="mt-3">Good Quality</p>
        </div>
    </div>
</div>
<footer class="w-full h-10 bg-white flex justify-between items-center px-20">
    <p>Copyright © 2023 Life wood. All rights reserved.</p>
    <div class="flex items-center justify-center space-x-5">
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
            </svg>

        </a>
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
            </svg>

        </a>
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>

        </a>
    </div>
</footer>


