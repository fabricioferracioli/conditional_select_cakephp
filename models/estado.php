<?php
class Estado extends AppModel
{
    var $name = 'Estado';
    var $hasMany = array(
        'Cidade' => array(
            'dependent' => true
        )
    );
}
?>
