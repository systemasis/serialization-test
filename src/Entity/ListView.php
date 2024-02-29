<?php

namespace App\Entity;

use Symfony\Component\Serializer\Attribute\SerializedName;

class ListView
{
    public function __construct(
        #[SerializedName('free_trial')]
        private readonly bool $freeTrial,
        #[SerializedName('can_subscribe')]
        private readonly bool $canSubscribe
    )
    {
    }

    public function canFreeTrial(): bool
    {
        return $this->freeTrial;
    }

    public function canSubscribe(): bool
    {
        return $this->canSubscribe;
    }
}
