<?php

namespace Kunstmaan\UtilitiesBundle\Twig;

use Kunstmaan\UtilitiesBundle\Helper\Slugifier;
use Twig_Extension;


class UtilitiesTwigExtension extends Twig_Extension
{

    /**
     * Returns a list of filters.
     *
     * @return array An array of filters
     */
    public function getFilters()
    {
        return array(
            'slugify' => new \Twig_Filter_Method($this, 'slugify', array('is_safe' => array('html'))),
        );
    }

    /**
     * @param string $text
     *
     * @return string
     */
    public function slugify($text)
    {
        return Slugifier::slugify($text, '');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kunstmaan_utilities_twig_extension';
    }

}