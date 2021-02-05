<?php
//funcoes recursivas - quando a funcao chama ela mesma
//$hierarquia recebe toda a estrutura de arrays 
$hierarquia = array( //array de objetos/array bi-dimensional (dentro dele tem ouro array)
    array( //objeto
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretor Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )  //Termino: Gerente de Vendas
                )
            ),
            //Termino: Diretor Comercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Inicio: Gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerende de Contas a Pagar',
                        'subordinados' => array(
                            //Inicio> Supervisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            ) //Termino: Supervisor de Pagamentos
                        )

                    ),
                    //Termino: Diretor Financeiro
                    //Inicio gerente de compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo'=>'funcionarios'
                                    )
                                )
                            ) //Termino: Supervisor de Suprimentos
                        ) //Termino: Gerente de Compras
                    )
                )
            ) 
        )
    )
);
function exibe($cargos){
    $html = "<ul>";
    foreach ($cargos as $cargo) {
        $html .= "<li>";//contatenado com a lista <li>
        $html .= $cargo['nome_cargo'];
        //verifica se o index (chave subordinado) foi definida e se dentro de subordinado tem mais de 0 itens
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);//funcao recursiva  ou seja ela executara o codigo acima quantas vezes tiver o array de cargos
        }
    $html .= "</li>";
    }
    $html .= "</ul>";
    return $html; // retorna pra tela
}
echo exibe($hierarquia); //essa é uma funcao recursiva
?>
