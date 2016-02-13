# doctrineRegiones
Modelo de datos de Regiones/Provincias/Comunas de Chile definido en Entities del ORM Doctrine

# Instalación
git clone https://github.com/asterion/doctrineRegiones.git
cd doctrineRegiones
composer update

# Configuración

En archivo bootstrap.php

$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'chiledb',
);

php vendor/bin/doctrine orm:schema-tool:update --force

# Usar
php vendor/bin/doctrine orm:generate-proxies
php load.php
