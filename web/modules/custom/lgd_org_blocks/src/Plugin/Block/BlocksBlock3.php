<?php

namespace Drupal\lgd_org_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a blocks block.
 *
 * @Block(
 *   id = "lgd_org_blocks_blocks_3",
 *   admin_label = @Translation("Number of councils"),
 *   category = @Translation("Custom")
 * )
 */
class BlocksBlock3 extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'number' => $this->t('16'),
      'content' => $this->t('UK Councils and growing'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['number'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Number'),
      '#default_value' => $this->configuration['number'],
    ];
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
    $this->configuration['number'] = $form_state->getValue('number');
    $this->configuration['content'] = $form_state->getValue('content');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#number' => $this->configuration['number'],
      '#content' => $this->configuration['content'],
      '#theme' => 'lgd_org_blocks',
    ];
    return $build;
  }

}
