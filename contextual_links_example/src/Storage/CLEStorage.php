<?php
/**
 * @file
 * Contains \Drupal\contextual_links_example\Storage\CLEStorage.
 */

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
   * Resets the internal, static entity cache.
   *
   * @param $ids
   *   (optional) If specified, the cache is reset for the entities with the
   *   given ids only.
   */
  public function resetCache(array $ids = NULL) {
    // TODO: Implement resetCache() method.
  }

  /**
   * Loads one or more entities.
   *
   * @param $ids
   *   An array of entity IDs, or NULL to load all entities.
   * @return \Drupal\Core\Entity\EntityInterface[]
   *   An array of entity objects indexed by their IDs. Returns an empty array
   *   if no matching entities found.
   */
  public function loadMultiple(array $ids = NULL) {
    // TODO: Implement loadMultiple() method.
  }

  /**
   * Loads one entity.
   *
   * @param mixed $id
   *   The ID of the entity to load.
   * @return \Drupal\Core\Entity\EntityInterface|null
   *   An entity object. NULL if no matching entity is found.
   */
  public function load($id) {
    // TODO: Implement load() method.
  }

  /**
   * Loads an unchanged entity from the database.
   *
   * @param mixed $id
   *   The ID of the entity to load.
   * @return \Drupal\Core\Entity\EntityInterface|null
   *   The unchanged entity, or NULL if the entity cannot be loaded.
   * @todo Remove this method once we have a reliable way to retrieve the
   *   unchanged entity from the entity object.
   */
  public function loadUnchanged($id) {
    // TODO: Implement loadUnchanged() method.
  }

  /**
   * Load a specific entity revision.
   *
   * @param int $revision_id
   *   The revision id.
   * @return \Drupal\Core\Entity\EntityInterface|null
   *   The specified entity revision or NULL if not found.
   */
  public function loadRevision($revision_id) {
    // TODO: Implement loadRevision() method.
  }

  /**
   * Delete a specific entity revision.
   * A revision can only be deleted if it's not the currently active one.
   *
   * @param int $revision_id
   *   The revision id.
   */
  public function deleteRevision($revision_id) {
    // TODO: Implement deleteRevision() method.
  }

  /**
   * Load entities by their property values.
   *
   * @param array $values
   *   An associative array where the keys are the property names and the
   *   values are the values those properties must have.
   * @return array
   *   An array of entity objects indexed by their ids.
   */
  public function loadByProperties(array $values = array()) {
    // TODO: Implement loadByProperties() method.
  }

  /**
   * Constructs a new entity object, without permanently saving it.
   *
   * @param array $values
   *   (optional) An array of values to set, keyed by property name. If the
   *   entity type has bundles, the bundle key has to be specified.
   * @return \Drupal\Core\Entity\EntityInterface
   *   A new entity object.
   */
  public function create(array $values = array()) {
    // TODO: Implement create() method.
  }

  /**
   * Deletes permanently saved entities.
   *
   * @param array $entities
   *   An array of entity objects to delete.
   * @throws \Drupal\Core\Entity\EntityStorageException
   *   In case of failures, an exception is thrown.
   */
  public function delete(array $entities) {
    // TODO: Implement delete() method.
  }

  /**
   * Saves the entity permanently.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity to save.
   * @return
   *   SAVED_NEW or SAVED_UPDATED is returned depending on the operation
   *   performed.
   * @throws \Drupal\Core\Entity\EntityStorageException
   *   In case of failures, an exception is thrown.
   */
  public function save(EntityInterface $entity) {
    // TODO: Implement save() method.
  }

  /**
   * Returns an entity query instance.
   *
   * @param string $conjunction
   *   (optional) The logical operator for the query, either:
   *   - AND: all of the conditions on the query need to match.
   *   - OR: at least one of the conditions on the query need to match.
   * @return \Drupal\Core\Entity\Query\QueryInterface
   *   The query instance.
   * @see \Drupal\Core\Entity\EntityStorageBase::getQueryServiceName()
   */
  public function getQuery($conjunction = 'AND') {
    // TODO: Implement getQuery() method.
  }

  /**
   * Returns an aggregated query instance.
   *
   * @param string $conjunction
   *   (optional) The logical operator for the query, either:
   *   - AND: all of the conditions on the query need to match.
   *   - OR: at least one of the conditions on the query need to match.
   * @return \Drupal\Core\Entity\Query\QueryAggregateInterface
   *   The aggregated query object that can query the given entity type.
   * @see \Drupal\Core\Entity\EntityStorageBase::getQueryServiceName()
   */
  public function getAggregateQuery($conjunction = 'AND') {
    // TODO: Implement getAggregateQuery() method.
  }

  /**
   * Returns the entity type ID.
   *
   * @return string
   *   The entity type ID.
   */
  public function getEntityTypeId() {
    // TODO: Implement getEntityTypeId() method.
  }

  /**
   * Returns the entity type definition.
   *
   * @return \Drupal\Core\Entity\EntityTypeInterface
   *   Entity type definition.
   */
  public function getEntityType() {
    // TODO: Implement getEntityType() method.
  }

}
