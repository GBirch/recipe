<?php

/**
 * @file
 * Contains \Drupal\ingredient\Plugin\field\widget\IngredientWidget.
 */

namespace Drupal\ingredient\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\ingredient\Entity\Ingredient;

/**
 * Plugin implementation of the 'ingredient_autocomplete' widget.
 *
 * @FieldWidget(
 *   id = "ingredient_autocomplete",
 *   module = "ingredient",
 *   label = @Translation("Autocomplete ingredient widget"),
 *   field_types = {
 *     "ingredient"
 *   }
 * )
 */
class IngredientWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $referenced_entities = $items->referencedEntities();

    // Strange, but html_entity_decode() doesn't handle &frasl;
    $quantity = isset($items[$delta]->quantity) ? preg_replace('/\&frasl;/', '/', ingredient_quantity_from_decimal($items[$delta]->quantity, '{%d} %d&frasl;%d', TRUE)) : '';
    $element['quantity'] = array(
      '#type' => 'textfield',
      '#title' => t('Quantity'),
      '#default_value' => $quantity,
      '#size' => 8,
      '#maxlength' => 8,
      '#attributes' => array('class' => array('recipe-ingredient-quantity')),
    );
    $element['unit_key'] = array(
      '#type' => 'select',
      '#title' => t('Unit'),
      '#default_value' => isset($items[$delta]->unit_key) ? $items[$delta]->unit_key : $this->getFieldSetting('default_unit'),
      '#options' => ingredient_unit_options(),
      '#attributes' => array('class' => array('recipe-ingredient-unit-key')),
    );
    $element['target_id'] = array(
      '#type' => 'entity_autocomplete',
      '#title' => t('Name'),
      '#target_type' => 'ingredient_ingredient',
      '#autocreate' => [
        'bundle' => 'ingredient_ingredient',
      ],
      // Entity reference field items are handling validation themselves via
      // the 'ValidReference' constraint.
      '#validate_reference' => FALSE,
      '#default_value' => isset($referenced_entities[$delta]) ? $referenced_entities[$delta] : NULL,
      '#size' => 25,
      '#maxlength' => 128,
      '#attributes' => array('class' => array('recipe-ingredient-name')),
    );
    $element['note'] = array(
      '#type' => 'textfield',
      '#title' => t('Note'),
      '#default_value' => isset($items[$delta]->note) ? $items[$delta]->note : '',
      '#size' => 40,
      '#maxlength' => 255,
      '#attributes' => array('class' => array('recipe-ingredient-note')),
    );
    $element['#element_validate'] = array(array($this, 'validate'));

    return $element;
  }

  /**
   * Validate the ingredient field.
   */
  public function validate($element, FormStateInterface $form_state) {
    if (empty($element['unit_key']['#value']) && !empty($element['name']['#value'])) {
      form_error($element['unit_key'], t('You must choose a valid unit.'));
      return;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function massageFormValues(array $values, array $form, FormStateInterface $form_state) {
    foreach ($values as $key => $value) {
      // Convert fractional quantities to decimal.
      $values[$key]['quantity'] = round(ingredient_quantity_from_fraction($value['quantity']), 6);

      // The entity_autocomplete form element returns an array when an entity
      // was "autocreated", so we need to move it up a level.
      if (is_array($value['target_id'])) {
        unset($values[$key]['target_id']);
        $values[$key] += $value['target_id'];
      }
    }

    return $values;
  }

}