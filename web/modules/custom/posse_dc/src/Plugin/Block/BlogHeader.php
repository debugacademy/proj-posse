<?php

namespace Drupal\posse_dc\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'BlogHeader' block.
 *
 * @Block(
 *  id = "blog_header",
 *  admin_label = @Translation("Blog header"),
 * )
 */
class BlogHeader extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['blog_header']['#markup'] = 'Implement BlogHeader.';

    return $build;
  }

}
