@extends("layouts.main")
@php
   $no= 1;
@endphp
@section('content')
<div class="container mt-4">

    <h1 class="text-4xl font-extrabold  mb-1 text-center">Selamat Datang di Dunia One Piece</h1>
    <h3 class="text-4xl font-extrabold  mb-1 text-center">Kru Red-Haired</h3>


    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Tabel Bajak Laut</h1>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">Foto</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Peringkat</th>
                    <th class="py-2 px-4 border-b">Asal</th>
                    <th class="py-2 px-4 border-b">Bounty</th>
                    <th class="py-2 px-4 border-b">Tanggal Bergabung</th>
                    <th class="py-2 px-4 border-b">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mugiwaras as $mugiwara)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $no++ }}</td>
                    <td class="py-2 px-4 border-b"><img src="{{ URL('images/' . $mugiwara->gambar) }}" alt="Luffy"
                            class="w-10 h-10 object-cover rounded-full"></td>
                    <td class="py-2 px-4 border-b">{{ $mugiwara->nama }}</td>
                    <td class="py-2 px-4 border-b">{{ $mugiwara->devisi }}</td>
                    <td class="py-2 px-4 border-b">{{ $mugiwara->tempat_asal }}</td>
                    <td class="py-2 px-4 border-b"> {{ number_format($mugiwara->bounty, 0, ',', '.') }}</td>

                    <td class="py-2 px-4 border-b">{{ $mugiwara->tanggal_bergabung }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="/redhaired/detail/{{ $mugiwara->id }}">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Detail Page
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
