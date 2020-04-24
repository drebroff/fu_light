/**
* @file
*/

(function ($, Drupal) {
Drupal.AjaxCommands.prototype.hello = function (ajax, response, status) {
  console.log('Hello');
  console.log(response.message);
}

})(jQuery, Drupal);
