<?php

#Diferencia os 2 (dois) fluxos da portaria
$processo =  $_POST[processo];
if ($processo == "PEE"){

	$tipoprocesso = 1;
}
else if($processo == "PED"){

	$tipoprocesso = 2;
}

 $acao =  $_POST[acao];
 $processo =  $_POST[processo];

  switch ($acao)
  {
  	case criar:
  	echo $sql_processo = "
  	INSERT INTO
  		processos
  		(
  		
  		)
		VALUES
		(
		
		)";
  	$pg_query = $sql_processo;
  	break;
  }

  //header('location:sistema.php?acao=inicio');
  