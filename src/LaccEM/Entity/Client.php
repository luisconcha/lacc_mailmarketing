<?php
namespace LaccEM\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name",type="string",length=200, nullable=true)
     */
    protected $name;

    /**
     * @ORM\Column(name="email",type="string", length=150,nullable=true)
     */
    protected $email;

    /**
     * @ORM\Column(name="cpf",type="string", length=11,nullable=true)
     */
    protected $cpf;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setName( $name )
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     *
     * @return $this
     */
    public function setEmail( $email )
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param $cpf
     *
     * @return $this
     */
    public function setCpf( $cpf )
    {
        $this->cpf = $cpf;

        return $this;
    }
}
