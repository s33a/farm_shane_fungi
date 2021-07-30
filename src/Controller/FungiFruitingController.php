<?php

namespace Drupal\farm_shane_fungi\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class FungiFruitingController extends ControllerBase {

  public function labPage(): array {
    return [
      '#markup' => 'Hello, Fruiting',
    ];
  }

}
