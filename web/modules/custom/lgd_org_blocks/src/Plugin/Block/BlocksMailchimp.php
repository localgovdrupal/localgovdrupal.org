<?php

namespace Drupal\lgd_org_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a blocks block.
 *
 * @Block(
 *   id = "lgd_org_blocks_mailchimp",
 *   admin_label = @Translation("mailchimp"),
 *   category = @Translation("Custom")
 * )
 */
class BlocksMailchimp extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'content' => $this->t(''),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['content'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Content'),
      '#default_value' => $this->configuration['content'],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['content'] = $form_state->getValue('content');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#content' => $this->configuration['content'],
      '#theme' => 'lgd_org_mailchimp',
    ];
    return $build;
  }

}
