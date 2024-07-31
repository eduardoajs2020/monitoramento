<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="refresh" content="10">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>MONITORAMENTO</title>
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <?php 
        $servidores = [
            "UOL"=> "www.uol.com.br",
            "GLOBO"=> "www.globo.com",
            "ROTEADOR"=> "192.168.0.1",
            "DESCONHECIDO"=> "www.pasdpa.com",
            "CAIXA"=> "www.caixa.gov.br",
            "GOOGLE"=> "www.google.com.br",
            "LOCALHOST"=> "localhost:3000",
            "INTERNACIONAL"=>"www.brb.com.br"
        ];
        ?>

       <div class="center">
        <h1>MONITORAMENTO</h1>

        <div class="cards">
            <?php
        foreach($servidores as $servidor=>$ip)
        {

            $retorno = @fsockopen($ip, 80, $errCode, $errStr, 2);
            //$retorno = exec("ping -c 1 $ip", $output, $status);

        if  ($retorno)
            {
                $status = "online";

            }else{

                $status = "offline";

            }
    ?>
            <div class="card <?=$status?>">
                <div class="servidor"><?=$servidor?></div>
                <div class="ip"><?=$ip?></div>
                <div class="status"><?=strtoupper($status)?></div>
            </div>
            <?php 
            }
            ?>
        </div>
       </div>
        
        <script src="" async defer></script>
    </body>
</html>