<?php
/*
=================================================================================
=========================== /interface/ Arabic Language Page ====================
=================================================================================
*/
    function lang ($phrase) {

        static $lang = array(
          // Content
          //Key => Value
        );
        return $lang[$phrase];
    } 