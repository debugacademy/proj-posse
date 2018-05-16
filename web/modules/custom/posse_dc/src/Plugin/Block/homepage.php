<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'homepage' block.
 *
 * @Block(
 *  id = "homepage",
 *  admin_label = @Translation("Homepage"),
 * )
 */
class homepage extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['homepage']['#markup'] = 'Implement Homepage';

    return $build;
  }

}
