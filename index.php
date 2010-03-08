<?php

    include 'Html.php';

    /**
     * Tipo 1
    */
    echo Html::tag('div', 'Conteúdo da Div', array('id' => 'IdDiv'));
    echo Html::tag('br');

    echo Html::tag('span', 'Counteúdo Span');
    echo Html::tag('br');

    echo Html::tag('a', 'iMasters', array('href' => 'http://imasters.com.br/', 'target' => '_blank'));
    echo Html::tag('br');
    
    /**
     * Tipo 2
     */


    // Input modo 1
    echo Html::tag('input', 'text');
    echo Html::tag('br');

    // Input modo 1
    echo Html::tag('input', array('type' => 'text'));
    echo Html::tag('br');


    echo Html::tag('textarea', 'Conteudo', array('name' => 'myTextArea'));
    echo Html::tag('br');


    // Img modo 1
    echo Html::tag('img', 'http://forum.imasters.uol.com.br/public/style_images/imasters2010/logo.png', array('alt' => 'iMasters'));
    echo Html::tag('br');

    // Img modo 2
    echo Html::tag('img', array('src' => 'http://forum.imasters.uol.com.br/public/style_images/imasters2010/logo.png', 'alt' => 'iMasters'));
    echo Html::tag('br');


    // Script
    echo Html::tag('script', 'var a = "b"');
    echo Html::tag('br');
    
    //....
?>