<?php

namespace Sirius\Forms\Renderer\Widget;

use Sirius\Forms\Renderer\Widget\Base;

class Textarea extends Input {
	protected $tag = 'textarea';
	protected $isSelfClosing = false;

	protected function renderSelf() {
		$this->text($this->value());
		return parent::renderSelf();
	}
}