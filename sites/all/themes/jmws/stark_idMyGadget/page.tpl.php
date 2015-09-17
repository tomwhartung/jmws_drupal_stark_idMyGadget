<?php
/**
 * Experimenting for now, inspired by this page:
 *   http://www.apaddedcell.com/how-create-drupal-7-theme-scratch
 */
?>

<div id="header">

  <?php if ($page['header']): ?>    
    <?php print render($page['header']); ?>
  <?php else : ?>
    <p>Hello header is here because we have no header!</p>
  <?php endif; ?>

</div>

<div id="wrapper">

  <p>Hello Wrapper!  Can we "have" a "wrapper?"</p>

  <div id="content">

    <?php if ($page['content']): ?>    
      <?php print render($page['content']); ?>
    <?php else : ?>
      <p>Hello content is here because we have no content!</p>
    <?php endif; ?>

  </div>
    
  <div id="sidebar">

    <?php if ($page['sidebar']): ?>    
      <?php print render($page['sidebar']); ?>
    <?php else : ?>
      <p>Hello sidebar is here because we have no sidebar!</p>
    <?php endif; ?>

  </div>

</div>

<div id="footer">

  <?php if ($page['footer']): ?>    
    <?php print render($page['footer']); ?>
  <?php else : ?>
    <p>Hello footer is here because we have no footer!</p>
    <?php endif; ?>

</div>

