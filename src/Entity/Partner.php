<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PartnerRepository;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PartnerRepository::class)
 * @Vich\Uploadable
 */
class Partner
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     * @Assert\Url(
     *    message = "The url '{{ value }}' is not a valid url",
     * )
     */
    private $link;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotNull
     * @Assert\Length(
     *      min = 2,
     *      max = 800,
     *      minMessage = "Votre description doit faire plus de {{ limit }} charactères de long",
     *      maxMessage = "Votre description doit faire moins de {{ limit }} charactères de long"
     * )
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;

    /**
     * @Vich\UploadableField(mapping = "logoFiles", fileNameProperty = "logo")
     * @Assert\File(
     *     mimeTypes = {"image/jpeg", "image/jpg", "image/gif", "image/png"},
     *     mimeTypesMessage = "S'il vous plait, chargez une image au format jpeg, jpg, gif ou png."
     * )
     */
    private $logoFile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updateAt;
    
    public function __construct()
    {
        $this->updateAt = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * Get the value of logoFile
     */ 
    public function getLogoFile()
    {
        return $this->logoFile;
    }

    /**
     * Set the value of logoFile
     *
     * @return  self
     */ 
    public function setLogoFile($logoFile)
    {
        $this->logoFile = $logoFile;
        if ($logoFile) {
            $this->updateAt = new DateTime();
        }
        return $this;
    }

    public function __toString() {
        return $this->category;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;
        return $this;
    }
}
