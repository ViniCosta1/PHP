<?php

require 'vendor/autoload.php';
require 'src/Buscador.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Dompdf\Dompdf;

use Vinicosta\BuscadorDeCursos\Buscador;

$client = new Client(['base_uri' => 'https://www.alura.com.br/', 'verify' => false]);
$crawler = new Crawler();

$buscador = new Buscador ($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao', 'span.card-nome__curso');

$html = '<h1><center>RECEITAS DISPONÍVEIS</center></h1><br>';
foreach ($cursos as $curso) {
    $html .= $curso.'<br>';
}


//TRANSFORMANDO PÁGINA EM PDF
$dompdf = new Dompdf();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('teste de PDF.pdf');