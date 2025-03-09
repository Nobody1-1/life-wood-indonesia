<x-app-layout>
    <main class="main" id="main">
    <div class="w-full px-20 min-h-screen flex flex-col text-white justify-center py-10 text-4xl bg-[#6B7D75]">
        <div class="">
            <p class="font-semibold">Contact us</p>
            <p class="text-lg">Contact us via <span class="text-[#FF914D]">Email </span>or <span class="text-[#FF914D]">WhatsApp</span> , we are ready to serve you according to working hours.</p>
        </div>
        <div>
            <div class="flex space-x-5 my-10 text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                </svg>
                <p>Senin-Jumat: 08.00 - 16.30</p>

            </div>
            <div class="flex space-x-5 my-10 text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                <p>Jl.Sultan Hadlirin KM.02 Ds.Langon RT.11 RW.05 Kec. Tahunan Jepara 59426</p>

            </div>
            <div class="flex space-x-4">
                <!-- WhatsApp Button -->
                <a href="https://wa.me/6281227444678" target="_blank" 
                class="flex items-center space-x-3 py-2 px-5 bg-green-600 hover:bg-green-700 rounded-full transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-white rounded-full">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-6 h-6">
                    </div>
                    <p class="text-white font-medium text-lg">0812-2744-4678</p>
                </a>

                <!-- Email Button -->
                <a href="mailto:lifewoodindonesia@yahoo.co.id" 
                class="flex items-center space-x-3 px-5 py-2 bg-blue-600 hover:bg-blue-700 rounded-full transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-white rounded-full">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Gmail_Icon.png" alt="Email" class="w-6 h-6">
                    </div>
                    <p class="text-white font-medium text-lg">lifewoodindonesia@yahoo.co.id</p>
                </a>
            </div>



        </div>
    </div>
    </main>
</x-app-layout>