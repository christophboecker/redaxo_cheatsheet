<?php

/**
 * This file is part of the Watson package.
 *
 * @author (c) Thomas Blum <thomas@addoff.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$addon = rex_addon::get('cheatsheet');

$subpage = rex_be_controller::getCurrentPagePart(2);

echo rex_view::title(rex_i18n::msg('cheatsheet_title') . ' <small>' . $addon->getVersion() . '</small>');

include rex_be_controller::getCurrentPageObject()->getSubPath();
