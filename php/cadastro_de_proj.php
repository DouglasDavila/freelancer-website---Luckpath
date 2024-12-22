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

        .selected {
            background-color:rgba(0, 76, 38, 0.8);
            /* Tailwind green-700 */
        }

        .text-white {
            color: white;
        }
    </style>
</head>

<body class="flex flex-col items-center justify-start min-h-screen bg-gray-100 min-h-screen overscroll-contain">
    <div class="logo text-2xl font-bold bg-green-900 w-full h-20 items-center fixed">
        <h1 class="luckypath">Luckypath</h1>
    </div>
    <div class="bg-white rounded-lg shadow-md w-full max-w-2xl h-128 mt-28 border border-green-900">
        <h2 class="text-2xl font-bold mb-4 ml-4 text-green-900 pt-4 pl-4">Oferte seu Serviço</h2>
        <hr class="border-green-900 ">
        <form class="ml-4 p-4">
            <label class="block mb-2">Dê um nome ao serviço</label>
            <input type="text" class="border border-gray-300 rounded-md mb-4 p-2 w-1/2" />

            <label class="block mb-2">Escolha uma categoria</label>
            <select class="border border-gray-300 rounded-md mb-4 p-2 w-1/3">
                <option>Selecione aqui</option>
            </select>

            <label class="block mb-2">Diga o seu valor</label>
            <input type="text" class="border border-gray-300 rounded-md mb-4 p-2 w-1/2">

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
                <button type="button" class="bg-gray-200 rounded-md p-2 text-center cursor-pointer w-40 h-32" data-value="iniciante">
                    <div class="exp">Iniciante</div>
                    <div class="bg-gray-100 rounded-sm h-20 text-center pt-3">
                        Ainda em processo de aprendizado
                    </div>
                </button>

                <button type="button" class="bg-gray-200 rounded-md p-2 text-center cursor-pointer w-40 h-32" data-value="intermediario">
                    <div class="exp">Intermediário</div>
                    <div class="bg-gray-100 rounded-sm h-20 text-center pt-1">
                        Há um tempo na área, qualidade por um menor preço
                    </div>
                </button>

                <button type="button" class="bg-gray-200 rounded-md p-2 text-center cursor-pointer w-40 h-32" data-value="especialista">
                    <div class="exp">Avançado</div>
                    <div class="bg-gray-100 rounded-sm h-20 text-center pt-1">
                        Especialista na área, o melhor que você pode ter
                    </div>
                </button>
            </div>

            <input type="hidden" name="experiencia" id="experiencia" />
            <button type="submit" class="bg-green-900 text-white p-2 rounded-md w-28 h-10 mr-6 mt-8 mb-4">Cadastrar</button>
            <button type="button" class="mt-2 text-center text-gray-600">Cancelar</button>
        </form>
    </div>

    <script>
        // Selecionar todos os botões
        const buttons = document.querySelectorAll('button[data-value]');
        const hiddenInput = document.getElementById('experiencia');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // Remover a classe "selected" de todos os botões
                buttons.forEach(btn => {
                    btn.classList.remove('selected');
                    const expDiv = btn.querySelector('.exp');
                    if (expDiv) {
                        expDiv.classList.remove('text-white'); // Remove o estilo branco de todos
                    }
                });

                // Adicionar a classe "selected" ao botão clicado
                button.classList.add('selected');

                // Alterar a cor do texto com a classe "exp" para branco no botão clicado
                const expDiv = button.querySelector('.exp');
                if (expDiv) {
                    expDiv.classList.add('text-white');
                }

                // Atualizar o valor do input hidden
                hiddenInput.value = button.getAttribute('data-value');
            });
        });
    </script>
</body>

</html>
