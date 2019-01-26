<?php

namespace Drupal\recipe\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

/**
 * Class RecipeYieldForm.
 */
class RecipeYieldForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'recipe_yield';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /** @var Node $recipe_node */
    $recipe_node = $form_state->getBuildInfo()['args'][0];
    $form = [];
    $form['#cache'] = ['max-age' => 0];
    $form['header'] = ['#markup' => 'form header'];
    $form['yield'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Yield'),
      '#default_value' => $recipe_node->recipe_yield_amount->value,
    ];
    $form['actions'] = [
      '#type' => 'actions',
      'change' => [
        '#type' => 'button',
        '#value' => $this->t('Change'),
//      '#weight' => '1',
      ],
      'reset' => [
        '#type' => 'button',
        '#value' => $this->t('Reset'),
      ],
      'half' => [
        '#type' => 'button',
        '#value' => $this->t('Half'),
      ],
      'double' => [
        '#type' => 'button',
        '#value' => $this->t('Double'),
      ],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
//  public function buttonForm(array &$form, FormStateInterface $form_state) {
//    // Display result.
//    foreach ($form_state->getValues() as $key => $value) {
//      drupal_set_message($key . ': ' . $value);
//    }
//
//  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $button = $form_state->getTriggeringElement();
    $messenger = \Drupal::messenger();
    $messenger->addStatus(t('The yield has been adjusted. Remember that amounts shown in notes, if any, have not been adjusted.'));
  }

}
