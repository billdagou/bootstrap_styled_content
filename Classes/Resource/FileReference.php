<?php
namespace Dagou\BootstratpStyledContent\Resource;

class FileReference extends \TYPO3\CMS\Core\Resource\FileReference
{
    /**
     * @return string
     */
    public function getDescriptionPosition()
    {
        return $this->propertiesOfFileReference['description_position'];
    }

    /**
     * @return bool
     */
    public function getResponsive()
    {
        return $this->propertiesOfFileReference['responsive'];
    }

    /**
     * @return string
     */
    public function getShape()
    {
        return $this->propertiesOfFileReference['shape'];
    }
}