<?php

namespace Drupal\lgd_org_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a blocks block.
 *
 * @Block(
 *   id = "lgd_org_footer_logos",
 *   admin_label = @Translation("Footer logos (funded by)"),
 *   category = @Translation("Custom")
 * )
 */
class BlockFooterLogos extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'lgd_org_footer_logos',
    ];
  }

}
