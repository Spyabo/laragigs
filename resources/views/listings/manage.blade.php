@extends('layout')

@section('content')
    
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <header>
        <h1
            class="text-3xl text-center font-bold my-6 uppercase"
        >
            Manage Gigs
        </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless ($gigs->isEmpty())
            @foreach ($gigs as $gig)                
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href="show.html">
                        {{ $gig->title }}
                    </a>
                </td>
                {{-- <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a
                        href="/listing/{{ $gig->id }}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    >
                </td> --}}
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <x-card class="flex p-2 mt-4 space-x-6 max-w-[200px] mx-auto">
                    <a href="/listings/{{ $gig->id }}/edit">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Edit
                    </a>
                    <form action="/listings/{{ $gig->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                </x-card>
                </td>
            </tr>

            @endforeach
            @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center"> No Gigs Found </p>
                    </td>
                </tr>
            @endunless
        </tbody>
    </table>
</div>

@endsection