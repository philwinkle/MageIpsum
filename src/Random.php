<?php

class Random
{

	public function getInteger($min = 1, $max = 10)
	{
		return mt_rand(1,$max);
	}
}
