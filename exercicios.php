<!-- 1. Crie uma função que receba 2 números e retorne um array
associativo contendo a média e também um indicador booleano de
aprovado/reprovado. Considere aprovado com média >= 6. -->

<?php
    function Media($n1,$n2){
        $media = ($n1 +$n2)/2;
        if ($media>=6) {
            $aprovado = true;
        } else {
            $aprovado=false;
        }
        $inicativo = array(
            "media" => $media,
            "aprovado"=>$aprovado
        );
        var_dump($inicativo);
        return $inicativo;
    }
    
    Media(5,6);
    echo("<hr>");

// <!-- 2. Crie uma função que receba um array associativo contendo nota e
// peso, realize a média das notas considerando o peso. Exemplos:
// Lista com 2 notas: (N1*P1) + (N2*P2) / 2 = Resultado
// Lista com 3 notas: (N1*P1) + (N2*P2) + (N3*P3) / 3 = Resultado


    function mediaPonderada($notas){
        $soma= 0;
        $soma_pesos=0;
        foreach ($notas as $key => $value) {
            $soma += $value['nota']*$value['peso']; 
            $soma_pesos += $value['peso'];
        }
        $media_ponderada = $soma/$soma_pesos;
        echo($media_ponderada);
    }





    $lista = array(
        array(
            "nota"=>7.5,
            "peso"=>2
        ),
        array(
            "nota"=>5,
            "peso"=>3
        ),
        array(
            "nota"=>6,
            "peso"=>5
        ),
    );
    mediaPonderada($lista);
    echo("<hr>");

    // 3. Crie um programa para cadastrar, listar e excluir produtos de uma
// lista contendo nome e preço. -->

$listaProdutos = array(
    array(
        "nome"=>"lapis",
        "preco"=>2.33
    ),
    array(
        "nome"=>"caderno 50f",
        "preco"=>5.99
    ),
    array(
        "nome"=>"borracha",
        "preco"=>0.85
    ),
);

function listar($x){
    foreach ($x as $key => $value) {
        
        echo(
            "<p> <strong>Nome:</strong> ".$value["nome"]."  <strong>Preço:</strong>:R$".$value["preco"]."<p>"
        );
    }
}
listar($listaProdutos);

function cadastrar($nome,$preco){
    global $listaProdutos;
    $array_cadastro=array(
        "nome"=>$nome,
        "preco"=>$preco
    );

    array_push($listaProdutos,$array_cadastro);

}
cadastrar("regua",12.50);
echo("<hr>");
listar($listaProdutos);

function excluir($produto) {
    global $listaProdutos;

    foreach ($listaProdutos as $key => $value) {
        if ($value['nome'] == $produto) {
            unset($listaProdutos[$key]);
        }
    }
}

excluir("lapis");
echo("<hr>");
listar($listaProdutos);