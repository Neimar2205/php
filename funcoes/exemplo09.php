<?php

$hierarquia=array(
    // Inicio: CEO
    array(
        'nomeCargo'=>'CEO',
        'subordinados'=>array(
            //Inicio: Diretor comercial 
            array(
                'nomeCargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio: Gerente de Vendas
                    array(
                        'nomeCargo'=>'Gerente de Vendas'
                    )// Fim: Gerente de Vendas
                    )
            ), //Fim: Diretor comercial

            //Inicio: Diretor Financeiro
            array(
                'nomeCargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //inicio: Gerente de compras
                    array(
                        'nomeCargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nomeCargo'=>'Supervisor de Suprimentos'
            
                            )//Fim: Supervisor de Suprimentos
                        )
                    ),//Fim Gerente de compras
                    //Inicio: Gerente Financeiro
                    array(
                        'nomeCargo'=>'Gerente Financeiro',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Contas a Pagar
                            array(
                                'nomeCargo'=>'Supervisor de Contas a Pagar',
                                'subordinados'=>array(
                                    array(
                                        'nomeCargo'=>'funcionarios'
                                    )
                                )
            
                            )//Fim: Supervisor de Contas a Pagar
                        )
                    )//Fim Gerente Financeiro
                )
            ),// Fim: Diretor Comercial
      )
    )//Fim: CEO
);

function exibir($cargos){
 $html= "<ul>";
        foreach ($cargos as $cargo){
            $html.="<li>";

                $html .= $cargo['nomeCargo'];

                if(isset($cargo['subordinados'])&& count($cargo['subordinados'])> 0 ){

                    $html .= exibir($cargo['subordinados']);
                }
            
            $html.="</li>";
        }
    $html.="</ul>";
    return $html;
}
echo exibir($hierarquia);
?>