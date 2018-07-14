<?php
namespace Dagou\BootstratpStyledContent\Resource;

class FileReference extends \TYPO3\CMS\Core\Resource\FileReference {
    /**
     * @return string
     */
    public function getAspectRatio() {
        return $this->getProperty('aspect_ratio');
    }

    /**
     * @return string
     */
    public function getDescriptionPosition() {
        return $this->getProperty('description_position');
    }

    /**
     * @return bool
     */
    public function getResponsive() {
        return (bool)$this->getProperty('responsive');
    }

    /**
     * @return string
     */
    public function getShape() {
        return $this->getProperty('shape');
    }

    /**
     * @return bool
     */
    public function getThumbnail() {
        return (bool)$this->getProperty('thumbnail');
    }
}