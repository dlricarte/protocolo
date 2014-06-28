<?php


echo $processo =  $_POST[processo];



if ($processo == "PEE"){

	echo "<br>Voce escolheu um Protocolo de Exame";

}

else if($processo == "PED"){

	echo "<br>Voce escolheu um Protocolo de Documento";

}