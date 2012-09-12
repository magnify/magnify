<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']:   Site navigation.
 * - $page['content']:  The main content of the current page.
 * - $page['footer']:   Fat footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>

<div id="page">
    
  <header class="grid-full">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>  

    <h1 class="logo"><a href="<?php print $front_page; ?>" title="<?php print $site_name; ?> - <?php print $site_slogan; ?>"><?php print $site_name; ?></a></h1>
    <h2 class="slogan"><a href="<?php print $front_page; ?>" title="<?php print $site_name; ?> - <?php print $site_slogan; ?>"><?php print $site_slogan; ?></a></h2>

    <?php print render($main_menu); ?>
    <?php print render($page['header']); ?>

  </header>

  <nav>
    <a href="/" class="active">Home</a>
    <a href="/work">Arbejd’</a>
    <a href="/kontakt">Kontakt</a>
  </nav>  
  
  <article class="grid-full">
    <h2>What up!</h2>
    <p><strong>Velkommen forbi, jeg hedder Brian, bor i Aarhus og arbejder som webdesigner og laver til daglig hjemmesider i Drupal.</strong></p>
    <p>Udover at lave websites, så spiller jeg basketball, er øgleentusiast og bor sammen med min fantastisk dejlige kæreste Janni. </p>
    <p><strong>For tiden</strong> roder jeg en del med <a href="http://git-scm.com/">Git</a>, <a href="http://sass-lang.com/">SASS</a>, <a href="http://compass-style.org/">Compass</a>, <a href="http://styletil.es/">Styletiles</a>, <a href="http://zengrids.com/">Zen Grids</a> og prøver at følge med i alt det andet der sker online...</p>
    <h3>Arbejd’</h3>
    <p>Her er et par eksempler på sites jeg har lavet. Jeg har stået for design, projektledelse og frontendudvikling.</p>
    <?php // print render($page['content']); ?>
  </article>

  <?php if (!empty($content['footer'])): ?>
    <footer class="grid-full">
      <?php print render($page['footer']); ?>
    </footer>
  <?php endif; ?>
  
</div>
