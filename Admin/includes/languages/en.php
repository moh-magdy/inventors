<?php

/*
=================================================================================
========================== /interface/ English language page ====================
=================================================================================
*/

    function lang($phrase) {

        static $lang = array(
          // Content
          //    Key      =>     Value
         'HI'  =>     'Welcome!',
         'HELLO'  =>     'Hello world ',
        );
        return $lang[$phrase];
    } 