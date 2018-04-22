<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'TemplateProgrammedBy' block.
 *
 * @Block(
 *  id = "template_programmed_by",
 *  admin_label = @Translation("Template programmed by"),
 * )
 */
class TemplateProgrammedBy extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['template_programmed_by']['#markup'] = '<p>Template programmed by students of the career-changing <strong><a href="https://debugacademy.com/">DEBUG ACADEMY</a></strong></p>';

    return $build;
  }

}
