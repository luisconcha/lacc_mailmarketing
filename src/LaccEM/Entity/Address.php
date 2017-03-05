<?php
namespace LaccEM\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="address", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})},
 *     indexes={@ORM\Index(name="fk_address_client_idx", columns={"client_id"})})
 */
class Address
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer", nullable=false);
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(name="cep",type="string", length=10, nullable=true)
     */
    protected $cep;

    /**
     * @ORM\Column(name="address",type="string", nullable=true)
     */
    protected $address;

    /**
     * @ORM\Column(name="city",type="string", nullable=true)
     */
    protected $city;

    /**
     * @ORM\Column(name="state",type="string", nullable=true)
     */
    protected $state;

    /**
     * @var Client
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    protected $client;

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param $cep
     *
     * @return $this
     */
    public function setCep( $cep )
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address
     *
     * @return $this
     */
    public function setAddress( $address )
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $city
     *
     * @return $this
     */
    public function setCity( $city )
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $state
     *
     * @return $this
     */
    public function setState( $state )
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param $client
     *
     * @return $this
     */
    public function setClient( $client )
    {
        $this->client = $client;

        return $this;
    }
}
