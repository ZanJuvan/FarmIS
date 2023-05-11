<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_farm
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace FarmNamespace\Component\Farm\Administrator\Table;
\defined('_JEXEC') or die;

use JFactory;
use Joomla\CMS\Application\ApplicationHelper;
use Joomla\CMS\Table\Table;
use Joomla\Database\DatabaseDriver;

/**
 *
 *
 * @property int    id
 * @property string manufacturer
 * @property string model
 * @property string description
 * @property int    type
 * @property string create_date
 * @property int    checked_out
 * @property string checked_out_time
 * @property int    created_by
 * @property string created
 * @property int    modified_by
 * @property string modified
 *
 * @since  1.0.0
 */
class EquipmentTable extends Table
{
	/**
	 * Constructor
	 *
	 * @param   DatabaseDriver  $db  Database connector object
	 *
	 * @since   1.0.0
	 */
	public function __construct(DatabaseDriver $db)
	{
		$this->typeAlias = 'com_farm.equipment';
		parent::__construct('#__farm_equipment', 'id', $db);
	}

}