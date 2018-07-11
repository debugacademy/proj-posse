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
    $config = \Drupal::config('posse_dc.possesettings');

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

    $form['homepage']['testimonial_display'] = array(
      '#type' => 'checkbox',
      '#title' => $this
      ->t('Display testimonial posts on homepage?'),
      '#default_value' => $config->get('testimonial_display'),
    );

    $form['homepage']['meetthedevblock'] = array(
      '#type' => 'fieldset',
      '#title' => $this
        ->t('Meet The Dev'),
    );

    $form['homepage']['meetthedevblock']['meetthedevblock_display'] = array(
      '#type' => 'checkbox',
      '#title' => $this
      ->t('Display Meet The Dev on the homepage?'),
      '#default_value' => $config->get('meetthedevblock_display'),
    );

    $form['homepage']['meetthedevblock_image'] = [
      '#type' => 'managed_file',
      '#upload_location' => 'public://homepage-blocks/',
      '#multiple' => FALSE,
      '#description' => t('Allowed extensions: gif png jpg jpeg. Dimensions: 800x525'),
      '#upload_validators' => [
      'file_validate_is_image' => array(),
      'file_validate_extensions' => array('gif png jpg jpeg'),
      'file_validate_size' => array(25600000)
    ],
      '#title' => t('meetthedevblock_image'),
      '#default_value' => \Drupal::config('posse_settings')->get('meetthedevblock_image')
    ];

    $form['homepage']['meetthedevblock']['meetthedevblock_title'] = array(
      '#type' => 'textfield',
      '#title' => $this
        ->t('Name'),
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
      '#default_value' => $config->get('meetthedevblock_title'),
    );

    $form['homepage']['meetthedevblock']['meetthedevblock_body'] = array(
    '#type' => 'textarea',
    '#title' => $this
        ->t('Description'),
    '#default_value' => $config->get('meetthedevblock_body'),
    );

    $form['homepage']['services'] = array(
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
    $values = $form_state->getValues();
    foreach ($values as $key => $value) {
      $this->configFactory->getEditable('posse_dc.possesettings')
        ->set($key, $value)
        ->save();
    }
    parent::submitForm($form, $form_state);
  }

}
