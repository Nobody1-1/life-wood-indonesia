<x-app-layout>
    <main class="main" id="main">
        <div class="w-full px-10 min-h-screen py-10 bg-[#6B7D75]">
            <div class="flex justify-center w-full mb-10">
                <p class="text-3xl font-semibold text-white">Store <span class="text-[#FF914D]">Location</span></p>
            </div>

            <div class="grid grid-cols-1 my-10 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full text-white">
                @foreach($store as $item)
                <div class="flex flex-col items-center text-center">
                    <div class="h-[300px] w-[250px] bg-white mb-5 rounded-xl cursor-pointer flex justify-center items-center overflow-hidden" 
                        onclick="openGoogleMaps({{ $item->latitude }}, {{ $item->longitude }})">
                        <img class="h-full w-full object-cover rounded-xl" 
                            src="{{ asset('storage/'.$item->image ?? 'default.jpg') }}" 
                            alt="{{ $item->name }}">
                    </div>
                    <p class="font-bold text-lg">{{ $item->name }}</p>
                    <div class="flex justify-center space-x-5 text-sm">
                        <p>Lat: {{ $item->latitude }}</p>
                        <p>Long: {{ $item->longitude }}</p>
                    </div>
                    <p class="text-sm text-gray-300">Alamat: {{ $item->address }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <script>
        function openGoogleMaps(lat, lng) {
            window.open(`https://www.google.com/maps?q=${lat},${lng}`, '_blank');
        }
    </script>
</x-app-layout>
