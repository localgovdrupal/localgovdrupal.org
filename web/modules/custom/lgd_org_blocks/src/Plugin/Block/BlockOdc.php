<?php

namespace Drupal\lgd_org_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a blocks block.
 *
 * @Block(
 *   id = "lgd_org_odc",
 *   admin_label = @Translation("ODC logo"),
 *   category = @Translation("Custom")
 * )
 */
class BlockOdc extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'lgd_org_odc',
    ];
  }

}
