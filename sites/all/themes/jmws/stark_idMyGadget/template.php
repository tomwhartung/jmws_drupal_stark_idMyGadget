<?php
/**
 * Override fcn that returns HTML for the Powered by Drupal text.
 *   function theme_system_powered_by found in modules/system/system.module
 */
function stark_idMyGadget_system_powered_by() {
   return '<span>' . t('Oweredpay by <a href="@poweredby">Drupal</a>', array('@poweredby' => 'https://www.drupal.org')) . '</span>';
}

function stark_idMyGadget_page_alter( &$page ) {
  global $jmwsIdMyGadget;

  print '<p>Hi from page_alter in stark_idMyGadget!!!!</p>';

  $message1 = 'Class JmwsIdMyGadgetDrupal does not exist';
  if ( class_exists('JmwsIdMyGadgetDrupal') ) {
    $message1 = 'Class JmwsIdMyGadgetDrupal exists!';
    if ( isset(JmwsIdMyGadgetDrupal::$supportedGadgetDetectors) ) {
      $message1 .= ' And JmwsIdMyGadgetDrupal::$supportedGadgetDetectors isset!';
    }
  }
  print '<p>message1: ' . $message1 . '</p>';

  $message2 = 'We do not know what jmwsIdMyGadget is yet.';
  if ( isset($jmwsIdMyGadget) )
  {
    if ( is_object($jmwsIdMyGadget) )
    {
      $message2 = 'jmwsIdMyGadget is an instance of ' . get_class($jmwsIdMyGadget);
    }
    else
    {
      $message2 = 'jmwsIdMyGadget is not an object.';
    }
  }
  else
  {
    $message2 = 'jmwsIdMyGadget is not set.';
  }
  print '<p>message2: ' . $message2;
  print '</p>';

  $message3 = variable_get( 'idMyGadget_gadget_detector', 'gadget detector not set!' );
  print '<p>message3: ' . $message3 . '</p>';

  global $gadgetDetectorIndex;
  // $gadget_detector_index = variable_get( 'idMyGadget_gadget_detector', 0 );
  // $message4 = 'gadget detector: ' . JmwsIdMyGadgetDrupal::$supportedGadgetDetectors[$gadget_detector_index];
  $message4 = 'gadget detector: ' . JmwsIdMyGadgetDrupal::$supportedGadgetDetectors[$gadgetDetectorIndex];
  print '<p>message4: ' . $message4 . '</p>';

  global $gadgetDetectorString;
  $message5 = 'gadgetDetectorString: ' . $gadgetDetectorString;
  print '<p>message5: ' . $message5 . '</p>';

  global $idMyGadgetClass;
  $message6 = 'idMyGadgetClass: ' . $idMyGadgetClass;
  print '<p>message6: ' . $message6 . '</p>';

  $module_name = basename(__FILE__, '.module');
  $message7 = 'module_name: ' . $module_name;
  print '<p>message7: ' . $message7 . '</p>';

  $path = drupal_get_path( 'module', 'idMyGadget' );
  $message8 = 'path: ' . $path;
  print '<p>message8: ' . $message8 . '</p>';

  print '<p>Bye from page_alter in stark_idMyGadget!!!!</p>';
}

/**
 * Ok, we can mess with the username, should we want to at some point
 */
function stark_idMyGadget_username_NOT( $variables ) {
  print '<p>Hi from stark_idMyGadget_username!!!!</p>';
  print '<p>';
  print '</p>';
  print '<p>Bye from stark_idMyGadget_username!!!!</p>';
  return '<p>Returned from stark_idMyGadget_username!!!!</p>';
}

/**
 * Allows us to see what is in $page
 * Reference: https://api.drupal.org/api/drupal/modules%21system%21system.api.php/function/hook_page_alter/7
 * NOTES:
 *   This does NOTHING when we have "_NOT" appended to the name!!
 *   This same function is in idMyGadget.module
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
