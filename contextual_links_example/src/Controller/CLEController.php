<?php

namespace Drupal\contextual_links_example\Controller;

use Drupal\contextual_links_example\Entity\CLEEntity;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;


class CLEController extends ControllerBase {

 public function cle_page(Request $request) {
    // For simplicity we hardcode an array of CLEEntity ids.
    $entity_ids = [1, 2, 3, 4, 5];

    // Create the renderable array for every CLEEntity.
    foreach ($entity_ids as $id) {
      // To add a contextual link we need to provide the key #contextual_links.
      // See \Drupal\contextual\Element\ContextualLinks
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

  public function cle_content(Request $request, $entity_id = NULL) {
   $build = array(
      '#theme' => 'contextual_links_example_entity',
      '#object' => new CLEEntity(['id' => $entity_id], 'contextual_links_example_entity'),
    );
    return $build;
  }

}
