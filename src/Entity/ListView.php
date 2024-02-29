<?php

namespace App\Entity;

use Symfony\Component\Serializer\Attribute\Ignore;
use Symfony\Component\Serializer\Attribute\SerializedName;

class ListView
{
    public function __construct(
        #[SerializedName('free_trial')]
        private readonly bool $freeTrial,
        #[SerializedName('can_subscribe')]
        private readonly bool $canSubscribe,
        #[SerializedName('has_answers')]
        private readonly bool $hasAnswers,
        #[SerializedName('get_ready')]
        private readonly bool $getReady,
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

    public function hasAnswers(): bool
    {
        return $this->hasAnswers;
    }

    public function getReady(): bool
    {
        return $this->getReady;
    }
}
