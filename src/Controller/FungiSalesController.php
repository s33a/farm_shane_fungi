<?php

namespace Drupal\farm_shane_fungi\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class FungiSalesController extends ControllerBase {

  public function salesPage(): array {
    return [
      '#markup' => 'Hello, Sales',
    ];
  }

}
