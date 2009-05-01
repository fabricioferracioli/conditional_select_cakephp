<?php
    echo $javascript->link('prototype', false);
    echo $javascript->link('http://cidades-estados-js.googlecode.com/files/cidades-estados-1.0.js', false);
    echo $javascript->link('cidade_estado', false);
?>
    <fieldset>
        <legend>CakePHP Way</legend>
<?php
var_dump($estados);
    echo $form->input('Estado.estado', array('options' => $estados));
    echo $form->input('Estado.cidades', array('options' => array()));
    echo $ajax->observeField('EstadoEstado',
        array(
            'update' => 'EstadoCidades',
            'url' => array('controller' => 'estados', 'action' => 'cidades_estado')
        )
    );
?>
    </fieldset>
    <fieldset>
        <legend>Cidades-Estado</legend>
<?php
    echo $form->input('estado', array('type' => 'select'));
    echo $form->input('cidade', array('type' => 'select'));
?>
    </fieldset>
