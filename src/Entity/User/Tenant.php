<?php

namespace App\Entity\User;

use App\Repository\User\TenantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="tenants")
 * @ORM\Entity(repositoryClass=TenantRepository::class)
 */
class Tenant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $tenantName;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $tenantDb;

    /**
     * @ORM\Column(type="datetime", columnDefinition="TIMESTAMP DEFAULT CURRENT_TIMESTAMP")
     */
    private $dateCreated;

    /**
     * @ORM\Column(type="datetime", columnDefinition="TIMESTAMP DEFAULT CURRENT_TIMESTAMP")
     */
    private $lastUpdated;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTenantName(): ?string
    {
        return $this->tenantName;
    }

    public function setTenantName(string $tenantName): self
    {
        $this->tenantName = $tenantName;

        return $this;
    }

    public function getTenantDb(): ?string
    {
        return $this->tenantDb;
    }

    public function setTenantDb(string $tenantDb): self
    {
        $this->tenantDb = $tenantDb;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getLastUpdated(): ?\DateTimeInterface
    {
        return $this->lastUpdated;
    }

    public function setLastUpdated(\DateTimeInterface $lastUpdated): self
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
