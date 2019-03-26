<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 25/03/2019
 * Time: 14:29
 */

namespace Model;


class Role
{
    private $id;
    protected $label;
    public const  ROLE_USER = 'ROLE_USER';
    public const  ROLE_ADMIN = 'ROLE_ADMIN';

    /**
     * @param mixed $label
     * @return Role
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    public function __construct(string $label)
    {
        $this->setLabel($label);
    }

}

