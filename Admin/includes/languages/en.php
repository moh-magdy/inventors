<?php

/*
=================================================================================
========================== /interface/ English language page ====================
=================================================================================
*/

    function lang ($phrase) {

        static $lang = array(
          // Content
          //    Key      =>     Value
         /* 'SITE_NAME'  =>     'Admin',*/
        );
        return $lang[$phrase];
    } 