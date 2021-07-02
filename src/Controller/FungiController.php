<?php

namespace Drupal\farm_fungi\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class FungiController extends ControllerBase {

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

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
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
  public function purchasingGeneticsPage(): array {
    return [
      '#markup' => 'Hello, Purchasing Genetics',
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

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function labPage(): array {
    return [
      '#markup' => 'Hello, Lab',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function spawnPage(): array {
    return [
      '#markup' => 'Hello, Spawn',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function fruitingPage(): array {
    return [
      '#markup' => 'Hello, Fruiting',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function harvestingPage(): array {
    return [
      '#markup' => 'Hello, Harvesting',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function processingPage(): array {
    return [
      '#markup' => 'Hello, Processing & Packaging',
    ];
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function salesPage(): array {
    return [
      '#markup' => 'Hello, Sales',
    ];
  }

}
