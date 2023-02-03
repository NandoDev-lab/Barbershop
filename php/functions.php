<?php
session_start();

include_once("conect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Agendamento</title>
</head>
<body>
    <div class="resumo-agendamento">
        <div class="dados-agendamento">
                <?php 
                //recebimento das variaveis do formulario Agenda.php
                $nome = filter_input(INPUT_POST,'nome', FILTER_DEFAULT);   
                $telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_NUMBER_INT);
                $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_URL);
                $data_agendamento = filter_input(INPUT_POST,'data_agendamento', FILTER_DEFAULT);
                $servico = $_POST['servico'];     
                $cliente = $_POST['cliente'];
                $obs = $_POST['obs'];
                
                $data_atual = date('d/m/Y');
                

                $agendar = "INSERT INTO agendamento (nome, telefone, email, servico, tipo_cliente, obs, data_agendamento, data_atual)VALUES('$nome','$telefone','$email','$servico','$cliente','$obs','$data_agendamento', NOW())";
                $agendado = mysqli_query($conn, $agendar);

                if(mysqli_insert_id($conn)){
                    header("Location: agenda.php");
                                       
                }else{
                    header("Location: agenda.php");
                }
?>

</div>
</div>
</body>
</html>
    