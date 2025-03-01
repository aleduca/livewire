<?php

namespace App\Attributes;

use Livewire\Features\SupportLockedProperties\BaseLocked;

#[\Attribute]
class Locked extends BaseLocked
{
  public function update()
  {
    $this->component->dispatch('forbidden');
  }
}
