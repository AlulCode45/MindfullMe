<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')

</head>

<body class="bg-[#f1f1f1]">
    <div class="flex w-full h-screen justify-center items-center">
        <form action="{{ route('login-action', ['user' => 'pengguna']) }}" method="POST" class="bg-white p-7">
            @csrf
            @if (session()->has('success'))
                <div class="bg-green-100">{{ session()->get('success') }}</div>
            @endif
            @if (session()->has('error'))
                <div class="bg-red-100 px-5 py-3">{{ session()->get('error') }}</div>
            @endif
            <div class="my-3">
                <label for="" class="block">Email</label>
                <input type="email" name="email" placeholder="Masukan Email"
                    class="py-3 px-3 focus:outline-none border">
            </div>
            <div class="my-3">
                <label for="" class="block">Password</label>
                <input type="password" name="password" placeholder="Masukan Password"
                    class="py-3 px-3 focus:outline-none border">
            </div>
            <div class="my-3">
                <button class="bg-blue-400 px-7 py-2 text-white font-semibold">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
