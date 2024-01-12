<?php
namespace Dagou\BootstratpStyledContent\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class FillViewHelper extends AbstractViewHelper {
    /**
     * @var boolean
     */
    protected $escapeOutput = FALSE;

    public function initializeArguments(): void {
        parent::initializeArguments();

        $this->registerArgument('total', 'int', 'Total number.', TRUE);
        $this->registerArgument('per', 'int', 'Per', TRUE);
    }

    /**
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param \TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext
     *
     * @return string
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext): string {
        if ($arguments['per'] !== (int)$arguments['per'] || $arguments['per'] < 1) {
            return '';
        }

        $content = '';

        for ($i = 0, $n = $arguments['per'] - $arguments['total'] % $arguments['per']; $i < $n; $i++) {
            $content .= $renderChildrenClosure();
        }

        return $content;
    }
}