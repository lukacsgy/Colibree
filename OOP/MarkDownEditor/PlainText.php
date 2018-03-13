<?php

class PlainText {

	/**
	 * @var string
	 */
	protected $text;

	public function __construct($text) {
		$this->text = $text;
	}

	public function toMarkdown() {
		return $this->text;
	}

	public function toHtml() {
		return "<p>" . $this->text . "</p>";
	}

}
