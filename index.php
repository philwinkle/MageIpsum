<?php

require('vendor/autoload.php');
$ipsum = new Ipsum(new Dictionary());

echo $ipsum->generate();