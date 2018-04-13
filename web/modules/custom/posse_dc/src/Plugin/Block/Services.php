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
    $build['services']['#markup'] = '<h3>Improve Your Online Presence</h3>';

    return $build;
  }

}
