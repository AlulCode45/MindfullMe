@extends('../../layouts/main')

@section('konten')
    <style>
        .hero-section {
            background: linear-gradient(180deg, #25BFD3 0%, #9EFFCB 100%);
        }
    </style>
    <div class="bg-opacity-70 w-full h-[400px] rounded-md hero-section"> </div>
    <div class="flex justify-center">
        <div class="grid grid-cols-4 gap-5 mt-5 w-full">
            <div class="bg-white w-full h-[100px] rounded-md"></div>
            <div class="bg-white w-full h-[100px] rounded-md"></div>
            <div class="bg-white w-full h-[100px] rounded-md"></div>
            <div class="bg-white w-full h-[100px] rounded-md"></div>
        </div>
    </div>
    <div class="my-10">
        <h3 class="text-2xl font-semibold mb-5">Artikel Terbaru</h3>
        <div class="grid grid-cols-5 gap-5">
            <div class="bg-white rounded-lg w-full h-[300px] "></div>
            <div class="bg-white rounded-lg w-full h-[300px] "></div>
            <div class="bg-white rounded-lg w-full h-[300px] "></div>
            <div class="bg-white rounded-lg w-full h-[300px] "></div>
            <div class="bg-white rounded-lg w-full h-[300px] "></div>
        </div>
    </div>
@endsection
