<?php

namespace Blackbird\NonceProvider\Plugin;

use Blackbird\NonceProvider\ViewModel\NonceProvider;
use Magento\Framework\View\Element\BlockInterface;
use Magento\Framework\View\TemplateEngine\Php;

class AddNonceProviderToTemplates
{

    public function __construct(
        protected NonceProvider $nonceProvider
    )
    {
    }

    /**
     * @param Php $subject
     * @param BlockInterface $block
     * @param string $fileName
     * @param array $dictionary
     * @return array
     */
    public function beforeRender(Php $subject, BlockInterface $block, $fileName, array $dictionary = []): array
    {
        $dictionary['nonceProvider'] = $this->nonceProvider;
        return [$block, $fileName, $dictionary];
    }
}
