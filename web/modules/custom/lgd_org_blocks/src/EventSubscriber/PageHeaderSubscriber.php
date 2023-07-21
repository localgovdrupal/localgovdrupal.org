<?php

namespace Drupal\lgd_org_blocks\EventSubscriber;

use Drupal\Core\Cache\Cache;
use Drupal\localgov_core\Event\PageHeaderDisplayEvent;
use Drupal\node\Entity\Node;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


/**
 * Set page title.
 *
 * @package Drupal\lgd_org_blocks\EventSubscriber
 */
class PageHeaderSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return [
      PageHeaderDisplayEvent::EVENT_NAME => ['setPageHeader', 0],
    ];
  }

  /**
   * Set page title and lede.
   */
  public function setPageHeader(PageHeaderDisplayEvent $event) {

    $node = $event->getEntity();

    if (!$node instanceof Node) {
      return;
    }

    if ($node->bundle() !== 'localgov_directory') {
      return;
    }
    //dpm($event->getEntity()->get('field_standfirst')->value);
    $standfirst = $event->getEntity()->get('field_standfirst')->value;
    $event->setLede([
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#value' => t($standfirst),
    ]);
  }

}
