<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'BlogHeaderBlock' block.
 *
 * @Block(
 *  id = "blog_header_block",
 *  admin_label = @Translation("Blog header block"),
 * )
 */
class BlogHeaderBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['blog_header_block']['#markup'] = 'Implement BlogHeaderBlock.';

    return $build;
  }

}
