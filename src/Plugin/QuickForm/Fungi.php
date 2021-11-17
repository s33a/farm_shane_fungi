<?php

namespace Drupal\farm_shane_fungi\Plugin\QuickForm;

use Drupal\Core\Form\FormStateInterface;
use Drupal\farm_quick\QuickFormBase;
use Drupal\farm_quick\Traits\QuickLogTrait;

/**
 * Fungi harvest quick form.
 *
 * @QuickForm(
 *   id = "fungi",
 *   label = @Translation("Fungi harvest"),
 *   description = @Translation("Record when fungi are harvested."),
 *   helpText = @Translation("Use this form to record when fungi are havested."),
 *   permissions = {
 *     "create harvest log",
 *   }
 * )
 */
abstract class Fungi extends QuickFormBase {

  use QuickLogTrait;

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, string $id = NULL) {

    // Fungi quantity.
    $form['quantity'] = [
      '#type' => 'number',
      '#title' => $this->t('Quantity'),
      '#min' => 0,
      '#step' => 1,
      '#required' => TRUE,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    // Draft a Fungi harvest log from the user-submitted data.
    $quantity = $form_state->getValue('quantity');
    $log = [
      'name' => $this->t('Collected @count fungi(s)', ['@count' => $quantity]),
      'type' => 'harvest',
      'quantity' => [
        [
          'measure' => 'count',
          'value' => $quantity,
          'unit' => $this->t('fungi(s)'),
        ],
      ],
    ];

    // Create the log.
    $this->createLog($log);
  }

}