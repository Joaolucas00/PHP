<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag PHP com condições</title>
</head>
<body>
    <?php 
        $verdadeiro = true;
        $falso = false;
    ?>
    <p>Podemos utilizar tag PHP com condições, nesse caso a saída não vai ser um  echo, mas sim o que está logo abaixo da tag PHP condicional, assim também vai ignorar outras tag PHP caso for falso.</p>

    <?php if ($falso): ?>
        Isto irá aparecer se a expressão for verdadeira
        <p>Podemos fazer o que quiser aqui dentro, até incluir tags</p>
        <p>Isso ajuda bastante porque podemos incluir várias tags aqui dentro sem o html ficar muito poluído</p>
    <?php else: ?>
        Senão isso que aparecerá
        <p id="paragrafo"></p>
        <script>
            var p = document.getElementById('paragrafo')
            p.innerHTML = 'Podemos incluir javascript também.'
        </script>
    <?php endif; ?>

    <p>Para impressão de grandes blocos de texto, sair do modo de interpretação do PHP é geralmente mais eficiente que enviar todo o texto através das funções echo ou print</p>
    <p>Using this method, you can have HTML tags with optional attributes, depending on some PHP condition. Extremely flexible and useful!</p>
</body>
</html>