<?php defined('BASEPATH') OR exit('No direct script access allowed');

function getTema($sistema = FALSE)
{
	if (!$sistema)
		return json_decode(file_get_contents(APPPATH . '/views/templates/ativo.json'))->site;
	return json_decode(file_get_contents(APPPATH . '/views/templates/ativo.json'))->sistema;
}

function getEstruturaTema($tema, $sistema = FALSE)
{
	$ambiente = !$sistema ? 'site' : 'sistema';
	$caminho = !$sistema ? 'templates/site/' : 'templates/sistema/';
	$estrutura =  json_decode(file_get_contents(APPPATH . '/views/templates/' . $ambiente . '/' . $tema . '/estrutura.json'), TRUE);
	
	foreach ($estrutura as $parte) 
	{
		$tema_usado = array_keys($parte)[0] == 'this' ? $tema : array_keys($parte)[0];
		$caminhoPartes[] = $caminho . $tema_usado . '/' . $parte[array_keys($parte)[0]];
	}

	return $caminhoPartes;
}

function loadTema($sistema = FALSE, $data = FALSE)
{
	// Definindo estrutura do tema
	$estrutura = getEstruturaTema(getTema($sistema), $sistema);
	
	// Carregando views de acordo com a estrutura
	foreach ($estrutura as $parte)
	{
		get_instance()->load->view($parte, $data);
	}
}