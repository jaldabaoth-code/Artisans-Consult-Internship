<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=PictureRepository::class)
 * @Vich\Uploadable
 */
class Picture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageBefore;

    /**
     * @Vich\UploadableField(mapping = "imageBeforeFile", fileNameProperty = "imageBefore")
     */
    private $imageBeforeFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageAfter;

    /**
     * @Vich\UploadableField(mapping = "imageAfterFile", fileNameProperty = "imageAfter")
     */
    private $imageAfterFile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updateAt;

    /**
     * @ORM\ManyToOne(targetEntity=Achievment::class, inversedBy="pictures", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Achievment;

    public function __construct()
    {
        $this->updateAt = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageBefore(): ?string
    {
        return $this->imageBefore;
    }

    public function setImageBefore(?string $imageBefore): self
    {
        $this->imageBefore = $imageBefore;
        return $this;
    }

    public function getImageAfter(): ?string
    {
        return $this->imageAfter;
    }

    public function setImageAfter(?string $imageAfter): self
    {
        $this->imageAfter = $imageAfter;
        return $this;
    }

    public function getUpdateAt(): ?\DateTime
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTime $updateAt): self
    {
        $this->updateAt = $updateAt;
        return $this;
    }

    public function getAchievment(): ?Achievment
    {
        return $this->Achievment;
    }

    public function setAchievment(?Achievment $Achievment): self
    {
        $this->Achievment = $Achievment;
        return $this;
    }

    /**
     * @return mixed
     */ 
    public function getImageBeforeFile()
    {
        return $this->imageBeforeFile;
    }

    /**
     * @param mixed $imageBeforeFile
     */ 
    public function setImageBeforeFile($imageBeforeFile)
    {
        $this->imageBeforeFile = $imageBeforeFile;
        if ($imageBeforeFile) {
            $this->updateAt = new DateTime();
        }
        return $this;
    }

    /**
     * @return mixed
     */ 
    public function getImageAfterFile()
    {
        return $this->imageAfterFile;
    }

    /**
     * @param mixed $imageAfterFile
     */ 
    public function setImageAfterFile($imageAfterFile)
    {
        $this->imageAfterFile = $imageAfterFile;
        if ($imageAfterFile) {
            $this->updateAt = new DateTime();
        }
        return $this;
    }
}
