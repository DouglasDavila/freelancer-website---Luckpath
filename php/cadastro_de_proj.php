<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta de Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rampart+One&display=swap');

        .luckypath {
            font-family: 'Rampart One', cursive;
            color: white;
            font-size: 2.5rem;
            padding-top: 18px;
            padding-left: 10px;
        }
    </style>
</head>

<body class="flex flex-col items-center justify-start min-h-screen bg-gray-100 min-h-screen overscroll-contain">
    <div class="logo text-2xl font-bold bg-green-900 w-full h-20 items-center fixed">
        <h1 class="luckypath">Luckypath</h1>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md w-full max-w-2xl h-128 mt-28 border border-green-900">
        <h2 class="text-2xl font-bold mb-4 ml-4">Oferte seu Serviço</h2>
        <form class="ml-4">
            <label class="block mb-2">Dê um nome ao serviço</label>
            <input type="text" class="border border-gray-300 rounded-md mb-4 p-2 w-1/2" />

            <label class="block mb-2">Escolha uma categoria</label>
            <select class="border border-gray-300 rounded-md mb-4 p-2 w-1/3">
                <option>Selecione aqui</option>
            </select>

            <label class="block mb-2">Diga o seu valor</label>
            <input type="text" class="border border-gray-300 rounded-md  mb-4 p-2 w-1/2">

            <label class="block mb-2">Duração da oferta</label>
            <select class="block border border-gray-300 rounded-md p-2 mb-4 w-1/3">
                <option>Selecione aqui</option>
            </select>

            <label class="block mb-2">Descreva o serviço a ser ofertado</label>
            <textarea class="block w-72 border border-gray-300 rounded-md p-2 mb-4 h-28"></textarea>

            <label class="block mb-2">Observações</label>
            <textarea class="block w-72 border border-gray-300 rounded-md p-2 mb-4 h-28"></textarea>

            <label class="block mb-2">Nível de experiência</label>
            <div class="flex mb-4 gap-4">
                <div class="flex">
                    <input type="radio" id="iniciante" name="experiencia" class="hidden" />
                    <label for="iniciante" class="block bg-gray-200 rounded-md p-2 text-center cursor-pointer w-40 h-32">Iniciante<div class="bg-gray-100 rounded-sm h-20 text-center pt-3">Ainda em processo de aprendizado</div></label>

                </div>
                <div class="flex">
                    <input type="radio" id="intermediario" name="experiencia" class="hidden" />
                    <label for="intermediario" class="block bg-gray-200 rounded-md p-2 text-center cursor-pointer w-40 h-32">intermediário<div class="bg-gray-100 rounded-sm h-20 text-center pt-1">A um tempo na área, qualidade por um menor preço</div></label>
                </div>
                <div class="flex">
                    <input type="radio" id="especialista" name="experiencia" class="hidden" />
                    <label for="especialista" class="block bg-gray-200 rounded-md p-2 text-center cursor-pointer w-40 h-32">Avançado<div class="bg-gray-100 rounded-sm h-20 text-center pt-1">Especialista na área, o melhor que você pode ter</div></label>
                </div>
            </div>

            <button type="submit" class="bg-green-900 text-white p-2 rounded-md w-28 h-10 mr-6 mt-8 mb-4">Cadastrar</button>
            <button type="button" class="mt-2 text-center text-gray-600">Cancelar</button>
        </form>
    </div>
</body>

</html>