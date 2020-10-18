<?php
// Operador de execução

    // Os backticks ou backquotes (``) executam o conteúdo
    // como um comando shell e são equivalentes a shell_exec()
    // exec() e system(), todos são capazes de executar
    // comando no nível do shell.

    $output = `ls -al`;
    echo "<pre>$output</pre>";
?>
