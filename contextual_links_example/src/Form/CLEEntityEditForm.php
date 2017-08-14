<?php

namespace Drupal\contextual_links_example\Form;

use Drupal\contextual_links_example\Entity\CLEEntity;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CLEEntityEditForm.
 *
 * Builds the CLEEntity edit form.
 *
 * @package Drupal\contextual_links_example\Form
 */
class CLEEntityEditForm extends FormBase {

  /**
   * Overrides Drupal\Core\Entity\EntityFormController::form().
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   An associative array containing the current state of the form.
   * @param int $entity_id
   *   Entity ID.
   *
   * @return array
   *   An associative array containing the robot add/edit form.
   */
  public function buildForm(array $form, FormStateInterface $form_state, $entity_id = NULL) {
    $values = [
      'id' => $entity_id ? $entity_id : 1,
    ];

    $entity = new CLEEntity($values, 'contextual_links_example_entity');

    // Build the form.
    $form['paragraph'] = [
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#value' => $this->t('This is the page that would allow you to edit object @id', ['@id' => $entity->id()]),
    ];

    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Update'),
    ];

    // Return the form.
    return $form;
  }

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'contextual_links_example_entity_edit';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Do the actions upon submitting the form.
    drupal_set_message($this->t('The entity was modified.'));
  }

}
