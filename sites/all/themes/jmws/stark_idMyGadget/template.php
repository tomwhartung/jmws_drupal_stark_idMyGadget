<?php
/**
 * Override fcn that returns HTML for the Powered by Drupal text.
 *   function theme_system_powered_by found in modules/system/system.module
 */
function stark_idMyGadget_system_powered_by() {
   return '<span>' . t('Oweredpay by <a href="@poweredby">Drupal</a>', array('@poweredby' => 'https://www.drupal.org')) . '</span>';
}

/**
 * Allows us to see what is in $page
 * Reference: https://api.drupal.org/api/drupal/modules%21system%21system.api.php/function/hook_page_alter/7
 * NOTE: Does NOTHING when we have "_NOT" appended to the name!!
 */
function stark_idMyGadget_page_alter_NOT( &$page ) {
  print '<p>Hi from page_alter!!!!</p>';

  print '<p>';
  if ( isset($page['page_top']) ) {
    print '<span style="color:red;">************************************** var_dump-ing page[page_top]</p>';
    print '<p>';
    var_dump( $page['page_top'] ); 
    print '</p><p style="color:red;">************************************** end of page[page_top]</p>';
  } else {
    print 'page[page_top] is not set.';
  }
  print '</p>';

  print '<p>';
  if ( isset($page['header']) ) {
    print '<span style="color:red;">************************************** var_dump-ing page[header]</p>';
    print '<p>';
    var_dump( $page['header'] ); 
    print '</p><p style="color:red;">************************************** end of page[header]</p>';
  } else {
    print 'page[header] is not set.';
  }
  print '</p>';

  print '<p>';
  if ( isset($page['sidebar_first']) ) {
    print '<span style="color:red;">************************************** var_dump-ing page[sidebar_first]</p>';
    print '<p>';
    var_dump( $page['sidebar_first'] ); 
    print '</p><p style="color:red;">************************************** end of page[sidebar_first]</p>';
  } else {
    print 'page[sidebar_first] is not set.';
  }
  print '</p>';

  print '<p>';
  if ( isset($page['content']) ) {
    print '<span style="color:red;">************************************** var_dump-ing page[content]</p>';
    print '<p>';
    var_dump( $page['content'] ); 
    print '</p><p style="color:red;">************************************** end of page[content]</p>';
  } else {
    print 'page[content] is not set.';
  }
  print '</p>';

  print '<p>';
  if ( isset($page['sidebar_second']) ) {
    print '<span style="color:red;">************************************** var_dump-ing page[sidebar_second]</p>';
    print '<p>';
    var_dump( $page['sidebar_second'] ); 
    print '</p><p style="color:red;">************************************** end of page[sidebar_second]</p>';
  } else {
    print 'page[sidebar_second] is not set.';
  }
  print '</p>';

  print '<p>';
  if ( isset($page['page_bottom']) ) {
    print '<span style="color:red;">************************************** var_dump-ing page[page_bottom]</span></p>';
    print '<p>';
    var_dump( $page['page_bottom'] );
    print '</p><p style="color:red;">************************************** end of page[page_bottom]</p>';
  } else {
    print 'page[page_bottom] is not set.';
  }
  print '</p>';

  print '<p>Bye from page_alter!!!!</p>';
}
/**
 * Want to mess with the header ... so try this ...
 * ... it does nothing, hmm....
 */
function stark_idMyGadget_page_build( &$page ) {
  print '<p>Hi from page_build !!!!</p>';
  print '<p>';
  var_dump( $page ); 
  print '</p>';
  print '<p>Bye from page_build!!!!</p>';
}
