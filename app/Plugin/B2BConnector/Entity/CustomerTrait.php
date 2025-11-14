<?php

namespace Plugin\B2BConnector\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;   // ★ これを追加

/**
 * Customer に CustomerExt を双方向でぶら下げる Trait
 * @EntityExtension("Eccube\Entity\Customer")   // ★ これを追加（対象エンティティを明示）
 */
trait CustomerTrait
{
    /**
     * Customer (被所有) ←→ CustomerExt (所有)
     *
     * @ORM\OneToOne(
     *   targetEntity="Plugin\B2BConnector\Entity\CustomerExt",
     *   mappedBy="Customer",
     *   cascade={"persist","remove"}
     * )
     */
    private ?CustomerExt $customerExt = null;

    public function getCustomerExt(): ?CustomerExt
    {
        return $this->customerExt;
    }

    public function setCustomerExt(?CustomerExt $ext): self
    {
        $this->customerExt = $ext;
        return $this;
    }
}
