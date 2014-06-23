<?php
/**
 * @file
 * Contains \Drupal\d8_demo\Controller\D8DemoController
 */

namespace Drupal\d8_demo\Controller;

/**
 * D8DemoController.
 */
class D8DemoController {
  /**
   * Callback d8Demo page example.
   * @return markup
   */
  public function d8Demo() {
    return array(
      '#prefix' => '<div class="d8-test-clas">',
      '#suffix' => '</div>',
      '#markup' => t('My first page in drupal 8.'),
    );
  }
}
