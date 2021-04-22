<?php

namespace Drupal\farm_shane_fungi\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Shane Fungi' Block.
 *
 * @Block(
 *   id = "shane_fungi_block",
 *   admin_label = @Translation("Shane Fungi block"),
 *   category = @Translation("Shane Fungi"),
 * )
 */
class ShaneFungiBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Shane Fungi'),
    ];
  }

}
