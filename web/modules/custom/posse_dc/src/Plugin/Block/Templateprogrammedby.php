<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Templateprogrammedby' block.
 *
 * @Block(
 *  id = "templateprogrammedby",
 *  admin_label = @Translation("Templateprogrammedby"),
 * )
 */
class Templateprogrammedby extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['templateprogrammedby']['#markup'] = 'Template programmed by Adama in the career-changing Debug Academy.';

    return $build;
  }

}
