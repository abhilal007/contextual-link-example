<?php

namespace Drupal\contextual_links_example\Storage;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityStorageInterface;

/**
 * Class CLEStorage.
 *
 * Defines a simple storage used by module's entity type.
 *
 * @see \Drupal\node\NodeStorage
 *
 * @package Drupal\contextual_links_example\Storage
 */
class CLEStorage implements EntityStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function resetCache(array $ids = NULL) {
    // TODO: Implement resetCache() method.
  }

  /**
   * {@inheritdoc}
   */
  public function loadMultiple(array $ids = NULL) {
    // TODO: Implement loadMultiple() method.
  }

  /**
   * {@inheritdoc}
   */
  public function load($id) {
    // TODO: Implement load() method.
  }

  /**
   * {@inheritdoc}
   */
  public function loadUnchanged($id) {
    // TODO: Implement loadUnchanged() method.
  }

  /**
   * {@inheritdoc}
   */
  public function loadRevision($revision_id) {
    // TODO: Implement loadRevision() method.
  }

  /**
   * {@inheritdoc}
   */
  public function deleteRevision($revision_id) {
    // TODO: Implement deleteRevision() method.
  }

  /**
   * {@inheritdoc}
   */
  public function loadByProperties(array $values = []) {
    // TODO: Implement loadByProperties() method.
  }

  /**
   * {@inheritdoc}
   */
  public function create(array $values = []) {
    // TODO: Implement create() method.
  }

  /**
   * {@inheritdoc}
   */
  public function delete(array $entities) {
    // TODO: Implement delete() method.
  }

  /**
   * {@inheritdoc}
   */
  public function save(EntityInterface $entity) {
    // TODO: Implement save() method.
  }

  /**
   * {@inheritdoc}
   */
  public function getQuery($conjunction = 'AND') {
    // TODO: Implement getQuery() method.
  }

  /**
   * {@inheritdoc}
   */
  public function getAggregateQuery($conjunction = 'AND') {
    // TODO: Implement getAggregateQuery() method.
  }

  /**
   * {@inheritdoc}
   */
  public function getEntityTypeId() {
    // TODO: Implement getEntityTypeId() method.
  }

  /**
   * {@inheritdoc}
   */
  public function getEntityType() {
    // TODO: Implement getEntityType() method.
  }

}
