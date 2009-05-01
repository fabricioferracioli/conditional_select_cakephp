<?php
if(!empty($cidades))
{
    foreach ($cidades as $id => $cidade)
    {
        echo '<option value="'.$id.'">'.$cidade.'</option>';
    }
}
?>
