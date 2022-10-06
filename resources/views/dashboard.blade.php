<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($data as $qItem)
                        <div class="p-2 m-2 bg-cyan-100">
                           <h2 class="m-3">{{ $qItem->question }}</h2>

                            <div class="flex gap-2">

                                @foreach ($qItem->answer as $item)
                                    <div class="p-2 bg-slate-50 rounded-md">
                                        {{ $item->answer }}

                                        @foreach ($vote as $item)
                                            @if ($item->id_question == $qItem->id)
                                                <p class="p-1 bg-slate-400 rounded-md">{{ $item->id_answer }}</p>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach




                            </div>
                        </div >
                        @endforeach



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
