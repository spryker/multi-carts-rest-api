<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MultiCartsRestApi\Business;

use Spryker\Zed\MultiCartsRestApi\Business\Quote\MultipleQuoteCreator;
use Spryker\Zed\MultiCartsRestApi\Business\Quote\MultipleQuoteCreatorInterface;
use Spryker\Zed\MultiCartsRestApi\Business\Quote\MultipleQuoteReader;
use Spryker\Zed\MultiCartsRestApi\Business\Quote\MultipleQuoteReaderInterface;
use Spryker\Zed\MultiCartsRestApi\Business\Quote\QuoteCreator;
use Spryker\Zed\MultiCartsRestApi\Business\Quote\QuoteCreatorInterface;
use Spryker\Zed\MultiCartsRestApi\Business\Quote\QuoteReader;
use Spryker\Zed\MultiCartsRestApi\Business\Quote\QuoteReaderInterface;
use Spryker\Zed\MultiCartsRestApi\Dependency\Facade\MultiCartsRestApiToMultiCartFacadeInterface;
use Spryker\Zed\MultiCartsRestApi\Dependency\Facade\MultiCartsRestApiToStoreFacadeInterface;
use Spryker\Zed\MultiCartsRestApi\MultiCartsRestApiDependencyProvider;
use Spryker\Zed\MultiCartsRestApi\Dependency\Facade\MultiCartsRestApiToPersistentCartFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Spryker\Zed\MultiCartsRestApi\MultiCartsRestApiConfig getConfig()
 */
class MultiCartsRestApiBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Spryker\Zed\MultiCartsRestApi\Business\Quote\MultipleQuoteReaderInterface
     */
    public function createQuoteReader(): MultipleQuoteReaderInterface
    {
        return new MultipleQuoteReader(
            $this->getMultiCartFacade()
        );
    }

    /**
     * @return \Spryker\Zed\MultiCartsRestApi\Business\Quote\MultipleQuoteCreatorInterface
     */
    public function createQuoteCreator(): MultipleQuoteCreatorInterface
    {
        return new MultipleQuoteCreator(
            $this->getPersistentCartFacade()
        );
    }

    /**
     * @return \Spryker\Zed\MultiCartsRestApi\Dependency\Facade\MultiCartsRestApiToMultiCartFacadeInterface
     */
    public function getMultiCartFacade(): MultiCartsRestApiToMultiCartFacadeInterface
    {
        return $this->getProvidedDependency(MultiCartsRestApiDependencyProvider::FACADE_MULTI_CART);
    }

    /**
     * @return \Spryker\Zed\MultiCartsRestApi\Dependency\Facade\MultiCartsRestApiToStoreFacadeInterface
     */
    public function getStoreFacade(): MultiCartsRestApiToStoreFacadeInterface
    {
        return $this->getProvidedDependency(MultiCartsRestApiDependencyProvider::FACADE_STORE);
    }

    /**
     * @return \Spryker\Zed\MultiCartsRestApi\Dependency\Facade\MultiCartsRestApiToPersistentCartFacadeInterface
     */
    public function getPersistentCartFacade(): MultiCartsRestApiToPersistentCartFacadeInterface
    {
        return $this->getProvidedDependency(MultiCartsRestApiDependencyProvider::FACADE_PERSISTENT_CART);
    }
}