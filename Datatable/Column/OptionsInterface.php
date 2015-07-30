<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Datatable\Column;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Exception;

/**
 * Interface OptionsInterface
 *
 * @package Sg\DatatablesBundle\Datatable\Column
 */
interface OptionsInterface
{
    /**
     * Setup options resolver.
     *
     * @param array $options
     *
     * @return $this
     */
    public function setupOptionsResolver(array $options);

    /**
     * Configure options.
     *
     * @param OptionsResolver $resolver
     *
     * @return $this
     */
    public function configureOptions(OptionsResolver $resolver);

    /**
     * Set options.
     *
     * @param array $options
     *
     * @return $this
     * @throws Exception
     */
    public function setOptions(array $options);
}
