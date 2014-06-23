<?php
namespace \Drupal\d8_demo\Plugin\Block;

use \Drupal\block\BlockBase;
use \Drupal\core\Session\AccountInterface;

/**
 * Provide a demo block.
 *
 * @Block(
 *   id = "d8_demo_block",
 *   admin_label = @Translation("D8 Demo block"),
 * )
 */
class D8DemoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('My first block - D8'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function access(AccountInterface $account) {
    return $account->hasPermission('access content');
  }
}
