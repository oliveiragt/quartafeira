<html>
    <head>
        <meta charset="UTF-8">
        <title>É quarta-feira ?</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="shortcut icon" href="sapinhobacano.ico" type="image/x-icon">
    </head>
<body bgcolor="green">
    <div class="container-fluid" style="text-align:center; font-size:50px; color:white; background:green; height:100%;">
        <?php
            date_default_timezone_set('America/Sao_Paulo');
            $hoje=date( 'N' );
            if($hoje==3){
            echo "<br><br><br>É quarta-feira meus bacanos"  ;
                        }
            else{
            echo "<br><br><br>Não";
                }
        ?> 
        <div style="position:absolute; bottom:0px; left:0px; font-size:15px; text-align:center;">Esta página não possui finalidade de ganho financeiro, criada apenas para fins de estudo, portanto não há nenhum tipo 
        de script de mineração, publicidade ou semelhante executando em segundo plano.</div>     
    </div>
</body>
</html>
