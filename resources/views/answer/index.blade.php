<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Respostas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @auth
                        <b>{{Auth::user()->name}}</b>  aqui estao as respostas <br>
                    @endauth

                    <a style="background: rgb(0, 234, 255)" href="{{ route('answer.create') }}">Nova Resposta</a>

                    @foreach($questions as $qItem)

                        <div style="background: #f693; margin:0.25rem; padding:0.5rem; border-radius:0.5rem;">
                            <b>{{ $qItem->question}} - incio: {{ $qItem->initial_date }} - encerramento: {{ $qItem->end_date }} </b>

                            <div style="display: flex;">
                                @foreach ($qItem->answer as $aItem)
                                    <p style="background: #fff; margin:0.25rem; padding:0.5rem 1rem; border-radius:0.5rem; width:7rem; text-align:center;">{{$aItem->answer}}</p>
                                @endforeach
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

