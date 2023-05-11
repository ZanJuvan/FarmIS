<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_farm
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
\defined('_JEXEC') or die;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

$app = Factory::getApplication();
$input = $app->input;
$wa = $this->document->getWebAssetManager();
$wa->useScript('keepalive')
	->useScript('form.validate');
$layout  = 'edit';
$tmpl = $input->get('tmpl', '', 'cmd') === 'component' ? '&tmpl=component' : '';
$document = JFactory::getDocument();

?>
<form action="<?php echo Route::_('index.php?option=com_farm&layout=' . $layout . $tmpl . '&id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="surveyheader-form" class="form-validate">

	<div class="placeholder">

		<?php echo $this->getForm()->renderField('id'); ?>
		<?php echo $this->getForm()->renderField('field_id'); ?>
		<?php echo $this->getForm()->renderField('type'); ?>
		<?php echo $this->getForm()->renderField('number'); ?>
        <?php error_reporting(0); ?>
		<?php echo $this->getForm()->renderField('date'); ?>
		<?php error_reporting(1); ?>


		<input type="hidden" name="task" value="">
		<?php echo HTMLHelper::_('form.token'); ?>
	</div>
</form>