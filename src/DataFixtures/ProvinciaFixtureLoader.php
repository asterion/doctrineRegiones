<?php

namespace DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Entity\Provincia;

class ProvinciaFixtureLoader extends AbstractFixture implements OrderedFixtureInterface
{
    private $data = [
        ['1', 'Iquique', '11'],
        ['1', 'Tamarugal', '14'],
        ['2', 'Antofagasta', '21'],
        ['2', 'El Loa', '22'],
        ['2', 'Tocopilla', '23'],
        ['3', 'Copiapó', '31'],
        ['3', 'Chañaral', '32'],
        ['3', 'Huasco', '33'],
        ['4', 'Elqui', '41'],
        ['4', 'Choapa', '42'],
        ['4', 'Limarí', '43'],
        ['5', 'Valparaíso', '51'],
        ['5', 'Isla de Pascua', '52'],
        ['5', 'Los Andes', '53'],
        ['5', 'Petorca', '54'],
        ['5', 'Quillota', '55'],
        ['5', 'San Antonio', '56'],
        ['5', 'San Felipe de Aconcagua', '57'],
        ['5', 'Marga Marga', '58'],
        ['6', 'Cachapoal', '61'],
        ['6', 'Cardenal Caro', '62'],
        ['6', 'Colchagua', '63'],
        ['7', 'Talca', '71'],
        ['7', 'Cauquenes', '72'],
        ['7', 'Curicó', '73'],
        ['7', 'Linares', '74'],
        ['8', 'Concepción', '81'],
        ['8', 'Arauco', '82'],
        ['8', 'Biobío', '83'],
        ['8', 'Ñuble', '84'],
        ['9', 'Cautín', '91'],
        ['9', 'Malleco', '92'],
        ['10', 'Llanquihue', '101'],
        ['10', 'Chiloé', '102'],
        ['10', 'Osorno', '103'],
        ['10', 'Palena', '104'],
        ['11', 'Coihaique', '111'],
        ['11', 'Aisén', '112'],
        ['11', 'Capitán Prat', '113'],
        ['11', 'General Carrera', '114'],
        ['12', 'Magallanes', '121'],
        ['12', 'Antártica Chilena', '122'],
        ['12', 'Tierra del Fuego', '123'],
        ['12', 'Última Esperanza', '124'],
        ['13', 'Santiago', '131'],
        ['13', 'Cordillera', '132'],
        ['13', 'Chacabuco', '133'],
        ['13', 'Maipo', '134'],
        ['13', 'Melipilla', '135'],
        ['13', 'Talagante', '136'],
        ['14', 'Valdivia', '141'],
        ['14', 'Ranco', '142'],
        ['15', 'Arica', '151'],
        ['15', 'Parinacota', '152'],
    ];

    public function load(ObjectManager $manager)
    {
        while(list($region, $name, $code) = array_shift($this->data)){
            $provincia = new Provincia;

            $provincia->setName($name);
            $provincia->setCode($code);
            $provincia->setRegion($this->getReference('region_' . $region));

            $manager->persist($provincia);
            $manager->flush();

            $this->addReference('provincia_' . $code, $provincia);
        }

    }

    public function getOrder()
    {
        return 2;
    }
}
