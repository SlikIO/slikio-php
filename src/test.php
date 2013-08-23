<?php
	require 'slikio.php';

	echo "Testing\n";
	$data = array(
		'user' => 'Daniel',
		'email' => 'daniel@slik.io',
		'money' => 150,
		'age' => 17 
	);
	$col_id = 'col_3b057f15e4';
	$slikio = new SlikIO('prvkey_080618f6837fe75d8511');
	$r = $slikio->sendData($col_id, $data);
	echo "\n{$r}\n";
?>
