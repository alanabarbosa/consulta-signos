<?php include('layouts/header.php'); ?>

<div class="container mt-5 border shadow-sm p-4 rounded bg-warning bg-opacity-50">
  <?php
    if (isset($_POST['data_nascimento'])) {
        $data_nascimento = $_POST['data_nascimento'];
        $data = DateTime::createFromFormat('Y-m-d', $data_nascimento);
        $dia_mes = $data->format('d/m');

        $signos = simplexml_load_file('signos.xml');
        $signo_encontrado = null;

        foreach ($signos->signo as $signo) {
            $inicio = DateTime::createFromFormat('d/m', (string) $signo->dataInicio);
            $fim = DateTime::createFromFormat('d/m', (string) $signo->dataFim);
            $data_usuario = DateTime::createFromFormat('d/m', $dia_mes);

            if ($inicio > $fim) {
                if (($data_usuario >= $inicio) || ($data_usuario <= $fim)) {
                    $signo_encontrado = $signo;
                    break;
                }
            } else {
                if (($data_usuario >= $inicio) && ($data_usuario <= $fim)) {
                    $signo_encontrado = $signo;
                    break;
                }
            }
        }

        if ($signo_encontrado) {
            echo "<h2 class='text text-center'>Seu signo é: <strong>{$signo_encontrado->signoNome}</strong></h2>";
            echo "<div class='text-center mt-4'>";
            echo "<img src='{$signo_encontrado->imagem}' alt='Imagem do signo {$signo_encontrado->signoNome}' class='img-fluid' style='max-width: 300px;'>";
            echo "</div>";
            echo "<p class='mt-4 text-center'>{$signo_encontrado->descricao}</p>";
        } else {
            echo "<h2 class='text-center text-danger'>Data inválida ou signo não encontrado!</h2>";
        }
    } else {
        echo "<h2 class='text-center text-danger'>Nenhuma data informada!</h2>";
    }
  ?>

  <div class="text-center mt-5">
    <a href="index.php" class="btn btn-primary bg-gradient"><i class="bi bi-arrow-left"></i> Voltar</a>
  </div>
</div>

</body>
</html>
