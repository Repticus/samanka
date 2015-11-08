<?php

/**
 * Homepage presenter.
 *
 * @author     Martin Bubik
 * @package    Alkyone.cz
 */
class SamankaPresenter extends Nette\Application\UI\Presenter {

	public function beforeRender() {
		$this->template->toplist = $this->context->parameters['toplist'];
	}

}
