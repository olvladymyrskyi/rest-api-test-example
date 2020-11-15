<?php
    /**
     * Yaga_RestProductUpdate Product
     */

    namespace Yaga\RestProductUpdate\Model;

    use Yaga\RestProductUpdate\Api\Data\ProductInterface;
    use Magento\Framework\DataObject;

    class Product extends DataObject implements ProductInterface
    {
        /**
         * Product id
         *
         * @return int|null
         */
        public function getId(){
            return $this->getData('id');
        }

        /**
         * Set product id
         *
         * @param int $id
         * @return $this
         */
        public function setId($id){
            return  $this->setData('id', $id);
        }

        /**
         * Product sku
         *
         * @return string
         */
        public function getSku(){
            return $this->getData('sku');
        }

        /**
         * Set product sku
         *
         * @param string $sku
         * @return $this
         */
        public function setSku($sku){
            return  $this->setData('sku', $sku);
        }

        /**
         * Product name
         *
         * @return string|null
         */
        public function getName(){
            return $this->getData('name');
        }

        /**
         * Set product name
         *
         * @param string $name
         * @return $this
         */
        public function setName($name){
            return  $this->setData('name', $name);
        }

        /**
         * Product price
         *
         * @return float|null
         */
        public function getPrice(){
            return  $this->getData('price');
        }

        /**
         * Set product price
         *
         * @param float $price
         * @return $this
         */
        public function setPrice($price){
            return  $this->setData('price', $price);
        }

        /**
         * Product status
         *
         * @return int|null
         */
        public function getStatus(){
            return  $this->getData('status');
        }

        /**
         * Set product status
         *
         * @param int $status
         * @return $this
         */
        public function setStatus($status){
            return  $this->setData('status', $status);
        }

        /**
         * Product visibility
         *
         * @return int|null
         */
        public function getVisibility(){
            return  $this->setData('visibility');
        }

        /**
         * Set product visibility
         *
         * @param int $visibility
         * @return $this
         */
        public function setVisibility($visibility){
            return  $this->setData('visibility', $visibility);
        }
        

    }
