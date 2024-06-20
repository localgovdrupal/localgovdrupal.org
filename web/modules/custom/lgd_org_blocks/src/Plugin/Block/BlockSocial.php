<?php

namespace Drupal\lgd_org_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a blocks block.
 *
 * @Block(
 *   id = "lgd_org_social",
 *   admin_label = @Translation("Social"),
 *   category = @Translation("Custom")
 * )
 */
class BlockSocial extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'lgd_org_social',
    ];
  }

}
