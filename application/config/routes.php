<?php

/**
 * Routes List.
 * 'url' => 'controller/method'.
 */
return array(
    '\/countries' => 'Countries/index',
    '\/countries\/add' => 'Countries/add',
    '\/countries\/ajaxadding' => 'Countries/ajaxAdding',
    '\/countries\/adding' => 'Countries/postFormAdding',
    '\/' => 'Home/index'
);