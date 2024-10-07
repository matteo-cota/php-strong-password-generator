<?php
function generaPassword($lunghezza, $permessoRipetizione, $tipi)
{

    $caratteri = '';
    $setLettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $setNumeri = '0123456789';
    $setSimboli = '!@#$%^&*()';

    if (in_array('lettere', $tipi)) {
        $caratteri .= $setLettere;
    }
    if (in_array('numeri', $tipi)) {
        $caratteri .= $setNumeri;
    }
    if (in_array('simboli', $tipi)) {
        $caratteri .= $setSimboli;
    }


    if ($caratteri === '') {
        $caratteri = $setLettere . $setNumeri . $setSimboli;
    }


    $password = '';
    $lunghezzaCaratteri = strlen($caratteri);

    if ($permessoRipetizione) {
        for ($i = 0; $i < $lunghezza; $i++) {
            $password .= $caratteri[random_int(0, $lunghezzaCaratteri - 1)];
        }
    } else {

        if ($lunghezza > $lunghezzaCaratteri) {
            return 'Errore: Non ci sono abbastanza caratteri.';
        }
        $caratteriUsati = [];
        while (strlen($password) < $lunghezza) {
            $carattere = $caratteri[random_int(0, $lunghezzaCaratteri - 1)];
            if (!in_array($carattere, $caratteriUsati)) {
                $password .= $carattere;
                $caratteriUsati[] = $carattere;
            }
        }
    }

    return $password;
}
