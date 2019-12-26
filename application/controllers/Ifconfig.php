<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ifconfig extends CI_Controller {

    public function showInfo()
    {
        $sip = system('netstat -nltp | grep 5060 | wc -l');
        if($sip >= 1)
            echo 'OK';
        else echo 'DEAD';
    }

}

/* End of file Ifconfig.php */
