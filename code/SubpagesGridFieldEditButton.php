<?php

class SubpagesGridFieldEditButton extends GridFieldEditButton{
	/**
	 *
	 * @param GridField $gridField
	 * @param DataObject $record
	 * @param string $columnName
	 * @return string - the HTML for the column 
	 */
	public function getColumnContent($gridField, $record, $columnName) {
		if(!$record->canEdit()){
			return;
		}
		$data = new ArrayData(array(
			'Link' => "admin/pages/edit/show/$record->ID"
		));

		return $data->renderWith('GridFieldEditButton');
	}
}

