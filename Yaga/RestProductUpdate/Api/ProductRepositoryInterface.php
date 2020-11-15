<?php
    /**
     * Api to get Product
     *
     */
    namespace Yaga\RestProductUpdate\Api;

    /**
     * @api
     * @since 1.0.0
     */
    interface ProductRepositoryInterface
    {
        /**
         * Get Product by ID
         * @param int $id
         * @return \Yaga\RestProductUpdate\Api\Data\ProductInterface
         * @throws NoSuchEntityException
         */
        public function getProductById($id);
    }
