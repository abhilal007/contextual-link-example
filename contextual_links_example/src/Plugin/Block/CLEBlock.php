<?php

namespace Drupal\contextual_links_example\Plugin\Block;

use Drupal\contextual_links_example\Entity\CLEEntity;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CLEBlock' block.
 *
 * Contains the body of a CLEEntity instance and sets a contextual link to the
 * entity edit form.
 *
 * @Block(
 *  id = "cleblock",
 *  label = @Translation("Example: contextual links block"),
 *  admin_label = @Translation("Example: contextual links block")
 * )
 */
class CLEBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    /** @var \Drupal\contextual_links_example\Entity\CLEEntity $entity */
    $entity = new CLEEntity(['id' => 42], 'contextual_links_example_entity');

    // Create the content of the block and contextual links.
    return [
      'content' => $entity->bodyContent(),
      '#contextual_links' => [
        'contextual_links_example' => [
          'route_parameters' => ['entity_id' => $entity->id()],
        ],
      ],
    ];
  }

}
