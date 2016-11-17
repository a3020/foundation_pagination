<?php
namespace Concrete\Package\FoundationPagination\Src\Search\Pagination\View;

use Pagerfanta\View\TwitterBootstrap3View;
use Concrete\Core\Search\Pagination\View\ViewInterface;

class FoundationView extends TwitterBootstrap3View implements ViewInterface
{
    public function getName()
    {
        return 'foundation6';
    }

    protected function createDefaultTemplate()
    {
        return new Foundation6Template();
    }

    public function getArguments()
    {
        return [
            'css_active_class' => 'current',
            'css_dots_class' => 'ellipsis',
            'css_prev_class' => 'previous',
            'css_next_class' => 'next',
            'prev_message' => t('Previous'),
            'next_message' => t('Next'),
            'active_suffix' => '',
        ];
    }
}
