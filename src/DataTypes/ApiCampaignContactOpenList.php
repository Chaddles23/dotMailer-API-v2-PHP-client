<?php
/**
 * 
 * 
 * @author Roman Piták <roman@pitak.net>
 * 
 */
 
 

namespace DotMailer\Api\DataTypes;


class ApiCampaignContactOpenList extends JsonArray {

	protected function getDataClass() {
		return 'ApiCampaignContactOpen';
	}

} 