<?php
namespace Entity;

/**
 * @MappedSuperclass
 */
class Location
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", unique=true, length=12, nullable=false)
     */
    protected $code;

    /**
     * @Column(type="string", unique=true, nullable=false)
     */
    protected $name;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Code
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of Code
     *
     * @param mixed code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

}
