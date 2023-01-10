<?php

namespace Vinicosta\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;


class Buscador {
    /**
     * @var ClientInterface
     */
    private ClientInterface $httpClient;
    /**
     * @var Crawler
     */
    private Crawler $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler    = $crawler;
    }

    public function buscar(string $url, string $item): array
    {
        $resposta = $this->httpClient->request('GET', $url);

        $html = $resposta->getBody();
        $this->crawler->addHtmlContent($html);

        $elementosCursos = $this->crawler->filter($item);
        $cursos = [];

        foreach ($elementosCursos as $elementos) {
            $cursos[] = $elementos->textContent;
        }

        return $cursos;
    }
}
