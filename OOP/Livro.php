<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;

    function __construct($titulo, $autor, $totalPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->leitor = $leitor;
        $this->paginaAtual = 0;
        $this->aberto = false;
    }
    public function detalhes()
    {
        echo "<hr>";

        echo "<strong>Livro:</strong> " . $this->titulo . " <strong>Escrito por</strong> " . $this->autor;
        echo "<br><strong>Páginas:</strong> " . $this->totalPaginas;
        echo "<br><strong>Página atual:</strong> " . $this->paginaAtual;
        echo "<br><strong>Sendo lido por:</strong> " . $this->leitor->getNome();
        echo "<hr>";
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAuthor()
    {
        return $this->autor;
    }
    public function getTotalPaginas()
    {
        return $this->totalPaginas;
    }
    public function getPaginaAtual()
    {
        return $this->paginaAtual;
    }
    public function getLeitor()
    {
        return $this->leitor;
    }
    public function setAuthor($autor)
    {
        $this->autor = $autor;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setTotalPaginas($totalPaginas)
    {
        $this->totalPaginas = $totalPaginas;
    }
    public function setPaginaAtual($paginaAtual)
    {
        $this->paginaAtual = $paginaAtual;
    }
    public function abrir()
    {
        $this->aberto = true;
    }
    public function fechar()
    {
        $this->aberto = false;
    }
    public function folhear($pagina)
    {
        if ($pagina > $this->totalPaginas) {
            $this->paginaAtual = 0;
        } else {
            $this->paginaAtual = $pagina;
        }
    }
    public function avancarPagina()
    {
        if ($this->paginaAtual++ > $this->totalPaginas) {
            echo "O livro chegou ao fim!";
        } else {

            $this->paginaAtual++;
        }
    }
    public function voltarPagina()
    {
        if ($this->paginaAtual-- <= 0) {
            echo "Você está na primeira página!";
        } else {

            $this->paginaAtual--;
        }
    }
}
