<?php

namespace Drupal\webform_extra_field\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field_plus\Plugin\ExtraFieldPlusDisplayBase;
use Drupal\webform\Entity\Webform;

/**
 * Class WebformExtraFieldDisplay.
 *
 * @ExtraFieldDisplay(
 *   id = "webform_extra_field_display",
 *   label = @Translation("Webform"),
 *   visible = false
 * )
 */
class WebformExtraFieldDisplay extends ExtraFieldPlusDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    $webform_id = $this->getEntityExtraFieldSetting('webform_id');
    $default_values = static::defaultExtraFieldSettings();
    if ($webform_id != $default_values['webform_id']) {
      $webform = Webform::load($webform_id);
      if ($webform) {
        $view_builder = \Drupal::entityTypeManager()->getViewBuilder('webform');
        return $view_builder->view($webform);
      }
    }
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public static function getExtraFieldComponentId(string $field_id): string {
    // The component id must start with 'extra_field_'.
    if (strpos($field_id, 'extra_field_') !== 0) {
      $field_id = 'extra_field_' . $field_id;
    }
    return $field_id;
  }

  /**
   * {@inheritdoc}
   */
  protected static function extraFieldSettingsForm(): array {
    $elements = parent::extraFieldSettingsForm();
    $options = static::getOptions();
    $elements['webform_id'] = [
      '#type' => 'select',
      '#title' => t('Webform'),
      '#description' => t('Select the webform.'),
      '#options' => $options,
      '#empty_option' => t('- None -'),
      '#empty_value' => '_none',
    ];
    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  protected static function defaultExtraFieldSettings(): array {
    $values = parent::defaultExtraFieldSettings();
    $values += [
      'webform_id' => '_none',
    ];
    return $values;
  }

  /**
   * Helper function to retrieve the webform list option set.
   *
   * @return array
   *   The webform array option list.
   */
  protected static function getOptions() {
    $options = [];
    $webforms = Webform::loadMultiple();
    foreach ($webforms as $webform) {
      $options[$webform->id()] = $webform->label();
    }
    return $options;
  }

}
