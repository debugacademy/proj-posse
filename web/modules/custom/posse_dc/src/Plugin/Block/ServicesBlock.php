<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ServicesBlock' block.
 *
 * @Block(
 *  id = "services",
 *  admin_label = @Translation("Services block"),
 * )
 */
class ServicesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['services']['#markup'] = 'Implement ServicesBlock.';

    return $build;
  }

}
