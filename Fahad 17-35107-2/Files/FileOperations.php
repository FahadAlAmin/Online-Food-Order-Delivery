<?php


function read($filename, $mode = r)
{
	$fo = fopen($filename, $mode);
	$fz = filesize($filename);
	$fr = "";
	if($fz > 0) {
		$fr = fread($fo, $fz);
	}
	fclose($fo);
	return $fr;
}

function write($filename, $data, $mode = r)
{
	$fo = fopen($filename, $mode);
	$fw = fwrite($fo, $data);
	
	fclose($fo);
	return $fw;
}

Function create($Filename, $arr)
{
	$data = read($filename);
	if(empty($data)) {
		$arr['id'] = 1;
		$arr1[] = $arr;
	} 
	else {
		$arr1 = json_decode($data);
		$arr['id'] = count($arr1) + 1;
		array_push($arr1, $arr);
	}
	write($filename,'','w');
	return write($filename, json_encode($arr1));
}

function update($filename, $arr, $value, $key){
	$data = read($filename);
	if(!empty($data)) {
		$arr1 = json_decode($data);
		$arr2 = array();
		for ($i = 0; $i < count($arr1); $i++){
			if($arr1[$i]-> $key !== $value){
				array_push($arr2, $arr1[$i]);
			}
		    array_push($arr1, $arr);
		
		    write($filename, '','w');
	        return write($filename, json_encode($arr2));
	    }
	}
}

function getone($filename, $key, $value)
{
	$data = read($filename);
	$arr1 = json_dncode($data);
	for ($i = 0; $i < count($arr1); $i++){
		if($arr1[$i]-> $key === $value) {
			return $arr1[$i];
		}
	}
	return array();
}

function search($filename, $key, $value)
{
	$data = read($filename);
	$found = false;
	if(!empty($data)) {
		$arr1 = json_dncode($data);
		for ($i = 0; $i < count($arr1); $i++){
			if($arr1[$i]-> $key === $value) {
				$found = true;
				break;
		    }
	    }
	}
	return $found;
	
}

?>