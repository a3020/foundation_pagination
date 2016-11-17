<?php
namespace Concrete\Package\FoundationPagination\Src\Search\Pagination\View;

use Pagerfanta\View\Template\TwitterBootstrapTemplate;

class Foundation6Template extends TwitterBootstrapTemplate
{
    public function separator()
    {
        $class = $this->option('css_dots_class');

        return $this->li($class);
    }

    private function li($class)
    {
        $liClass = $class ? sprintf(' class="%s"', $class) : '';

        return sprintf('<li%s></li>', $liClass);
    }
}
