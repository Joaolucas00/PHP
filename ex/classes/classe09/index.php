<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces de Objetos PHP</title>
</head>
<body>
    <?php 
    /** Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe deve implementar, 
     * sem definir como esses métodos serão tratados.
     * Interfaces são definidas da mesma forma que classes, 
     * mas com a palavra-chave interface substituindo class 
     * e com nenhum dos métodos tendo seu conteúdo definido.
     * 
     * Todos os métodos declarados em uma interface devem ser públicos, essa é a natureza de uma interface.
     * 
     *  Classes podem implementar mais de uma interface se assim for desejado, separando cada interface com uma vírgula.
     * 
     *  Interfaces podem ser estendidas como as classes, usando o operador extends.
     * 
     *  A classe que implementa a interface precisa ter as mesmas assinaturas de método como definidas na interface. Não fazê-lo resultará em um erro fatal
     * 
     *  Em versões anteriores ao PHP 5.3.9, uma classe não poderia implementar duas interfaces que especificassem um método com o mesmo nome, pois causaria ambiguidade. 
     * Versões mais recentes do PHP, isso é permitido, desde que os métodos duplicados tenham a mesma assinatura.
     * 
     *  Constantes
     * É possível ter constantes em interfaces. 
     * Constantes de interfaces funcionam exatamente como constantes de classes, 
     * com exceção de não poderem ser sobrescritas por uma classe/interface herdeira.
     */
    
    
    
    
    ?>
</body>
</html>