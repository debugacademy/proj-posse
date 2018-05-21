<?php

namespace Drupal\posse_dc\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class PosseSettingsForm.
 */
class PosseSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'posse_dc.possesettings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'posse_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    
    /* first two lines gets configuration object */ 
    $config = \Drupal::config('posse_dc.possesettings');
    $config->get('name');

    $form['homepage'] = array(
      '#type' => 'fieldset',
      '#title' => $this
        ->t('Homepage'),
    );
    
    $form['homepage']['blog_display'] = array(
      '#type' => 'checkbox',
      '#title' => $this
      ->t('Display blog posts on homepage?'),
      '#default_value' => $config->get('blog_display'), 
    );

    $form['homepage']['portfolio_display'] = array(
      '#type' => 'checkbox',
      '#title' => $this
      ->t('Display portfolio posts on homepage?'),
      '#default_value' => $config->get('portfolio_display'), 
    );

    $form['homepage']['services_display'] = array(
      '#type' => 'fieldset',
      '#title' => $this
        ->t('Services Block'), 
    '#default_value' => $config->get('services_display'), 
    );

    $form['homepage']['services']['services_display'] = array(
      '#type' => 'checkbox',
      '#title' => $this
      ->t('Display services offered on the homepage?'),
      '#default_value' => $config->get('services_display'), 
    );

    $form['homepage']['services']['service_1_title'] = array(
      '#type' => 'textfield',
      '#title' => $this
        ->t('First Services Offered'),
      '#default_value' => $node->title,
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
      '#default_value' => $config->get('service_1_title'), 
    );

    $form['homepage']['services']['service_1_body'] = array(
    '#type' => 'textarea',
    '#title' => $this
        ->t('First Service Offered Description'),
    '#default_value' => $config->get('service_1_body'), 
    );

    $form['homepage']['services']['service_2_title'] = array(
      '#type' => 'textfield',
      '#title' => $this
        ->t('Second Services Offered'),
      '#default_value' => $node->title,
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
      '#default_value' => $config->get('service_2_title'), 
    );

     $form['homepage']['services']['service_2_body'] = array(
      '#type' => 'textarea',
      '#title' => $this
        ->t('Second Service Offered Description'),
      '#default_value' => $config->get('service_2_body'), 
    );

     $form['homepage']['services']['service_3_title'] = array(
      '#type' => 'textfield',
      '#title' => $this
        ->t('Third Services Offered'),
      '#default_value' => $node->title,
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
      '#default_value' => $config->get('service_3_title'), 
    );

     $form['homepage']['services']['service_3_body'] = array(
    '#type' => 'textarea',
    '#title' => $this
        ->t('Third Service Offered Description'),
    '#default_value' => $config->get('service_3_body'), 
    );


    $form['color'] = array(
    '#type' => 'color',
    '#title' => $this
        ->t('Color'),
    '#default_value' => $config->get('color'), 
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    // $values = form_state->getValues();
    // foreach ($values as $key => $value) {
    //  $this->configFactory->getEditable('posse_dc.possesettings')
    //   ->set($key, $value)
    //   ->save();
    parent::submitForm($form, $form_state);

    $this->config('posse_dc.possesettings')
      ->save();
  }

}
