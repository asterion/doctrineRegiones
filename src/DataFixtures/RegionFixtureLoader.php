<?php

namespace DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Entity\Region;

class RegionFixtureLoader extends AbstractFixture implements OrderedFixtureInterface
{
    private $data = [
        ['Tarapacá', '1'],
        ['Antofagasta', '2'],
        ['Atacama', '3'],
        ['Coquimbo', '4'],
        ['Valparaíso', '5'],
        ['Región del Libertador Gral. Bernardo O\'Higgins', '6'],
        ['Región del Maule', '7'],
        ['Región del Biobío', '8'],
        ['Región de la Araucanía', '9'],
        ['Región de Los Lagos', '10'],
        ['Región Aisén del Gral. Carlos Ibáñez del Campo', '11'],
        ['Región de Magallanes y de la Antártica Chilena', '12'],
        ['Región Metropolitana de Santiago', '13'],
        ['Región de Los Ríos', '14'],
        ['Arica y Parinacota', '15'],
    ];

    public function load(ObjectManager $manager)
    {
        while(list($name, $code) = array_shift($this->data)){
            $region = new Region;

            $region->setName($name);
            $region->setCode($code);

            $manager->persist($region);
            $manager->flush();

            $this->addReference('region_' . $code, $region);
        }

    }

    public function getOrder()
    {
        return 1;
    }
}
