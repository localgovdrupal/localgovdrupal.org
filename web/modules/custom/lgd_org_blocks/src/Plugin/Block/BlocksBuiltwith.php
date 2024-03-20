<?php

namespace Drupal\lgd_org_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a blocks block.
 *
 * @Block(
 *   id = "lgd_org_blocks_builtwith",
 *   admin_label = @Translation("Built With"),
 *   category = @Translation("Custom")
 * )
 */
class BlocksBuiltwith extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'lgd_org_builtwith',
    ];
  }
}
