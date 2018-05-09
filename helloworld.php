<?php

$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir($varDir . '/compiled');
$smarty->setCacheDir($varDir . '/cache');

$smarty->display('helloworld.tpl');
