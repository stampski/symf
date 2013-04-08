<?php
//src/Acme/CrudGeneratorBundle/Command/MyDoctrineCrudCommand.php

namespace Acme\StampOvBundle\Command;

use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;

class MyDoctrineCrudCommand extends \Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setName('mydoctrine:generate:crud');
    }

    protected function getGenerator()
    {
        $generator = new DoctrineCrudGenerator($this->getContainer()->get('filesystem'), __DIR__.'/../Resources/skeleton/crud');
        $this->setGenerator($generator);
        return parent::getGenerator();
    }
}