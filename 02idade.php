<!DOCTYPE html>
<html>

<head>
    <title>Amor</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <meta charset="utf-8" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="style/styleCss.css"/>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="testbox">

        <?php
        $nome = isset($_GET["nome"])? $_GET["nome"]: "[Não Informado]";
        $ano = isset($_GET["ano"])? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"])? $_GET["sexo"]: "[Sem sexo]";
        $idade = date("Y") - $ano;
        echo "<h1>$nome é do sexo $sexo e tem $idade anos de idade</h1>";
        ?>

        <a href="Integracao02.html" class="btn btn-primary">Voltar</a>

        

    </div>
</body>

</html>