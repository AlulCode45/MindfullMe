<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')

</head>

<body class="bg-[#f1f1f1]">
    <div class="flex w-full justify-center items-center py-10">
        <form action="{{ route('register-action') }}" method="POST" class="bg-white p-7 w-[500px]">
            @csrf
            @if (session()->has('success'))
                <div class="bg-green-100 px-5 py-3">{{ session()->get('success') }}</div>
            @endif
            @if (session()->has('error'))
                <div class="bg-red-100 px-5 py-3">{{ session()->get('error') }}</div>
            @endif
            <div class="my-3">
                <label for="" class="block">Nama</label>
                <input type="text" name="nama" placeholder="Masukan nama"
                    class="py-3 px-3 focus:outline-none w-full border">
            </div>
            <div class="flex gap-3">
                <div class="my-3">
                    <label for="" class="block">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir"
                        class="py-3 px-3 focus:outline-none w-full border">
                </div>
                <div class="my-3">
                    <label for="" class="block">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir"
                        class="py-3 px-3 focus:outline-none w-full border">
                </div>
            </div>
            <div class="my-3">
                <label for="" class="block">Alamat</label>
                <textarea type="text" name="alamat" placeholder="Masukan alamat" rows="5"
                    class="py-3 px-3 focus:outline-none w-full border "></textarea>
            </div>
            <div class="my-3">
                <label for="" class="block">Deskripsi Diri</label>
                <textarea type="text" name="deskripsi_diri" placeholder="Isikan mengenai dirimu"
                    class="py-3 px-3 focus:outline-none w-full border " rows="5"></textarea>
            </div>
            <div class="my-3">
                <label for="" class="block">Lulusan Universitas</label>
                <input type="text" name="lulusan_universitas" placeholder="Masukan nama universitas"
                    class="py-3 px-3 focus:outline-none w-full border">
            </div>
            <div class="my-3">
                <label for="" class="block">Nomor Whatsapp</label>
                <input type="number" name="whatsapp" placeholder="Masukan nomor whatsapp"
                    class="py-3 px-3 focus:outline-none w-full border">
            </div>
            <div class="my-3">
                <label for="" class="block">Email</label>
                <input type="email" name="email" placeholder="Masukan Email"
                    class="py-3 px-3 focus:outline-none w-full border">
            </div>
            <div class="my-3">
                <label for="" class="block">Password</label>
                <input type="password" name="password" placeholder="Masukan Password"
                    class="py-3 px-3 focus:outline-none w-full border">
            </div>
            <div class="my-3">
                <button class="bg-blue-400 px-7 py-2 text-white font-semibold">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
