<?php
namespace App\Services;

use App\Models\codigo_action;

class Codigos{

    public function get(){

        $codigos = codigo_action::get();
        $codigoArray[''] = 'Selecciona un codigo';

        foreach ($codigos as $codigo){
            $codigoArray[$codigo->id] = $codigo->codigoAccion;
        }

        return $codigoArray;
    }

}

?>
