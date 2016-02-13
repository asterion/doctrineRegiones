<?php

namespace Entity;

use Entity\Location;

/**
 * @Entity
 * @Table(name="comuna")
 */
class Comuna extends Location
{
    /**
     * @ManyToOne(targetEntity="Provincia", inversedBy="comunas")
     */
    private $provincia;

    /**
     * Get the value of Provincia
     *
     * @return mixed
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set the value of Provincia
     *
     * @param mixed provincia
     *
     * @return self
     */
    public function setProvincia(\Entity\Provincia $provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

}
