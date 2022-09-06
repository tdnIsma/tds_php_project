<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../static/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="divGeral">
        <div class="internoGeral">
            <div class="internoInfos">
                <h1 class="titulo">REGISTRE O SEU PONTO</h1>
                <form method="post" class="formBox" action="../controller/user_controller-pontoEletronico.php?acao=create">
                    <div class="campos">
                        <label for="" class="subtitulos" >Matricula</label>
                        <input type="text" name="matricula" id="matricula" placeholder="Digite a sua matrícula"/>
                    </div>

                    <div class="campos">
                        <label for="" class="subtitulos">Horário</label>
                        <div class="horario">
                            <span id="horaAqui"></span>
                        </div>               
                    </div>

                    <div class="campos">
                        <label for="" class="subtitulos">Tipo</label>
                        <select name="tipo" id="tipo">
                            <option>Escolha o tipo de marcação</option>
                            <option value="1">Entrada Manhã</option>
                            <option value="2">Saída Manhã</option>
                            <option value="3">Entrada Tarde</option>
                            <option value="4">Saída Tarde</option>
                        </select>
                    </div>
                    <input class="btn" type="submit" value="REGISTRAR" onclick="alerta()"/>
                </form>               
                </h2>
            </div>
        </div>

    </div>
</body>
<script>

function exibe_data_hora(){
        var today = new Date();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var date = today.getDate()+ '/'+(today.getMonth()+1)+'/'+today.getFullYear();
        var dateTime = time+' '+date;
        document.getElementById("horaAqui").innerHTML = dateTime;
    }

    setInterval(() => {
           exibe_data_hora(); 
        }, 500);

function alerta() {
    window.alert('Registro enviado com sucesso!')
}
</script>
</html>