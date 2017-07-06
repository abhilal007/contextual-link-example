<?php

namespace Drupal\contextual_links_example\Controller;

use Drupal\contextual_links_example\Entity\CLEEntity;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for contextual example routes.
 */
class CLEController extends ControllerBase {

  /**
   * Returns a list of CLEEntity objects.
   */
  public function clePage() {
    // For simplicity we hardcode an array of CLEEntity ids.
    $entity_ids = [1, 2, 3, 4, 5];

    // Create the renderable array for every CLEEntity.
    foreach ($entity_ids as $id) {
      // To add a contextual link we need to provide the key #contextual_links.
      // See \Drupal\contextual\Element\ContextualLinks.
      $build[$id] = [
        '#theme' => 'contextual_links_example_entity',
        '#object' => new CLEEntity(['id' => $id], 'contextual_links_example_entity'),
        '#contextual_links' => [
          'contextual_links_example' => [
            'route_parameters' => ['entity_id' => $id],
          ],
        ],
      ];
    }

    return $build;
  }

  /**
   * Returns CLEEntity.
   *
   * @param int $entity_id
   *   Entity ID.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function cleContent(int $entity_id) {
    $build = [
      '#theme' => 'contextual_links_example_entity',
      '#object' => new CLEEntity(['id' => $entity_id], 'contextual_links_example_entity'),
    ];
    return $build;
  }

}
