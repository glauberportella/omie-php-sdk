<?php

class RandomGenerators
{

    /**
     * Método para gerar CNPJ válido, com máscara ou não
     * @example cnpjRandom(0)
     *          para retornar CNPJ sem máscar
     * @param int $mascara
     * @return string
     */
    public static function cnpj($mascara = 0) {
        $n1 = rand(0, 9);
        $n2 = rand(0, 9);
        $n3 = rand(0, 9);
        $n4 = rand(0, 9);
        $n5 = rand(0, 9);
        $n6 = rand(0, 9);
        $n7 = rand(0, 9);
        $n8 = rand(0, 9);
        $n9 = 0;
        $n10 = 0;
        $n11 = 0;
        $n12 = 1;
        $d1 = $n12 * 2 + $n11 * 3 + $n10 * 4 + $n9 * 5 + $n8 * 6 + $n7 * 7 + $n6 * 8 + $n5 * 9 + $n4 * 2 + $n3 * 3 + $n2 * 4 + $n1 * 5;
        $d1 = 11 - (self::mod($d1, 11) );
        if ($d1 >= 10) {
            $d1 = 0;
        }
        $d2 = $d1 * 2 + $n12 * 3 + $n11 * 4 + $n10 * 5 + $n9 * 6 + $n8 * 7 + $n7 * 8 + $n6 * 9 + $n5 * 2 + $n4 * 3 + $n3 * 4 + $n2 * 5 + $n1 * 6;
        $d2 = 11 - (self::mod($d2, 11) );
        if ($d2 >= 10) {
            $d2 = 0;
        }
        $retorno = '';
        if ($mascara == 1) {
            $retorno = '' . $n1 . $n2 . "." . $n3 . $n4 . $n5 . "." . $n6 . $n7 . $n8 . "/" . $n9 . $n10 . $n11 . $n12 . "-" . $d1 . $d2;
        } else {
            $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $n10 . $n11 . $n12 . $d1 . $d2;
        }
        return $retorno;
    }

    /**
     * Método para gerar CPF válido, com máscara ou não
     * @example cpfRandom(0)
     *          para retornar CPF sem máscar
     * @param int $mascara
     * @return string
     */
    public static function cpf($mascara = 0) {
        $n1 = rand(0, 9);
        $n2 = rand(0, 9);
        $n3 = rand(0, 9);
        $n4 = rand(0, 9);
        $n5 = rand(0, 9);
        $n6 = rand(0, 9);
        $n7 = rand(0, 9);
        $n8 = rand(0, 9);
        $n9 = rand(0, 9);
        $d1 = $n9 * 2 + $n8 * 3 + $n7 * 4 + $n6 * 5 + $n5 * 6 + $n4 * 7 + $n3 * 8 + $n2 * 9 + $n1 * 10;
        $d1 = 11 - (self::mod($d1, 11) );
        if ($d1 >= 10) {
            $d1 = 0;
        }
        $d2 = $d1 * 2 + $n9 * 3 + $n8 * 4 + $n7 * 5 + $n6 * 6 + $n5 * 7 + $n4 * 8 + $n3 * 9 + $n2 * 10 + $n1 * 11;
        $d2 = 11 - (self::mod($d2, 11) );
        if ($d2 >= 10) {
            $d2 = 0;
        }
        $retorno = '';
        if ($mascara == 1) {
            $retorno = '' . $n1 . $n2 . $n3 . "." . $n4 . $n5 . $n6 . "." . $n7 . $n8 . $n9 . "-" . $d1 . $d2;
        } else {
            $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $d1 . $d2;
        }
        return $retorno;
    }

    /**
     * Random emails
     * 
     * @param int $nemails Quantity of email address to generate, one by default.
     * @return array|mixed
     */
    public static function emails($nemails = 1) {
        $emails = array();
        
        // array of possible top-level domains
        $tlds = array("com", "net", "gov", "org", "edu", "biz", "info");

        // string of possible characters
        $char = "0123456789abcdefghijklmnopqrstuvwxyz";
        
        for ($j = 0; $j < $nemails; $j++) {

            // choose random lengths for the username ($ulen) and the domain ($dlen)
            $ulen = mt_rand(5, 10);
            $dlen = mt_rand(7, 17);

            // reset the address
            $a = "";

            // get $ulen random entries from the list of possible characters
            // these make up the username (to the left of the @)
            for ($i = 1; $i <= $ulen; $i++) {
                $a .= substr($char, mt_rand(0, strlen($char)), 1);
            }

            // wouldn't work so well without this
            $a .= "@";

            // now get $dlen entries from the list of possible characters
            // this is the domain name (to the right of the @, excluding the tld)
            for ($i = 1; $i <= $dlen; $i++) {
                $a .= substr($char, mt_rand(0, strlen($char)), 1);
            }

            // need a dot to separate the domain from the tld
            $a .= ".";

            // finally, pick a random top-level domain and stick it on the end
            $a .= $tlds[mt_rand(0, (sizeof($tlds)-1))];

            // done - adds to result
            $emails[] = $a;

        }
        
        if (!count($emails)) {
            null;
        }

        return $nemails == 1 ? $emails[0] : $emails;
    }

    public static function phone() {
        $ddd = mt_rand(11, 31);
        $number = mt_rand(911110000, 999999999);
        return array('ddd' => $ddd, 'number' => $number);
    }

    /**
     * @param type $dividendo
     * @param type $divisor
     * @return type
     */
    private static function mod($dividendo, $divisor) {
        return round($dividendo - (floor($dividendo / $divisor) * $divisor));
    }
}