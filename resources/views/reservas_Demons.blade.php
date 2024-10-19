<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/reservas.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Assentos</title>
</head>
<body>
    <div class="container">
        <?php
            // Número total de assentos
            $totalSeats = 120;

            // Inicializar array de assentos (0 indica assento disponível, 1 indica assento reservado)
            $seats = array_fill(0, $totalSeats, 0);

            // Verificar se o formulário foi enviado
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obter assentos selecionados
                $selectedSeats = explode(',', $_POST["selectedSeats"]);

                // Marcar assentos como reservados
                foreach ($selectedSeats as $seat) {
                    $seat = (int)$seat;
                    if ($seat >= 0 && $seat < $totalSeats && $seats[$seat] == 0) {
                        $seats[$seat] = 1;
                    }
                }
            }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <?php
                // Exibir assentos
                for ($i = 0; $i < $totalSeats; $i++) {
                    $seatClass = ($seats[$i] == 1) ? 'selected' : 'seat';
                    $seatClass .= ($seats[$i] == 1) ? '' : ' available';

                    echo '<div class="' . $seatClass . '" onclick="toggleSeat(this, ' . $i . ')">' . ($i + 1) . '</div>';

                    // Quebra de linha a cada 15 assentos
                    if (($i + 1) % 15 == 0) {
                        echo '<br>';
                    }
                }
            ?>
            <input type="hidden" name="selectedSeats" id="selectedSeatsInput">
            <button type="submit" id="confirmButton">Confirmar Reserva</button>
        </form>

        <script>
            function toggleSeat(seat, seatNumber) {
                if (!seat.classList.contains("unavailable")) {
                    seat.classList.toggle("selected");
                    updateSelectedSeats();
                }
            }

            function updateSelectedSeats() {
                var selectedSeats = document.querySelectorAll(".selected");
                var selectedSeatsArray = Array.from(selectedSeats);
                var selectedSeatsInput = document.getElementById("selectedSeatsInput");
                selectedSeatsInput.value = selectedSeatsArray.map(seat => seat.innerText - 1).join(",");
            }
        </script>
    </div>
</body>
</html>