< ?php
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
  public function purchasingGeneticsPage() {
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

/**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function spawnPage() {
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
  public function fruitingPage() {
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
  public function harvestingPage() {
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
  public function processingPage() {
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
  public function salesPage() {
    return [
      '#markup' => 'Hello, Sales',
    ];
  }

}
