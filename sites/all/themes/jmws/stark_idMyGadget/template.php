<?php
/**
 * Check that we have the device detection object, and if not, display the best error message we can.
 */
function stark_idMyGadget_page_alter( &$page ) {
  global $jmwsIdMyGadget;

  if (isset($jmwsIdMyGadget) ) {
    unset( $jmwsIdMyGadget->errorMessage );
  }
  else {
    stark_idMyGadget_check_idMyGadget_installation();
  }

//  global $base_url;
//  print '<p>Hi from stark_idMyGadget_page_alter.</p>';
//  $logoTitleDescription = $jmwsIdMyGadget->getLogoNameTitleDescriptionHtml($base_url);
//  print '<p>strlen($logoTitleDescription): ' . strlen($logoTitleDescription) . '</p>';
//  print '<p>htmlspecialchars($logoTitleDescription):<br />' . htmlspecialchars($logoTitleDescription) . '</p>';
//  print '<p>Bye from stark_idMyGadget_page_alter.</p>';
}
/**
 * Check whether the IdMyGadget module is installed and enabled,
 * If something is wrong, generate the most accurate error message possible
 */
function stark_idMyGadget_check_idMyGadget_installation() {
  global $jmwsIdMyGadget;

  require_once( 'idMyGadget/JmwsIdMyGadgetModuleMissing.php' );
  $jmwsIdMyGadget = new JmwsIdMyGadgetModuleMissing();
  $jmwsIdMyGadget->errorMessage = IDMYGADGET_UNKNOWN_ERROR;

  $rooted_module_file_name =  DRUPAL_ROOT . '/' . JmwsIdMyGadgetModuleMissing::IDMYGADGET_MODULE_FILE;

  if ( file_exists($rooted_module_file_name) )  {
    if ( module_exists('idMyGadget') ) {
      $jmwsIdMyGadget->errorMessage = IDMYGADGET_UNKNOWN_ERROR;
    }
    else {
      $jmwsIdMyGadget->errorMessage = IDMYGADGET_NOT_ACTIVE;
    }
  }
  else {
    $jmwsIdMyGadget->errorMessage = IDMYGADGET_NOT_INSTALLED;
    // print '<p>It is NOT installed</p>';
  }

  drupal_set_message( t($jmwsIdMyGadget->errorMessage), 'error' );
}
//
//  ==================================================
//  ***  EXPERIMENTAL CODE - PLEASE USE OR DELETE  ***
//  ==================================================
//
/**
 * THIS IS EXPERIMENTAL AND FOR LEARNING ONLY PLEASE DELETE WHEN DONE PLAYING AROUND!!!
 * Override fcn that returns HTML for the Powered by Drupal text.
 *   function theme_system_powered_by found in modules/system/system.module
 * THIS IS EXPERIMENTAL AND FOR LEARNING ONLY PLEASE DELETE WHEN DONE PLAYING AROUND!!!
 */
function stark_idMyGadget_system_powered_by() {
   return '<span>' . t('Oweredpay by <a href="@poweredby">Drupal</a>', array('@poweredby' => 'https://www.drupal.org')) . '</span>';
}

/**
 * THIS IS EXPERIMENTAL AND FOR LEARNING ONLY PLEASE DELETE WHEN DONE PLAYING AROUND!!!
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
 * THIS IS EXPERIMENTAL AND FOR LEARNING ONLY PLEASE DELETE WHEN DONE PLAYING AROUND!!!
 * Allows us to see what is in $page
 * Some displays that may help troubleshoot issues with device detection
 * Reference: https://api.drupal.org/api/drupal/modules%21system%21system.api.php/function/hook_page_alter/7
 * NOTES:
 *   This does NOTHING when we have "_NOT" appended to the name!!
 *   This same function is in idMyGadget.module
 */
function stark_idMyGadget_page_alter_NOT( &$page ) {
  print '<p>Hi from stark_idMyGadget_page_alter_NOT!!!!</p>';

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

  $message3 = variable_get( 'idMyGadget_gadget_detector', 'gadget detector not set!' );
  print '<p>message3: ' . $message3 . '</p>';

  print '<p>Bye from stark_idMyGadget_page_alter_NOT!!!!</p>';
}
