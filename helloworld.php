<?php

$smarty = new Smarty();
$smarty->template_dir = __DIR__ . '/templates';
$smarty->compile_dir = $varDir . '/compiled';
$smarty->cache_dir = $varDir . '/cache';

$smarty->display('helloworld.tpl');
