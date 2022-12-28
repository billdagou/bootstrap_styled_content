<?php
namespace Dagou\BootstratpStyledContent\Resource;

class FileReference extends \TYPO3\CMS\Core\Resource\FileReference {
    /**
     * @return string
     */
    public function getAspectRatio(): string {
        return $this->getProperty('aspect_ratio');
    }

    /**
     * @return string
     */
    public function getDescriptionPosition(): string {
        return $this->getProperty('description_position');
    }

    /**
     * @return bool
     */
    public function getResponsive(): bool {
        return (bool)$this->getProperty('responsive');
    }

    /**
     * @return string
     */
    public function getShape(): string {
        return $this->getProperty('shape');
    }

    /**
     * @return bool
     */
    public function getThumbnail(): bool {
        return (bool)$this->getProperty('thumbnail');
    }
}