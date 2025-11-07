<?php

namespace Plugin\B2BConnector\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\Product;

/**
 * @ORM\Entity
 * @ORM\Table(name="dtb_product_ext")
 */
class ProductExt
{
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Eccube\Entity\Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $Product;

    /** @ORM\Column(type="string", length=100, nullable=true) */
    private $made_in;

    /** @ORM\Column(type="string", length=100, nullable=true) */
    private $size;

    /** @ORM\Column(type="string", length=100, nullable=true) */
    private $material;

    /** @ORM\Column(type="decimal", precision=10, scale=2, nullable=true) */
    private $weight;

    /** @ORM\Column(type="string", length=100, nullable=true) */
    private $color_pattern;

    /** @ORM\Column(type="string", length=100, nullable=true) */
    private $package_form;

    /** @ORM\Column(type="decimal", precision=5, scale=2, nullable=true) */
    private $trade_rate;

    // getter/setter 略（必要分だけ実装）
    public function getProduct(): ?Product { return $this->Product; }
    public function setProduct(Product $p): self { $this->Product = $p; return $this; }

    public function getMadeIn(): ?string { return $this->made_in; }
    public function setMadeIn(?string $v): self { $this->made_in = $v; return $this; }

    public function getSize(): ?string { return $this->size; }
    public function setSize(?string $v): self { $this->size = $v; return $this; }

    public function getMaterial(): ?string { return $this->material; }
    public function setMaterial(?string $v): self { $this->material = $v; return $this; }

    public function getWeight(): ?string { return $this->weight; }
    public function setWeight($v): self { $this->weight = $v; return $this; }

    public function getColorPattern(): ?string { return $this->color_pattern; }
    public function setColorPattern(?string $v): self { $this->color_pattern = $v; return $this; }

    public function getPackageForm(): ?string { return $this->package_form; }
    public function setPackageForm(?string $v): self { $this->package_form = $v; return $this; }

    public function getTradeRate(): ?string { return $this->trade_rate; }
    public function setTradeRate(?string $v): self { $this->trade_rate = $v; return $this; }
}
