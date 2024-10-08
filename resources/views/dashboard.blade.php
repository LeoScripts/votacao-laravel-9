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
                        <div class="p-10 m-2 bg-cyan-500">
                           <h2 class="w-[100%]  m-3 relative bottom-5 right-3  text-center text-2xl text-white ">{{ $questionItem->question }}</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-4">
                                @foreach ($questionItem->answer as $answerItem)

                                    <div class="px-2 bg-slate-50 rounded-md text-center box-border my-5">
                                        <p>
                                            <strong class="relative left-[10px] top-5">{{ $answerItem->answer }} </strong>
                                            <span class="rounded-full bg-yellow-400 p-1 relative left-4 top-[-18px]">
                                                {{ count($answerItem->question_answer) }}
                                            </span>
                                        </p>

                                        <form action="{{ route('vote.store')}}" method="post">
                                            @method('POST')
                                            @csrf
                                            <input type="hidden" name="question_id" value="{{ $answerItem->question_id }}">
                                            <input type="hidden" name="answer_id" value="{{ $answerItem->id }}">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                            <button class="bg-blue-400 p-2 rounded-full relative top-7 text-white hover:bg-sky-600 hover:scale-110" type="submit">votar</button>
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
