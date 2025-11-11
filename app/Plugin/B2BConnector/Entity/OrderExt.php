<?php

namespace Plugin\B2BConnector\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\Order;

/**
 * @ORM\Entity
 * @ORM\Table(name="dtb_order_ext")
 */
class OrderExt
{
    /**
     * Order と 1:1 (PK兼FK)
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Eccube\Entity\Order")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private ?Order $Order = null;

    /** @ORM\Column(type="string", length=100, nullable=true) */
    private ?string $depart_name = null;

    /** @ORM\Column(type="string", length=100, nullable=true) */
    private ?string $pic_name = null;

    /** @ORM\Column(type="string", length=100, nullable=true) */
    private ?string $quote_no = null;

    // ===== getter / setter =====
    public function getOrder(): ?Order { return $this->Order; }
    public function setOrder(Order $Order): self { $this->Order = $Order; return $this; }

    public function getDepartName(): ?string { return $this->depart_name; }
    public function setDepartName(?string $v): self { $this->depart_name = $v; return $this; }

    public function getPicName(): ?string { return $this->pic_name; }
    public function setPicName(?string $v): self { $this->pic_name = $v; return $this; }

    public function getQuoteNo(): ?string { return $this->quote_no; }
    public function setQuoteNo(?string $v): self { $this->quote_no = $v; return $this; }
}
