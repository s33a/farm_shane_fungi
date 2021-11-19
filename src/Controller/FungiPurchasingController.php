<?php

namespace Drupal\farm_shane_fungi\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class FungiPurchasingController extends ControllerBase {

  public function purchasingPage(): array {
    return [
      '#markup' => 'Hello, Purchasing',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function purchasingRawMaterialsPage(): array {
    return [
      '#markup' => 'Hello, Purchasing Raw Materials',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function purchasingEquipmentPage(): array {
    return [
      '#markup' => 'Hello, Purchasing Equipment',
    ];
  }

}
