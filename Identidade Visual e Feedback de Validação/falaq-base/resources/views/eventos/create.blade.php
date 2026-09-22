<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Evento - AskLive</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-2xl mx-auto py-10 px-4">

        <div class="bg-white p-6 rounded-lg shadow-md">

            <h1 class="text-2xl font-bold text-gray-800 mb-6">
                Criar novo evento
            </h1>

            <form action="{{ route('eventos.store') }}" method="POST">

                @csrf

                <div class="mb-5">
                    <label for="titulo" class="block text-gray-700 font-semibold mb-2">
                        Título
                    </label>

                    <input
                        type="text"
                        id="titulo"
                        name="titulo"
                        value="{{ old('titulo') }}"
                        class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('titulo') border-red-500 @enderror"
                        placeholder="Digite o título do evento"
                    >

                    @error('titulo')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="descricao" class="block text-gray-700 font-semibold mb-2">
                        Descrição
                    </label>

                    <textarea
                        id="descricao"
                        name="descricao"
                        rows="5"
                        class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('descricao') border-red-500 @enderror"
                        placeholder="Digite a descrição do evento"
                    >{{ old('descricao') }}</textarea>

                    @error('descricao')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200"
                >
                    Criar evento
                </button>

            </form>

        </div>

    </div>

</body>
</html>