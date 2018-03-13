<?php

class BolderText extends PlainText {
	
	public function toMarkdown() {
		return "**"."$this->text" . "**";
	}
	
	public function toHtml() {
		return "<strong>" . $this->text . "</strong>";
	}

}
