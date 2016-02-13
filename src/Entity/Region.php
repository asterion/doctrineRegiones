<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="region")
 */
class Region extends Location
{
    /**
     * @OneToMany(targetEntity="Provincia", mappedBy="region")
     */
    protected $provincias;

    public function __construct() {
        $this->provincias = new \Doctrine\Common\Collections\ArrayCollection;
    }
}
