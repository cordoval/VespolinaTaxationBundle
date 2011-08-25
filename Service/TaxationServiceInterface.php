<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
 
namespace Vespolina\TaxationBundle\Service;

use Vespolina\TaxationBundle\Model\TaxCategoryInterface;
use Vespolina\TaxationBundle\Model\TaxRateInterface;
use Vespolina\TaxationBundle\Model\TaxZoneInterface;

/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */
interface TaxationServiceInterface
{
    /**
     * Create a new rate and attach it to the given zone
     *
     * @abstract
     * @param $code
     * @param $rate
     * @param \Vespolina\TaxationBundle\Model\TaxZoneInterface $zone
     * @return void
     */
    function createRateForZone($code, $rate, TaxCategoryInterface $category, TaxZoneInterface $zone);


    /**
     * Create a new tax zone
     *
     * @abstract
     * @param $code Tax code
     * @param $name Descriptive name
     * @param $parentZone The parent zone
     * @return TaxZoneInterface instance
     */
    function createZone($code, $name, TaxZoneInterface $parentZone = null);

    /**
     * Get all tax rates for a given zone
     *
     * @abstract
     * @param TaxZoneInterface $taxZone
     * @return array()
     */
    function getRatesForZone(TaxZoneInterface $zone, TaxCategoryInterface $category);

    /**
     * Retrieve a specific tax zone by its code
     */
    function getZoneByCode($code);
}