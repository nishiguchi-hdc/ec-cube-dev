<?php

namespace Plugin\B2BConnector\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\ProductClass;

/**
 * @ORM\Entity
 * @ORM\Table(name="dtb_product_class_ext")
 */
class ProductClassExt
{
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Eccube\Entity\ProductClass")
     * @ORM\JoinColumn(name="product_class_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $ProductClass;

    /** @ORM\Column(type="string", length=50, nullable=true) */
    private $item_code;

    /** @ORM\Column(type="string", length=20, nullable=true) */
    private $jan_code;

    /** @ORM\Column(type="string", length=20, nullable=true) */
    private $tax_category;

    /** @ORM\Column(type="integer") */
    private $display_order = 0;

    /** @ORM\Column(type="boolean") */
    private $is_visible = true;
    
    // getter/setter 略（必要分）
    public function getProductClass(): ?ProductClass { return $this->ProductClass; }
    public function setProductClass(ProductClass $pc): self { $this->ProductClass = $pc; return $this; }

    public function getItemCode(): ?string { return $this->item_code; }
    public function setItemCode(?string $v): self { $this->item_code = $v; return $this; }

    public function getJanCode(): ?string { return $this->jan_code; }
    public function setJanCode(?string $v): self { $this->jan_code = $v; return $this; }

    public function getTaxCategory(): ?string { return $this->tax_category; }
    public function setTaxCategory(?string $v): self { $this->tax_category = $v; return $this; }

    public function getDisplayOrder(): int { return $this->display_order; }
    public function setDisplayOrder(int $v): self { $this->display_order = $v; return $this; }

    public function isVisible(): bool { return (bool)$this->is_visible; }
    public function setIsVisible(bool $v): self { $this->is_visible = $v; return $this; }

}
