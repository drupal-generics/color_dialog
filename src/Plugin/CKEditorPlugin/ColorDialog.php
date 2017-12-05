<?php

namespace Drupal\color_dialog\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "colordialog" plugin.
 *
 * @CKEditorPlugin(
 *   id = "colordialog",
 *   label = @Translation("Color Dialog"),
 * )
 */
class ColorDialog extends CKEditorPluginBase {

  /**
   * Get path to library folder.
   */
  public function getLibraryPath() {
    $path = '/libraries/colordialog';
    if (\Drupal::moduleHandler()->moduleExists('libraries')) {
      $path = libraries_get_path('colordialog');
    }

    return $path;
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return $this->getLibraryPath() . '/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [];
  }

}
