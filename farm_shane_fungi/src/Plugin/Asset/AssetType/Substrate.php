<?php

namespace Drupal\farm_shane_fungi\Plugin\Asset\AssetType;

use Drupal\farm_entity\Plugin\Asset\AssetType\FarmAssetType;

/**
 * Provides the fungi asset type.
 *
 * @AssetType(
 *   id = "substrate",
 *   label = @Translation("Substrate"),
 * )
 */
class Substrate extends FarmAssetType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = parent::buildFieldDefinitions();
    $field_info = [
      'substrate_type' => [
        'type' => 'entity_reference',
        'label' => $this->t('Substrate Type'),
        'description' => "Enter this substrate asset's name.",
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'substrate_type',
        'auto_create' => TRUE,
        'required' => TRUE,
        'weight' => [
          'form' => -90,
          'view' => -90,
        ],
      ],
    ];
    foreach ($field_info as $name => $info) {
      $fields[$name] = $this->farmFieldFactory->bundleFieldDefinition($info);
    }
    return $fields;
  }

}
