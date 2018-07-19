<?php

require_once( __DIR__ . '/vendor/autoload.php' );

try {
	Render::Run();
} catch ( \Exception $e ) {
	echo 'Message: ' . $e->getMessage();
}
