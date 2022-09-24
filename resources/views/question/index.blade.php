<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enquetes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @auth
                        <b>{{Auth::user()->name}}</b> estas sao as enquetes <br>
                    @endauth

                    <a style="background: rgb(0, 234, 255)" href="{{ route('question.create') }}">Nova Pergunta</a>
                    @foreach($question as $questionItem)
                       <div>
                        {{$questionItem->question}} <br>
                       </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

