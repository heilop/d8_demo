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
      '#prefix' => '<div class="d8-test-class">',
      '#suffix' => '</div>',
      '#markup' => t('My first page in drupal 8.'),
    );
  }

  /**
   * Callback d8Demo2 page example with argument.
   * @return markup
   */
  public function d8Demo2($name) {
    return array(
      '#prefix' => '<div class="d8-test-class">',
      '#suffix' => '</div>',
      'hello' => array(
        '#prefix' => '<em><h3 class="hello-name">',
        '#suffix' => '</h3></em>',
        '#markup' => t('Welcome, @name!', array('@name' => $name)),
      ),
      'message' => array(
        '#prefix' => '<div class="hello-message">',
        '#suffix' => '</div>',
        '#markup' => t('This is a first dynamic page create for Drupal 8.'),
      ),
    );
  }
}
