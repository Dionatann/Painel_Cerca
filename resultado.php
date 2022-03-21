<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resulatdo final</title>  
    <link rel= "stylesheet" href= "resultado.css"/>
</head>
<body>

<div class="resultado">
    <h3>Seu resultado está na mensagem abaixo:</h3>
<?php 

$formato = $_POST['Formato'];
$portao = $_POST['Portao'];
$tportao = $_POST[ 'Tportao'];
$raio =  $_POST['Metros']; 
$pi = 3.14;
$diametro = $raio * 2;
$angulocentral = $_POST['Ângulo'];
$converte = $raio * 1000;


if($formato == "Horizontal"){
    if($portao==1){
        if($tportao == 1190){
            $comprimentoArco = ($angulocentral*$pi*$converte) /180;
            $metrosFinal = $comprimentoArco - $tportao;
            $metrosFinal = round($metrosFinal/1000);

            Echo "O Formato da Cerca de Proteção é na Horizontal em um ângulo central de $angulocentral º";
            Echo "<hr>";  
            Echo "Será necessário $metrosFinal de Painel de 1000 mm e um Portão de 1190 mm.";

        }elseif($tportao == 2000){
            $comprimentoArco = ($angulocentral*$pi*$converte) /180;
            $metrosFinal = $comprimentoArco - $tportao;
            $metrosFinal = round($metrosFinal/1000);

            Echo "O Formato da Cerca de Proteção é na Horizontal em um ângulo central de $angulocentral º";
            Echo "<hr>";  
            Echo "Será necessário $metrosFinal de Painel de 1000 mm e um Portão de 2000 mm.";
            
        }elseif($tportao == 2800){
            $comprimentoArco = ($angulocentral*$pi*$converte) /180;
            $metrosFinal = $comprimentoArco - $tportao;
            $metrosFinal = round($metrosFinal/1000);

            Echo "O Formato da Cerca de Proteção é na Horizontal em um ângulo central de $angulocentral º";
            Echo "<hr>";  
            Echo "Será necessário $metrosFinal de Painel de 1000 mm e um Portão de 2800 mm.";
        
        }
        else{

            Echo "<hr>";
            Echo "ERRO, Tamanho do Portão não foi SELECIONADO ";
        }
    }else{
            $comprimentoArco = ($angulocentral*$pi*$converte) /180;
            $metrosFinal = round($comprimentoArco/1000);
            Echo "O Formato da Cerca de Proteção é na Horizontal em um ângulo central de $angulocentral º";
            Echo "<hr>";
            Echo "Será necessário $metrosFinal de Painel de 1000 mm.";
    }
}
elseif($formato == 'Vertical'){
     if($portao==1){
        if($tportao == 1190){
          $comprimentoArco = ($angulocentral*$pi*$converte) /180;
          $metrosFinal = $comprimentoArco - $tportao;
          $metrosFinal = round($metrosFinal/1000);

          Echo "O Formato da Cerca de Proteção é na Horizontal em um ângulo central de $angulocentral º";
          Echo "<hr>";  
          Echo "Será necessário $metrosFinal de Painel de 1000 mm e um Portão de 1190 mm.";
         
        }elseif($tportao == 2000){
          $comprimentoArco = ($angulocentral*$pi*$converte) /180;
          $metrosFinal = $comprimentoArco - $tportao;
          $metrosFinal = round($metrosFinal/1000);

          Echo "O Formato da Cerca de Proteção é na Horizontal em um ângulo central de $angulocentral º";
          Echo "<hr>";  
          Echo "Será necessário $metrosFinal mm de Painel de 1000 mm e um Portão de 2000 mm."; 
            
        
        }elseif($tportao == 2800){
          $comprimentoArco = ($angulocentral*$pi*$converte) /180;
          $metrosFinal = $comprimentoArco - $tportao;
          $metrosFinal = round($metrosFinal/1000);

          Echo "O Formato da Cerca de Proteção é na Horizontal em um ângulo central de $angulocentral º";
          Echo "<hr>";  
          Echo "Será necessário $metrosFinal mm de Painel de 1000 mm e um Portão de 2800 mm."; 
         
        }else{
            echo "<hr>";
            echo "ERRO, Tamanho do Portão não SELECIONADO!";
  }
}else{
      $comprimentoArco = ($angulocentral*$pi*$converte) /180;
      $metrosFinal = round($comprimentoArco/1760);
      Echo "O Formato da Cerca de Proteção é na Horizontal em um ângulo central de $angulocentral º";
      Echo "<hr>";  
      Echo "Será necessário $metrosFinal de Painel de 1000 mm.";
      
} 
}




?>
























</body>
</div>
</html>
