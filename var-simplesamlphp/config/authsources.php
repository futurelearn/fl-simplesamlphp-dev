<?php

$config = array (
    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'joebloggs:password' => array(
            'uid' => array('joebloggs'),
            'eduPersonAffiliation' => array('member', 'employee'),
            'emailAddress' => array('joe@corp.com'),
        ),
    ),
);

?>
