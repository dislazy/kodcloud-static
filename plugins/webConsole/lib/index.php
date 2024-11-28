<?php

// 登录认证;
include('../../../app/api/KodSSO.class.php');
KodSSO::check('user:admin');//'webConsole' , 'user:admin';
KodSSO::check('webConsole');

$NO_LOGIN = true;
$commandAlias = array(
	'll'	=> 'ls -al',
	'la'	=> 'ls -al',
	'cls'	=> 'clear',
	'ps'	=> 'ps -el',
	'.'		=> 'cd ../',
	'..'	=> 'cd ../../',
);
$commandStyle = "div.terminal, div.terminal-output, div.terminal-output div{user-select:text;}";
include('./webconsole.php.txt');