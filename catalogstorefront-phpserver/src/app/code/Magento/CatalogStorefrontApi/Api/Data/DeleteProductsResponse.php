<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for DeleteProductsResponse class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class DeleteProductsResponse implements DeleteProductsResponseInterface
{

    /**
     * @var bool
     */
    private $status;

    /**
     * @var string
     */
    private $message;
    
    /**
     * @inheritdoc
     *
     * @return bool
     */
    public function getStatus(): bool
    {
        return (bool) $this->status;
    }
    
    /**
     * @inheritdoc
     *
     * @param bool $value
     * @return void
     */
    public function setStatus(bool $value): void
    {
        $this->status = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getMessage(): string
    {
        return (string) $this->message;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setMessage(string $value): void
    {
        $this->message = $value;
    }
}
