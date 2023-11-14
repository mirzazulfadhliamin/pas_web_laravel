@extends("layouts.main")

@section('content')
<style>
    main {
        height: 100vh;
        position: relative;
    }

    main::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/bg.jpg') }}');
        background-size: cover;
        background-attachment: fixed; /* Tambahkan ini */
        z-index: -1;
    }
</style>

<main class="grid min-h-full place-items-center px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center text-white">
        <h1 class="mt-4 text-3xl font-bold tracking-tight sm:text-5xl">Selamat Datang Di Dunia One Piece</h1>
        <p class="mt-6 text-base leading-7 text-gray-300">Temukan petualangan di Grand Line bersama bajak laut terhebat!</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/mugiwara" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go To Kru</a>
        </div>
    </div>
</main>
@endsection
