<?php

namespace Loggable\Fixture\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\ODM\MongoDB\Types\Type;
use Gedmo\Loggable\Loggable;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ODM\EmbeddedDocument
 * 
 * @Gedmo\Loggable
 */
#[ODM\EmbeddedDocument]
#[Gedmo\Loggable]
class Reference implements Loggable
{
    /**
     * @Gedmo\Versioned
     *
     * @ODM\Field(type="string")
     */
    #[ODM\Field(type: Type::STRING)]
    #[Gedmo\Versioned]
    private ?string $reference = null;

    /**
     * @Gedmo\Versioned
     *
     * @ODM\Field(type="string")
     */
    #[ODM\Field(type: Type::STRING)]
    #[Gedmo\Versioned]
    private ?string $title = null;

    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }
}
