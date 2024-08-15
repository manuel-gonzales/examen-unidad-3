<?php
    function setActivo($ruta){
        $value = request()->routeIs($ruta);
        return $value ? 'activo' : '';
    }