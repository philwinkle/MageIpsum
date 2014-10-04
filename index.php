<?php

require('vendor/autoload.php');
$ipsum = new Ipsum(new Dictionary());

var_dump($ipsum->generate());