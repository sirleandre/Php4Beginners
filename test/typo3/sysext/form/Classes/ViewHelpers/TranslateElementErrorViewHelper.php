<?php
declare(strict_types=1);
namespace TYPO3\CMS\Form\ViewHelpers;

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

use TYPO3\CMS\Form\Domain\Model\Renderable\RootRenderableInterface;
use TYPO3\CMS\Form\Domain\Runtime\FormRuntime;
use TYPO3\CMS\Form\Service\TranslationService;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * Translate form element properites.
 *
 * Scope: frontend / backend
 * @api
 */
class TranslateElementErrorViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * Initialize arguments.
     *
     * @internal
     */
    public function initializeArguments()
    {
        $this->registerArgument('element', RootRenderableInterface::class, 'Form Element to translate', true);
        $this->registerArgument('code', 'integer', 'Error code', true);
        $this->registerArgument('arguments', 'array', 'Error arguments', false, null);
        $this->registerArgument('defaultValue', 'string', 'The default value', false, '');
    }

    /**
     * Return array element by key.
     *
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return string
     * @api
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $element = $arguments['element'];

        /** @var FormRuntime $formRuntime */
        $formRuntime =  $renderingContext
            ->getViewHelperVariableContainer()
            ->get(RenderRenderableViewHelper::class, 'formRuntime');

        return TranslationService::getInstance()->translateFormElementError(
            $element,
            $arguments['code'],
            $arguments['arguments'],
            $arguments['defaultValue'],
            $formRuntime
        );
    }
}
