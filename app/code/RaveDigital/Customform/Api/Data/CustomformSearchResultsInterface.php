<?php
declare(strict_types=1);

namespace RaveDigital\Customform\Api\Data;

interface CustomformSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Customform list.
     * @return \RaveDigital\Customform\Api\Data\CustomformInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \RaveDigital\Customform\Api\Data\CustomformInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

