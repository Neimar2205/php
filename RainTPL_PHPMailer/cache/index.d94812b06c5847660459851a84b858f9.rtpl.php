<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Teste de template!!!</p>

<p> Versao do PHP :<strong> <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></p>
