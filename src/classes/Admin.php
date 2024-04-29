<?php
namespace App\Classes;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Admin {

    // Property
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private int $id;

    #[ORM\Column()]
    private string $name;
    #[ORM\Column()]
    private string $lastname;

    #[ORM\Column(type : 'string')]
    private int $password;

}

/*
INSERT INTO admin (name, lastname, password) VALUES ('hugo', 'rondet', 'bouzin');
INSERT INTO admin (name, lastname, password) VALUES ('hugo', 'cuenot', 'bouzin');
INSERT INTO admin (name, lastname, password) VALUES ('maeva', 'bouvard', 'bouzin');
INSERT INTO admin (name, lastname, password) VALUES ('alexis', 'nauleau', 'bouzin');
*/
