<?php
/**
 * 
 * 
 * @author Roman Piták <roman@pitak.net>
 * 
 */
 
 

namespace DotMailer\Api\DataTypes;

/**
 * Class ApiContactData
 *
 * @property XsString key
 * @property Mixed value
 *
 */
final class ApiContactData extends JsonObject {

	public function getProperties() {
		return array(
			'key' => 'XsString',
			'Value' => 'Mixed'
		);
	}

} 