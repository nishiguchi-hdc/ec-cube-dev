<?php

namespace Plugin\B2BConnector\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\Customer;

/**
 * @ORM\Entity
 * @ORM\Table(name="dtb_customer_ext")
 */
class CustomerExt
{
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Eccube\Entity\Customer")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $Customer;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $company_kana;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $rep_name01;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $rep_name02;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $rep_kana01;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $rep_kana02;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $depart_name;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $pic_name01;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $pic_name02;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $pic_kana01;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $pic_kana02;

    /** @ORM\Column(type="string", length=50, nullable=true) */
    private $mb_phone_number;

    /** @ORM\Column(type="string", length=50, nullable=true) */
    private $fax_number;

    /** @ORM\Column(type="string", length=7, nullable=true) */
    private $established_ym;

    /** @ORM\Column(type="bigint", nullable=true) */
    private $annual_sales;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    private $business_type;

    /** @ORM\Column(type="string", length=512, nullable=true) */
    private $url;

    /** @ORM\Column(type="boolean", options={"default": false}) */
    private $real_store = false;

    /** @ORM\Column(type="decimal", precision=5, scale=2, nullable=true) */
    private $trade_rate;

    public function getCustomer(): ?Customer { return $this->Customer; }
    public function setCustomer(?Customer $c): self { $this->Customer = $c; return $this; }

    public function getCompanyKana(): ?string { return $this->company_kana; }
    public function setCompanyKana(?string $v): self { $this->company_kana = $v; return $this; }

    public function getRepName01(): ?string { return $this->rep_name01; }
    public function setRepName01(?string $v): self { $this->rep_name01 = $v; return $this; }

    public function getRepName02(): ?string { return $this->rep_name02; }
    public function setRepName02(?string $v): self { $this->rep_name02 = $v; return $this; }

    public function getRepKana01(): ?string { return $this->rep_kana01; }
    public function setRepKana01(?string $v): self { $this->rep_kana01 = $v; return $this; }

    public function getRepKana02(): ?string { return $this->rep_kana02; }
    public function setRepKana02(?string $v): self { $this->rep_kana02 = $v; return $this; }

    public function getDepartName(): ?string { return $this->depart_name; }
    public function setDepartName(?string $v): self { $this->depart_name = $v; return $this; }

    public function getPicName01(): ?string { return $this->pic_name01; }
    public function setPicName01(?string $v): self { $this->pic_name01 = $v; return $this; }

    public function getPicName02(): ?string { return $this->pic_name02; }
    public function setPicName02(?string $v): self { $this->pic_name02 = $v; return $this; }

    public function getPicKana01(): ?string { return $this->pic_kana01; }
    public function setPicKana01(?string $v): self { $this->pic_kana01 = $v; return $this; }

    public function getPicKana02(): ?string { return $this->pic_kana02; }
    public function setPicKana02(?string $v): self { $this->pic_kana02 = $v; return $this; }

    public function getMbPhoneNumber(): ?string { return $this->mb_phone_number; }
    public function setMbPhoneNumber(?string $v): self { $this->mb_phone_number = $v; return $this; }

    public function getFaxNumber(): ?string { return $this->fax_number; }
    public function setFaxNumber(?string $v): self { $this->fax_number = $v; return $this; }

    public function getEstablishedYm(): ?string { return $this->established_ym; }
    public function setEstablishedYm(?string $v): self { $this->established_ym = $v; return $this; }

    public function getAnnualSales(): ?int { return $this->annual_sales; }
    public function setAnnualSales(?int $v): self { $this->annual_sales = $v; return $this; }

    public function getBusinessType(): ?string { return $this->business_type; }
    public function setBusinessType(?string $v): self { $this->business_type = $v; return $this; }

    public function getUrl(): ?string { return $this->url; }
    public function setUrl(?string $v): self { $this->url = $v; return $this; }

    public function getRealStore(): bool { return $this->real_store; }
    public function setRealStore(bool $v): self { $this->real_store = $v; return $this; }

    public function getTradeRate(): ?string { return $this->trade_rate; }
    public function setTradeRate(?string $v): self { $this->trade_rate = $v; return $this; }
}

