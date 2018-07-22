# Consulta RUC desde PHP
Servicio para consultar una empresa desde PHP.

        String apiKey = "PNVn0DEQiy9iKsG7yO7al1c9vjVZBabi1UIhEqAP";
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
        
# Resultado
Al ingresar al navegador podemos obtener el siguiente resultado...
http://localhost/Main.php

        include './ApiConsultaServicio.php';
        Array ( [success] => 1 [message] => Ruc encontrado [item] => Array ( [_id] => 20600567013 [name] => FIT CODERS S.R.L. [state] =>                    ACTIVO [condition] => HABIDO [ubigeo] => 100601 [address] => SAN MIGUEL CASTILLO GRANDE Lt. 12 Mz. 07 ) ) 
        -----------------------------------
        Ruc: 20600567013
        Nombre: FIT CODERS S.R.L.
        Estado: ACTIVO
        Condic: HABIDO
        Direcc: SAN MIGUEL CASTILLO GRANDE Lt. 12 Mz. 07
  
