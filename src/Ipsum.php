<?php

class Ipsum
{
	public function __construct(Dictionary $dictionary)
	{
		$this->dictionary = new Dictionary();
	}

	public function getDictionary()
	{
		return $this->dictionary;
	}

    public function generate()
    {
        $output = 'Mage Ipsum ';
        $output .= $this->getDictionary()->getParagraph();

        return $output;
    }
}
