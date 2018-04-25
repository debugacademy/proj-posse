<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Services' block.
 *
 * @Block(
 *  id = "services",
 *  admin_label = @Translation("Services"),
 * )
 */
class Services extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['services']['#markup'] = 'Improve Your Online Presence';

    return $build;
  }

}
