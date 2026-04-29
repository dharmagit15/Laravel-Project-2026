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
            <h1 class="text-3xl font-bold mb-4">Profil Kami</h1>
            <p class="mb-4">E-Donasi adalah platform donasi online yang didedikasikan untuk membantu masyarakat yang membutuhkan. Kami percaya bahwa dengan memberikan sedikit bantuan, kita dapat membuat perbedaan besar dalam kehidupan orang lain.</p>
            <p class="mb-4">Misi kami adalah untuk memudahkan proses donasi, sehingga lebih banyak orang dapat berkontribusi untuk kebaikan bersama. Kami bekerja sama dengan berbagai organisasi dan komunitas untuk memastikan bahwa bantuan yang diberikan tepat sasaran dan memberikan dampak positif.</p>
            <p class="mb-4">Kami berkomitmen untuk menjaga transparansi dan kepercayaan dari para donatur. Setiap donasi yang masuk akan dikelola dengan baik dan dilaporkan secara berkala kepada para donatur. Kami juga menyediakan berbagai program dan kampanye untuk meningkatkan kesadaran dan partisipasi dalam kegiatan sosial.</p>
        
        </main>
        @include('partials.footer')
    </body>
</html>