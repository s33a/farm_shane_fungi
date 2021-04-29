<?php
namespace Drupal\farm_shane_fungi\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class ShaneFungiController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function dashboardPage() {
    return [
      '#markup' => 'Use the tabs to complete tasks at each stage of the cultivation process.',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function purchasingPage() {
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
  public function purchasingAssetsPage() {
    return [
      '#markup' => 'Hello, Purchasing Assets',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function purchasingEquipmentPage() {
    return [
      '#markup' => 'Hello, Purchasing Equipment',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function labPage() {
    return [
      '#markup' => 'Hello, Lab',
    ];
  }

}
