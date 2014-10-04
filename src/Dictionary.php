<?php

class Dictionary
{

	const WORDS_IN_SENTENCE_MIN = 5;
	const WORDS_IN_SENTENCE_MAX = 10;
	const SENTENCES_IN_PARAGRAPH_MIN = 5;
	const SENTENCES_IN_PARAGRAPH_MAX = 8;

	public function __construct()
	{
		$this->data   = file_get_contents('./dictionary.txt');
		$this->random = new Random();
	}

	public function getRandom()
	{
		return $this->random;
	}

	public function getData()
	{
		return explode(' ',$this->data);
	}

	public function getOutput($count = 5)
	{
		$output = [];

		for($i=0;$i<5;$i++){
			$output[] = $this->getParagraph();
		}

		return implode("\n\n", $output);
	}

	public function getParagraph()
	{
		$output         = [];
		$sentenceLength = $this->getRandom()->getInteger(self::SENTENCES_IN_PARAGRAPH_MIN, self::SENTENCES_IN_PARAGRAPH_MAX);

        for($i=0;$i<$sentenceLength;$i++){
        	$output[] = $this->getSentence();
        }

        return implode(' ', $output);
	}

	public function getSentence()
	{
		$output          = [];
		$paragraphLength = $this->getRandom()->getInteger(self::WORDS_IN_SENTENCE_MIN, self::WORDS_IN_SENTENCE_MAX);

        for($i=0;$i<$paragraphLength;$i++){
        	$output[] = $this->getWord();
        }

        return ucfirst(implode(' ', $output)) . '.';
	}

	public function getWord()
	{
		$count = count($this->getData()) - 1;
		return str_replace('-', ' ', $this->getData()[$this->getRandom()->getInteger(0, $count)]);
	}
}