<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Poppins:wght@200;400&display=swap" rel="stylesheet">
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
            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Username Input -->
                <div class="flex flex-col mb-4">
                    <label for="email" class="text-sm text-[#161D6F]">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="border-2 py-2 px-1 border-[#161D6F] rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="flex flex-col mb-4">
                    <label for="password" class="text-sm text-[#161D6F]">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="border-2 py-2 px-1 border-[#161D6F] rounded-lg @error('password') border-red-500 @enderror" required>
                    @error('password')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me Checkbox (Optional) -->
                <div class="flex items-center mb-4">
                    <input type="checkbox" name="remember" id="remember" class="mr-2" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="text-sm text-[#161D6F]">Remember Me</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-[#161D6F] mt-4 w-full text-white py-4 rounded-xl font-bold text-xl">Masuk</button>
            </form>

        </div>
    </div>
</body>
</html>
