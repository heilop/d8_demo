<?php
/**
* @file
* Contains \Drupal\d8_demo\Plugin\Block\D8DemoBlock
*/

namespace Drupal\d8_demo\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\Core\Session\AccountInterface;

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

    $config = $this->getConfiguration();
    dpm($config);
    if (isset($config['d8_demo_block_settings']) && !empty($config['d8_demo_block_settings'])) {
      $message = $config['d8_demo_block_settings'];
    }
    else{
      $message = $this->t('This is default message');
    }
    return array(
      '#markup' => $this->t('D8 demo message: </br>@message', array('@message' => $message)),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function access(AccountInterface $account) {
    return $account->hasPermission('access content');
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, &$form_state) {

    $form = parent::blockForm($form, $form_state);

    $config = $this->getConfiguration();

    $form['d8_demo_block_settings'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Message'),
      '#description' => $this->t('Write your message to show!'),
      '#default_value' => isset($config['d8_demo_block_settings']) ? $config['d8_demo_block_settings'] : '',
    );

    return $form;
  }

  /**
  * {@inheritdoc}
  */
  public function blockSubmit($form, &$form_state) {

    $this->setConfigurationValue('d8_demo_block_settings', $form_state['values']['d8_demo_block_settings']);
  }
}
