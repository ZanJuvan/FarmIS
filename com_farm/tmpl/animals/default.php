<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_farm
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
\defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

?>

<form action="<?php echo Route::_('index.php?option=com_farm'); ?>" method="post" name="adminForm" id="adminForm">
    <div class="row">
        <div class="col-md-12">
            <div id="j-main-container" class="j-main-container">
				<?php if (empty($this->items)) : ?>
                    <div class="alert alert-warning">
						<?php echo Text::_('JGLOBAL_NO_MATCHING_RESULTS'); ?>
                    </div>
				<?php else : ?>
                    <table class="table" id="surveyList">
                        <thead>
                        <tr>

                            <th scope="col" style="width:1%" class="text-center d-none d-md-table-cell">
								<?php echo HTMLHelper::_('grid.checkall'); ?>
                            </th>
                            <th scope="col" >
								ID
                            </th>
                            <th scope="col">
                                Ime
                            </th>
                            <th scope="col"  >
                                Koda
                            </th>
                            <th scope="col"  >
								Rojstvo
                            </th>
                            <th scope="col">
                                Vrsta
                            </th>
                            <th scope="col">
                                Število
                            </th>

                        </tr>
                        </thead>
                        <tbody>
						<?php
						$n = count($this->items);
						foreach ($this->items as $i => $item) :
							?>
                            <tr class="row<?php echo $i % 2; ?>">
                                <th scope="row" class="has-context">
									<?php echo HTMLHelper::_('grid.id', $i, $item->id); ?>
									<?php $editIcon = '<span class="fa fa-pencil-square mr-2" aria-hidden="true"></span>'; ?>
                                    <a class="hasTooltip" href="<?php echo Route::_('index.php?option=com_farm&task=animal.edit&id=' . (int) $item->id); ?>" title="<?php echo Text::_('JACTION_EDIT'); ?> <?php echo $this->escape(addslashes($item->id)); ?>">
                                        <span class="icon icon-edit"></span></a>

                                </th>
                                <th  class="d-none d-md-table-cell">
									<?php echo $this->escape($item->id); ?>
                                </th>
                                <td class="d-none d-md-table-cell">
									<?php echo $item->name; ?>
                                </td>
                                <td class="d-none d-md-table-cell">
									<?php echo $item->code; ?>
                                </td>
                                <td class="d-none d-md-table-cell">
	                                <?php error_reporting(0); ?>
	                                <?php echo strftime("%d. %m. %Y", strtotime($item->birthdate))?>
	                                <?php error_reporting(1); ?>
                                </td>

                                <td class="d-none d-md-table-cell">
		                            <?php
		                            ($item->sex == 0)? $spol = "Ž" : $spol = "M";
                                    switch ($item->type):
                                        case 0:
                                            echo "Govedo - " . $spol;
                                            break;
                                        case 1:
                                            echo "Koza - " . $spol;
                                            break;
                                        case 2:
                                            echo "Kokoši";
                                            break;
                                        case 3:
                                            echo "Piščanci";
                                            break;
                                    endswitch;



                                    ?>

                                </td>
                                <td class="d-none d-md-table-cell">
	                                <?php echo $item->number; ?>
                                </td>
                            </tr>
						<?php endforeach; ?>
                        </tbody>
                    </table>
				<?php endif; ?>
                <input type="hidden" name="task" value="">
                <input type="hidden" name="boxchecked" value="0">
				<?php echo HTMLHelper::_('form.token'); ?>
            </div>
        </div>
    </div>

</form>