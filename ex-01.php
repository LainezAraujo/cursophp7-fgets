<?php 

//LER

$filename="usuarios.csv";

if (file_exists($filename)) {
	//r = read
	$file= fopen($filename,"r");

	//pegar primeira linha fgets
	//pegar o array uso do explode, explode separador
	$headers = explode(",",fgets($file));
	//para executar enquanto tiver linhas WHILE
	$data = array();
	while ($row = fgets($file)) {

		$rowData=explode(",",$row);
		$linha=array();
		//SÓ linhas

		for($i=0;$i < count($headers);$i++){
			//dinâmico
			$linha[$headers[$i]] = $rowData[$i];
		}

		array_push($data,$linha);
	}
	

	fclose($file);

	echo json_encode($data);
}

 ?>