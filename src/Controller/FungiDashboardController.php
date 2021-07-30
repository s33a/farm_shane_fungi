<?php

namespace Drupal\farm_shane_fungi\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class FungiDashboardController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function dashboardPage(): array {
    return [
      '#markup' => 'Use the tabs to complete tasks at each stage of the cultivation process.',
    ];
  }

}
