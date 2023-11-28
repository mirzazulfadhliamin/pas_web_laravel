@extends("layouts.main")

@section('content')
<body class="bg-gray-900 text-white" >
    <div class="container mx-auto mt-8">
        <h1 class="text-4xl font-bold mb-4 text-center text-white">Detail Anggota Bajak Laut</h1>

        <div class="flex flex-wrap justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2 xl:w-1/3 p-4">
                <div class="bg-gradient-to-br from-gray-900 to-gray-700 rounded-lg overflow-hidden shadow-md text-white">
                    <img src="{{ asset('images/' . $kru->gambar) }}" class="w-full h-64 object-cover" alt="Foto Profil">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2 text-center">{{ $kru->nama }}</h2>
                        <p class="text-gray-300 mb-4 text-center">{{ $kru->kekuatan_buah_iblis }}</p>

                        <div class="flex justify-between items-center mb-4">
                            <p class="text-gray-300">Devisi: {{ $kru->devisi }}</p>
                            <p class="text-yellow-400">Bounty: {{ number_format($kru->bounty, 0, ',', '.') }}</p>
                        </div>

                        <p class="text-gray-300 mb-4">Tanggal Bergabung: {{ $kru->tanggal_bergabung }}</p>
                        <p class="text-gray-300">{{ $kru->keterangan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
