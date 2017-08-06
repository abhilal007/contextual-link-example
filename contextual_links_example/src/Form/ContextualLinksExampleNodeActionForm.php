<?php

namespace Drupal\contextual_links_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\NodeInterface;

/**
 * Class ContextualLinksExampleNodeActionForm.
 *
 * Creates a form action for the given node in context. Contains the needed
 * functions for the form and some helper functions.
 *
 */
class ContextualLinksExampleNodeActionForm extends FormBase {

  /**
   * The form ID. Unique string identifying the form.
   *
   * @var string
   *
   * @see getFormID()
   */
  protected $formId = "contextual_links_example_node_action";

  /**
   * The node to which the form is attached.
   *
   * We add it as a property of the form, to keep a reference to it once the
   * form is built.
   *
   * @var \Drupal\node\NodeInterface
   */
  protected $node;

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return $this->formId;
  }

  /**
   * Form constructor.
   *
   * Creates an action form to transform the node's title in all lower, all
   * uppercase or first character of each word to upper.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   * @param \Drupal\node\NodeInterface $node
   *   The node from the URL context.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state, NodeInterface $node = NULL) {
    // Keep the reference to the node.
    $this->setNode($node);

    $form['text'] = [
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#value' => $this->t(
        'This is the page that would allow you to perform an example action on node @nid, named "@title".',
        ['@nid' => $this->getNid(), '@title' => $this->getNodeTitle()]
      ),
    ];

    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save changes'),
    ];

    return $form;
  }

  /**
   * Form submission handler.
   *
   * Transform the node's title based on user's choice.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($this->t('Updated node %title.', ['%title' => $this->getNodeTitle()]));
  }

  /**
   * Set the current node.
   *
   * @param \Drupal\node\NodeInterface $node
   *   The node object to be set.
   */
  protected function setNode(NodeInterface $node) {
    $this->node = $node;
  }

  /**
   * Get the id of the current node.
   *
   * @return int|null|string
   *   The id of the node.
   */
  protected function getNid() {
    return $this->node->id();
  }

  /**
   * Returns the title of the current node.
   *
   * @return string
   *   Title of the node.
   */
  protected function getNodeTitle() {
    return $this->node->getTitle();
  }

}
