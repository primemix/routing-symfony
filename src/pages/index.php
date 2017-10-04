<?php

$input = $request->get('name', 'GeekHub!');
$response->setContent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));