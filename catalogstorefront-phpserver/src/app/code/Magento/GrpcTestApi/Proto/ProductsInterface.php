<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: magegrpc.proto

namespace Magento\GrpcTestApi\Proto;

use Spiral\GRPC;

interface ProductsInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "magento.grpcTestApi.proto.Products";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param GenerateArg $in
    * @return Product
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function generate(GRPC\ContextInterface $ctx, GenerateArg $in): Product;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ReadRequest $in
    * @return ReadResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function read(GRPC\ContextInterface $ctx, ReadRequest $in): ReadResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ClearArg $in
    * @return Cleared
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function clear(GRPC\ContextInterface $ctx, ClearArg $in): Cleared;
}
