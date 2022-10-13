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
                    @foreach ($questions as $questionItem)
                        <div class="p-2 m-2 bg-cyan-500">
                           <h2 class="m-3">{{ $questionItem->question }}</h2>
                            <div class="flex gap-2">
                                @foreach ($questionItem->answer as $answerItem)
                                    <div class="p-2 bg-slate-50 rounded-md">
                                        {{ $answerItem->answer }}  <span class="rounded-full bg-yellow-400 p-1 relative left-3 top-[-18px]">{{ $answerItem->vote }}</span> 

                                        <form action="{{ route('answer.update', $answerItem->id)}}" method="post">
                                            @method('PATCH')
                                            @csrf
                                            <input type="hidden" name="question_id" value="{{ $answerItem->question_id }}">
                                            <input type="hidden" name="answer" value="{{ $answerItem->answer }}">
                                            <input type="hidden" name="vote" value="{{ $answerItem->vote }}">
                                            <button class="bg-green-300 p-2 rounded-full" type="submit">votar</button>
                                        </form>
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
