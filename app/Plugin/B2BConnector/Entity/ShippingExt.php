<?php

namespace Plugin\B2BConnector\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\Shipping;

/**
 * @ORM\Entity
 * @ORM\Table(name="dtb_shipping_ext")
 */
class ShippingExt
{
    /**
     * @var int|null
     * @ORM\Id()
     * @ORM\Column(type="integer", options={"unsigned":false})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Shipping|null
     * @ORM\OneToOne(targetEntity="Eccube\Entity\Shipping")
     * @ORM\JoinColumn(name="shipping_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $Shipping;

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

    // getters / setters
    public function getId(): ?int { return $this->id; }

    public function getShipping(): ?Shipping { return $this->Shipping; }
    public function setShipping(Shipping $s): self { $this->Shipping = $s; return $this; }

    public function getDepartName(): ?string { return $this->depart_name; }
    public function setDepartName(?string $v): self { $this->depart_name = $v; return $this; }

    public function getPicName(): ?string { return $this->pic_name; }
    public function setPicName(?string $v): self { $this->pic_name = $v; return $this; }
}
