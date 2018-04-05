<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'MeetTheDevBlock' block.
 *
 * @Block(
 *  id = "meet_the_dev_block",
 *  admin_label = @Translation("Meet the dev block"),
 * )
 */
class MeetTheDevBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['meet_the_dev_block']['#markup'] = 'Implement MeetTheDevBlock.';

    return $build;
  }

}
