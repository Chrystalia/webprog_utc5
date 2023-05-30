@extends('layouts.master')
@section('title', 'Books')
@section('content')
{{-- Highlight Book, based on most like --}}
<div class="min-w-screen flex flex-col items-center m-1 font-serif">
    <div class="w-11/12 border-slate-500 border-2 m-3 ">
        <div class=" border-slate-500 border-2 py-2 px-10 m-1 flex">
            <img src="{{ $highlight->image }}" class = 'w-1/4 h-52' alt="Failed to load image">
            <div class="flex flex-col mx-4">
                <div class="underline">Highligh Book Section</div>
                <a href="/detail/{{ $highlight->id }}">
                    <div class="text-6xl my-2 font-bold">{{ $highlight->title }}</div>
                </a>
                <div>{{ $highlight->detail->description }}</div>
                </div>
            </div>
    </div>

    {{-- Latest Book, based on updated_at --}}
    <div class="w-11/12 border-slate-500 border-2 m-3">
        <div class=" border-slate-500 border-2 py-2 px-10 m-1 flex flex-col">
            <div class="underline mb-3">Latest Book Reviews</div>
            <div class="flex">
                @foreach ($latest as $book)
                <div class="flex flex-col mx-3">
                    <img src="{{ $book->image }}" alt="Failed to load image">
                    <a href="/detail/{{ $book->id }}">
                        <div class="text-xl my-2 font-bold">{{ $book->title }}</div>
                    </a>
                        <div>{{ $book->detail->description }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- All Books --}}
<div class="bg-black flex flex-col items-center px-4 text-white">
    <div class="w-11/12 p-1 border-slate-500 border-2 mt-3">
        <div class=" border-slate-500 border-2 py-2 px-10 flex flex-col">
            <div class="underline mb-3">Book Series Review</div>
            <div class="container justify-self-center grid grid-cols-3 gap-2">
                @foreach ($books as $book)
                    <div class="max-w-sm rounded overflow-hidden my-2">
                        <img class="w-full" src="{{ $book->image }}" alt="Failed to load">
                        <div class="font-bold text-xl mb-2 font-bold">{{ $book->title }}</div>
                        <a href="/detail/{{ $book->id }}">
                            <button class="bg-transparent hover:bg-blue text-white font-semibold hover:text-blue py-2 px-4 border border-white hover:border-transparent rounded">
                                Read post
                            </button>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
