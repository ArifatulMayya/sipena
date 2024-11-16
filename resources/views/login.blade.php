<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Poppins:wght@200;400&display=swap"
    rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body class="min-h-screen w-full bg-custom-image bg-center bg-opacity-20 bg-cover">
    <div class="bg-white min-h-screen w-full bg-opacity-80 flex pl-16 flex-col justify-center">
        <div class="text-[#161D6F] font-bold text-3xl">
            <h1>Sistem Informasi Pengelolaan Akademik</h1>
            <h1>Universitas Diponegoro</h1>
        </div>
        <div class="text-[#31363F] mt-3 border-l-4 font-normal border-l-gray-400">
            <h1 class="pl-3">Selamat Datang di Sistem Informasi Pengelolaan</h1>
            <h1 class="pl-3">Rencana Akademik, Silahkan masuk untuk melanjutkan</h1>
        </div>
        <div class="mt-8 w-[25%]">
            <div class="flex justify-between">
                <input type="text" name="text" placeholder="username" class="border-2 py-2 px-1 border-[#161D6F] rounded-lg">
                <input type="text" name="password" placeholder="password" class="border-2 py-2 px-1 border-[#161D6F] rounded-lg">
            </div>
            <a href="/dashboard">
                <button class="bg-[#161D6F] mt-4 w-full text-white py-4 rounded-xl font-bold text-xl">Masuk</button>
            </a>
            <a href="" class="underline text-center"> 
                <h1 class="mt-3">Lupa Password</h1>
            </a>
        </div>
    </div>
</body>

</html>
