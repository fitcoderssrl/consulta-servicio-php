<?php

include './server/ApiConsultaServicio.php';
$entity = ApiConsultaServicio::basic("PNVn0DEQiy9iKsG7yO7al1c9vjVZBabi1UIhEqAP", "20600567013");
print_r($entity);

echo '<br/>';
echo '-----------------------------------<br/>';
echo 'Ruc:    ' . $entity['item']['_id'];
echo '<br/>';
echo 'Nombre: ' . $entity['item']['name'];
echo '<br/>';
echo 'Estado: ' . $entity['item']['state'];
echo '<br/>';
echo 'Condic: ' . $entity['item']['condition'];
echo '<br/>';
echo 'Direcc: ' . $entity['item']['address'];


