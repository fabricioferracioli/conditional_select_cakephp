<?php
class EstadosController extends AppController
{
    var $name = 'Estados';
    var $helpers = array('Html', 'Form', 'Javascript', 'Ajax');
    var $components =  array('RequestHandler');
    function lista_cidades()
    {
        $estados = $this->Estado->find('list',
            array(
                'fields' => array('Estado.id', 'Estado.estado'),
            )
        );
        $this->set('estados', $estados);
    }
    function cidades_estado()
    {
        $cidades = $this->Estado->Cidade->find('list',
            array(
                'conditions' => array('Cidade.estado_id' => $this->data['Estado']['estado']),
                'fields' => array('Cidade.id', 'Cidade.cidade'),
                'order' => array('Cidade.cidade ASC')
           )
        );
        $this->set('cidades', $cidades);
    }
}
?>
