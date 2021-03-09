<!DOCTYPE html>
<html>

<Head>
    <meta charset="UTF-8">
    <title>Exercicío OOP PHP</title>
</Head>

<Body>
    <h1>LIVROS</h1>

    <pre>
        <?php
        require_once 'Livro.php';
        require_once 'Pessoa.php';

        $pessoas[0] = new Pessoa("Marcus ", 29, "Masculino");
        $pessoas[1] = new Pessoa("Carol ", 27, "Feminino");
        $pessoas[2] = new Pessoa("Luiz ", 27, "Masculino");
        $livros[0] = new Livro("O Hobbit", "J.R.R Tolkien", 300, $pessoas[0]);
        $livros[1] = new Livro("O Senhor dos Aneis - A sociedade do anel", "J.R.R Tolkien", 300, $pessoas[0]);
        $livros[2] = new Livro("O Senhor dos Aneis - As duas torres", "J.R.R Tolkien", 435, $pessoas[1]);
        $livros[3] = new Livro("O Senhor dos Aneis - O Retorno do Rei", "J.R.R Tolkien", 527, $pessoas[2]);

        $pessoas[0]->aniversario();
        $pessoas[0]->getIdade();
        $livros[0]->abrir();
        $livros[0]->folhear(400);

        $livros[0]->detalhes();
        $livros[1]->detalhes();
        $livros[2]->detalhes();
        $livros[3]->detalhes();

        ?>
    </pre>
</Body>

</html>