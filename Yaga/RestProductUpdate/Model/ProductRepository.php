<?php
    namespace Yaga\RestProductUpdate\Model;
    use Interbranche\QuickOrder\Block\Catalog\Catalog;
    use Magento\Catalog\Api\Data\ProductInterfaceFactory;
    use Yaga\RestProductUpdate\Api\ProductRepositoryInterface;
    use Yaga\RestProductUpdate\Api\Data\ProductInterface;
    use Magento\Framework\Exception\NoSuchEntityException;

    class ProductRepository implements ProductRepositoryInterface{
        /**
         * @var ProductInterfaceFactory
         */
        private $productInterfaceFactory;

        /**
         * @var \Magento|Catalog|Api|ProductRepositoryInterface
         */
        private $productRepository;


        /**
         * ProductRepository constructor.
         * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
         * @param ProductInterfaceFactory $productInterfaceFactory
         */
        public function __construct(
            \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
            ProductInterfaceFactory $productInterfaceFactory
        )
        {
            $this->productInterfaceFactory = $productInterfaceFactory;
            $this->productRepository = $productRepository;
        }

        public function getProductById($id)
        {
            $productInterface = $this->productInterfaceFactory->create();
            try {
                $product = $this->productRepository->getById($id);
                $productInterface->setId($product->getId());
                $productInterface->setSku($product->getSku());
                $productInterface->setName($product->getName());
                return $productInterface;
            }catch (NoSuchEntityException $e){
                throw NoSuchEntityException::singleField("id", $id);
            }
        }

    }
