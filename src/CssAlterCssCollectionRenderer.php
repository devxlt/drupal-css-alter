<?php

/**
 * @file
 * Contains Drupal\css_alter\CssAlterCssCollectionRenderer
 */

namespace Drupal\css_alter;

use Drupal\Core\Asset\CssCollectionRenderer;

class CssAlterCssCollectionRenderer extends CssCollectionRenderer {
  /**
   * {@inheritdoc}
   */
  public function render(array $css_assets) {
    $elements = parent::render($css_assets);
    foreach($elements as &$element) {
      $element['#attributes']['property'] = 'stylesheet';
    }
    return $elements;
  }
}
