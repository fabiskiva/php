 <?php
 $jogador1 =  "pedra";
   $jogador2 = "Papel";

if($jogador1=== "pedra"){
   if($jogador2==="pedra"){
   echo "Empate\n";
  }
   else if($jogador2 === "papel" ){
    echo "jogador 2 ganhou \n";
   }
   else if($jogador2=== "tesoura"){
    echo "jogador 1 ganhou \n";
   }
  }
else if($jogador1=== "tesoura"){
    if($jogador2==="tesoura"){
    echo "Empate\n";
   }
    else if($jogador2 === "pedra" ){
     echo "jogador 2 ganhou \n";
    }
    else if($jogador2=== "papel"){
     echo "jogador 1 ganhou \n";
    }
   }

  else if($jogador1=== "papel"){
    if($jogador2==="papel"){
    echo "Empate\n";
   }
    else if($jogador2 === "pedra" ){
     echo "jogador 1 ganhou \n";
    }
    else if($jogador2=== "tesoura"){
     echo "jogador 2 ganhou \n";
    }
   }