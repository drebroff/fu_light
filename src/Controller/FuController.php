<?php

namespace Drupal\fu_light\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\fu_light\Ajax\fuAjaxCommand;
use Drupal\Core\Ajax\SetDialogTitleCommand;
use Drupal\Core\Ajax\AlertCommand;
/**
 * Class FuController.
 */
class FuController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  // public function hello($name) {
  //   return [
  //     '#type' => 'markup',
  //     '#markup' => $this->t('Implement method: hello with parameter(s): %name', ['%name' => $name]),
  //   ];
  // }
  public function hello($name) {

    $response = new AjaxResponse();
    $selector='#myDialog'; /* The selector of the dialog whose title will be set. If set to an empty value, the default modal dialog will be selected. */
    $title='My New Title'; /* The title that will be set on the dialog. */
    $option_name='autoOpen';
//    $response->addCommand(new SetDialogTitleCommand($selector,$option_name,$response));
//    $response->addCommand(new fuAjaxCommand());
    $response->addCommand(new AlertCommand('Hello'));
    $a = 123;

    return [
      '#theme' => 'fu_light',
      '#test_var' => $this->t('Test Value') . ' ' . $name,
      '#route_var' => $name . ' asd ' . $response,
    ];

  }
}

