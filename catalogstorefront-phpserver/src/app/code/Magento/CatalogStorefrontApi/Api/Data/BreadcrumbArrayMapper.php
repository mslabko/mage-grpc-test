<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for Breadcrumb class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class BreadcrumbArrayMapper
{
    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Convert the DTO to the array with the data
    *
    * @param Breadcrumb $dto
    * @return array
    */
    public function convertToArray(Breadcrumb $dto)
    {
        $result = [];
        $result["category_id"] = $dto->getCategoryId();
        $result["category_name"] = $dto->getCategoryName();
        $result["category_level"] = $dto->getCategoryLevel();
        $result["category_url_key"] = $dto->getCategoryUrlKey();
        $result["category_url_path"] = $dto->getCategoryUrlPath();
        return $result;
    }
}