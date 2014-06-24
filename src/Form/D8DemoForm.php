<?php

/**
 * @file
 * Contains \Drupal\d8_demo\Form\D8DemoForm.
 */

namespace Drupal\d8_demo\Form;

use Drupal\Core\Form\FormBase;

class D8DemoForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'd8_demo_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {
    $form['email'] = array(
      '#type' => 'email',
      '#title' => $this->t('Your account email addres.'),
    );
    $form['show'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit email'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {

    if (strpos($form_state['values']['email'], '.com') === FALSE ) {
      $this->setFormError('email', $form_state, $this->t('This is not a  valid email address.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {

    drupal_set_message($this->t('Your email address is @email', array('@email' => $form_state['values']['email'])));
  }
}
