<?php

namespace Entity;

use Entity\Location;
use Entity\Region;

/**
 * @Entity
 * @Table(name="provincia")
 */
class Provincia extends Location
{
    /**
     * @ManyToOne(targetEntity="Region", inversedBy="provincias")
     */
    private $region;

    /**
     * @OneToMany(targetEntity="Comuna", mappedBy="provincia")
     */
    protected $comunas;

    public function __construct() {
        $this->comunas = new \Doctrine\Common\Collections\ArrayCollection;
    }

    /**
     * Get the value of Region
     *
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of Region
     *
     * @param mixed region
     *
     * @return self
     */
    public function setRegion(\Entity\Region $region)
    {
        $this->region = $region;

        return $this;
    }
}
