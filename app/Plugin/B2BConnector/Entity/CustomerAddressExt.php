<?php

namespace Plugin\B2BConnector\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\CustomerAddress;

/**
 * @ORM\Entity
 * @ORM\Table(name="dtb_customer_address_ext")
 */
class CustomerAddressExt
{
    /**
     * @var int|null
     * @ORM\Id()
     * @ORM\Column(type="integer", options={"unsigned":false})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var CustomerAddress|null
     * @ORM\OneToOne(targetEntity="Eccube\Entity\CustomerAddress")
     * @ORM\JoinColumn(name="customer_address_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $CustomerAddress;

    /**
     * 部署名
     * @var string|null
     * @ORM\Column(name="depart_name", type="string", length=255, nullable=true)
     */
    private $depart_name;

    /**
     * 担当者
     * @var string|null
     * @ORM\Column(name="pic_name", type="string", length=255, nullable=true)
     */
    private $pic_name;

    // ---- getters / setters ----

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerAddress(): ?CustomerAddress
    {
        return $this->CustomerAddress;
    }

    public function setCustomerAddress(CustomerAddress $address): self
    {
        $this->CustomerAddress = $address;
        return $this;
    }

    public function getDepartName(): ?string
    {
        return $this->depart_name;
    }

    public function setDepartName(?string $v): self
    {
        $this->depart_name = $v;
        return $this;
    }

    public function getPicName(): ?string
    {
        return $this->pic_name;
    }

    public function setPicName(?string $v): self
    {
        $this->pic_name = $v;
        return $this;
    }
}
