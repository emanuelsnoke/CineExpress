<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Assentos de Cinema</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
        <div class="seats">
            @foreach ($assentos as $assento)
                <div class="seat{{ $assento->reservado ? ' reserved' : '' }}" data-seat="{{ $assento->numero_assento }}">{{ $assento->numero_assento }}</div>
            @endforeach
        </div>
        <button id="btn-reserve">Reservar</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const seatsContainer = document.querySelector('.seats');
    const btnReserve = document.getElementById('btn-reserve');

    const seatCount = 96; // Número total de assentos
    const seats = [];

    // Criar assentos
    for (let i = 1; i <= seatCount; i++) {
        const seat = document.createElement('div');
        seat.classList.add('seat');
        seat.dataset.seatNumber = i;
        seat.innerText = i;
        seats.push(seat);
        seatsContainer.appendChild(seat);

        seat.addEventListener('click', function () {
            this.classList.toggle('selected');
        });
    }

    // Função para obter assentos selecionados
    function getSelectedSeats() {
        return seats.filter(seat => seat.classList.contains('selected')).map(seat => seat.dataset.seatNumber);
    }

    // Evento de clique do botão de reserva
    btnReserve.addEventListener('click', function () {
        const selectedSeats = getSelectedSeats();
        if (selectedSeats.length === 0) {
            alert('Por favor, selecione pelo menos um assento para reservar.');
        } else {
            // Enviar solicitação POST para reservar assentos
            fetch('/assentos/reservar', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ selectedSeats })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao reservar assentos.');
                }
                return response.json();
            })
            .then(data => {
                alert(data.message);
                // Aqui você pode adicionar qualquer outra lógica de atualização da interface do usuário, se necessário
            })
            .catch(error => {
                console.error('Erro:', error);
            });
        }
    });
});

    </script>
<style>
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: black;
}

.container {
    text-align: center;
}

.seats {
    display: grid;
    grid-template-columns: repeat(12, 50px);
    grid-template-rows: repeat(8, 50px);
    gap: 10px;
}

.seat {
    width: 50px;
    height: 50px;
    background-color: #ccc;
    border: 1px solid #aaa;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    font-size: 0.8em;
}

.seat.selected {
    background-color: #ff9800; /* Laranja */
    color: #fff;
    border: 1px solid #ff9800;
}

.seat.selected::after {
    content: '\2713'; /* Símbolo de marca de seleção */
}
</style>
</body>
</html>
