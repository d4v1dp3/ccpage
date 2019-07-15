<?php

class GeneraPasswd {

    public function getPasswd($size) {
        $caracteres = '0123456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ$#@!?';
        $caractereslong = strlen($caracteres);
        $clave = '';
        for ($i = 0; $i < $size; $i++) {
            $clave .= $caracteres[rand(0, $caractereslong - 1)];
        }
        return $clave;
    }

}

?>