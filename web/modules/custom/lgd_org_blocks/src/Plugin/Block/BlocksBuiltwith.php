<?php

namespace Drupal\lgd_org_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

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
  public function defaultConfiguration() {
    return [
      'footer_slogan' => $this->t('LocalGov Drupal. Created by councils, for councils.'),
      'content' => $this->t('This site is built with LocalGov Drupal'),
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
    $form['footer_slogan'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Footer slogan'),
      '#default_value' => $this->configuration['footer_slogan'],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['footer_slogan'] = $form_state->getValue('footer_slogan');
    $this->configuration['content'] = $form_state->getValue('content');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#slogan' => $this->configuration['footer_slogan'],
      '#content' => $this->configuration['content'],
      '#theme' => 'lgd_org_builtwith',
    ];
    return $build;
  }

}
