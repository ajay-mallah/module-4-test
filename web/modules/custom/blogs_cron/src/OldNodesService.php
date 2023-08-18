<?php
namespace Drupal\blogs_cron;
 
use Drupal\Core\Entity\EntityTypeManager;

/**
 * Class OldNodesService
 *  Handle services for old nodes.
 */
class OldNodesService {
  /**
   * @var Drupal\Core\Entity\EntityTypeManager
   */
  protected $entityTypeManager;
  
  public function __construct(EntityTypeManager $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }
  
  /**
   * Loads nodes from the database.
   */
  public function load() {
    $storage = $this->entityTypeManager->getStorage('node');
    $query = $storage->getQuery()->condition('type', 'blogs')->condition('created',
      strtotime('-365 days'), '<');
    $nids = $query->execute();
    return $storage->loadMultiple($nids);
  }
}