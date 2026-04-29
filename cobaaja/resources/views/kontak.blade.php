<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body class = "min-h-screen flex flex-col bg-gray-100">
        @include('partials.header')

        <main class = "flex-grow container mx-auto p-6">
            <h1 class="text-3xl font-bold mb-4">Kontak Kami</h1>
            <p class="mb-4">Jika Anda memiliki pertanyaan, saran, atau ingin berkolaborasi dengan kami, jangan ragu untuk menghubungi kami melalui informasi berikut:</p>
            <ul class="list-disc list-inside mb-4">
                <li>Email: <a href="mailto: lebahganteng@gmail.com" class="text-blue-600 hover:underline">
                    lebahganteng@gmail.com
                </a></li>
                <li>Telepon: <a href="tel:08123456789" class="text-blue-600 hover:underline">
                    08123456789
                </a></li>
                <li>Alamat: Jl. Contoh No. 123, Jakarta, Indonesia</li>
                <li>Jam Operasional: Senin - Jumat, 09:00 - 17:00 WIB</li>
                <h3 class ="2xl font-bold mb-4">Media Sosial:</h3>
                    <div class="list-disc list-inside ml-6 mb-4 flex gap-4">
                        <a href="#" class="px-4 py-2 bg-green-600 rounded-lg text-white hover:bg-green-400">Facebook</a>
                        <a href="#" class="px-4 py-2 bg-green-600 rounded-lg text-white hover:bg-green-400">Instagram</a>
                    </div>
            
            </ul>
        </main>

        @include('partials.footer')

    </body>
</html>