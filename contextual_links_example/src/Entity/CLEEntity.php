<?php

namespace Drupal\contextual_links_example\Entity;

use Drupal\Core\Entity\Entity;

/**
 * A simple entity for usage of contextual links assigned to an object.
 *
 * @see https://www.drupal.org/node/2123523
 *
 * @EntityType(
 *   id = "contextual_links_example_entity",
 *   handlers = {
 *     "storage" = "Drupal\contextual_links_example\Storage\CLEStorage"
 *   },
 *   entity_keys = {
 *     "id" = "id"
 *   }
 * )
 */
class CLEEntity extends Entity {

  /**
   * Creates a renderable array containing the body of the entity.
   *
   * @return array
   *   Renderable array of the entity's body.
   */
  public function bodyContent() {
    return [
      '#markup' => t('This is the content of example object @id.', ['@id' => $this->id()]),
    ];
  }

  /**
   * Creates a renderable array containing the title of the entity.
   *
   * @return array
   *   Renderable array of the entity's title.
   */
  public function titleContent() {
    return [
      '#markup' => t('Title for example object @id', ['@id' => $this->id()]),
    ];
  }

}
