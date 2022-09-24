<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova Enquete') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    Criar nova enquete

                    <form action="{{ route('answer.store') }}" method="POST">
                        @csrf
                        <div>
                            <input name="answer" type="text" placeholder="Sua resposta" >
                            <input name="question_id" type="number" placeholder="id da pergunta">
                        </div>

                        <button style="background: rgba(102, 255, 171, 0.582); padding:0.250rem;border-radius: 0.5rem" type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

