<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_farm
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace FarmNamespace\Component\Farm\Administrator\Model;
\defined('_JEXEC') or die;
use Joomla\CMS\MVC\Model\ListModel;
/**
 * Methods supporting a list of foo records.
 *
 * @since  1.0.0
 */
class ServicesModel extends ListModel
{
	/**
	 * Constructor.
	 *
	 * @param   array  $config  An optional associative array of configuration settings.
	 *
	 * @see     \JControllerLegacy
	 *
	 * @since   1.0.0
	 */
	public function __construct($config = [])
	{
		parent::__construct($config);
	}
	/**
	 * Build an SQL query to load the list data.
	 *
	 * @return  \JDatabaseQuery
	 *
	 * @since   1.0.0
	 */
	protected function getListQuery()
	{
		// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		// Select the required fields from the table.
		$query->select("a.*, CONCAT(b.manufacturer, ' ',b.model) AS equipment_name");
		$query->from('#__farm_service AS a');

		$query->join('LEFT', '#__farm_equipment AS b ON b.id = a.equipment_id');

		return $query;
	}
}
