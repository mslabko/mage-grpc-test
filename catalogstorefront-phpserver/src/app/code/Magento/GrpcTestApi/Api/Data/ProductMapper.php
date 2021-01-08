<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\GrpcTestApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for Product class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class ProductMapper
{
    /**
     * @var string
     */
    private static $dtoClassName = ProductInterface::class;

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
    * Set the data to populate the DTO
    *
    * @param mixed $data
    * @return $this
    */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
    * Build new DTO populated with the data
    *
    * @return Product
    */
    public function build()
    {
        $dto = $this->objectManager->create(self::$dtoClassName);
        foreach ($this->data as $key => $valueData) {
            if ($valueData === null) {
                continue;
            }
            $this->setByKey($dto, $key, $valueData);
        }
        return $dto;
    }

    /**
    * Set the value of the key using setters.
    *
    * In case if the field is object, the corresponding Mapper would be create and DTO representing the field data
    * would be built
    *
    * @param Product $dto
    * @param string $key
    * @param mixed $value
    */
    private function setByKey(Product $dto, string $key, $value): void
    {
        switch ($key) {
            case "id":
                $dto->setId((string) $value);
                break;
            case "sku":
                $dto->setSku((string) $value);
                break;
            case "price":
                $dto->setPrice((float) $value);
                break;
            case "title":
                $dto->setTitle((string) $value);
                break;
            case "description":
                $dto->setDescription((string) $value);
                break;
            case "img_url":
                $dto->setImgUrl((string) $value);
                break;
            case "available":
                $dto->setAvailable((bool) $value);
                break;
            case "options":
                $convertedArray = [];
                foreach ($value as $element) {
                    $convertedArray[] = $this->objectManager
                        ->create(\Magento\GrpcTestApi\Api\Data\OptionMapper::class)
                        ->setData($element)
                        ->build();
                }
                $dto->setOptions($convertedArray);
                break;
        }
    }
}