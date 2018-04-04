<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Services_2Block' block.
 *
 * @Block(
 *  id = "services_2block",
 *  admin_label = @Translation("Services_2block"),
 * )
 */
class Services_2Block extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['services_2block']['#markup'] = 'Implement Services_2Block. copyright proj-posse '. date(" d m Y");

    return $build;
  }

}
