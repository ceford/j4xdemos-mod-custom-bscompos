<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom_bscompos
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$bscompos = $params->get('bscompos');

if (!empty($bscompos))
{
	foreach ($bscompos as $bscompo)
	{
		switch ($bscompo)
		{
			case 'alert':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.alert', '.alert');
				break;
			case 'button':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.button', '.selector');
				break;
			case 'carousel':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.carousel', '.selector', []);
				break;
			case 'collapse':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.collapse', '.selector', []);
				break;
			case 'dropdown':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.dropdown', '.selector', []);
				break;
			case 'modal':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.modal', '.selector', []);
				break;
			case 'offcanvas':
				// Not Found
				//\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.offcanvas', '.btn', []);
				break;
			case 'popover':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.popover', '.btn', []);
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.popover', 'a', []);
				break;
			case 'scrollspy':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.scrollspy', '.selector', []);
				break;
			case 'tab':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.tab', '.selector', []);
				break;
			case 'tooltip':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.tooltip', '.btn', []);
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.tooltip', 'a', []);
				break;
			case 'toast':
				\Joomla\CMS\HTML\HTMLHelper::_('bootstrap.toast', '.toast', []);
				break;
			default:
				// do nothing
		}
	}
}
?>


<div class="mod-custom custom" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage'); ?>)"<?php endif; ?>>
	<?php echo $module->content; ?>
</div>
