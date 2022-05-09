<?php
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Causal\FileList\Tca;

/**
 * Template layout selector.
 *
 * @category    Tca
 * @author      Xavier Perseguers <xavier@causal.ch>
 * @copyright   Causal Sàrl
 * @license     http://www.gnu.org/copyleft/gpl.html
 */
class TemplateLayoutSelector
{

    /**
     * Renders a list of available template layouts.
     *
     * @param array $fieldDefinition
     * @return array
     */
    public function render(array &$fieldDefinition): array
    {
        if (empty($fieldDefinition)) {
            $fieldDefinition = ['items' => []];
        }

        $items = [];
        foreach ($GLOBALS['TYPO3_CONF_VARS']['EXT']['file_list']['templateLayouts'] as $item) {
            $items[] = $item;
        }

        $fieldDefinition['items'] = array_merge($fieldDefinition['items'], $items);

        return $fieldDefinition;
    }
}
