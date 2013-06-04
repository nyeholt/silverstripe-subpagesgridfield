<?php

class SubpagesGridFieldAddNewButton extends GridFieldAddNewButton{

	public function getHTMLFragments($gridField) {
		if(!$this->buttonName) {
			// provide a default button name, can be changed by calling {@link setButtonName()} on this component
			$objectName = singleton($gridField->getModelClass())->i18n_singular_name();
			$this->buttonName = _t('GridField.Add', 'Add {name}', array('name' => $objectName));
		}

		$data = new ArrayData(array(
			'NewLink' => Controller::join_links('admin/pages/add/', '?ParentID=' . Controller::curr()->CurrentPageID()),
			'ButtonName' => $this->buttonName,
		));

		return array(
			$this->targetFragment => $data->renderWith('GridFieldAddNewbutton'),
		);
	}
}
