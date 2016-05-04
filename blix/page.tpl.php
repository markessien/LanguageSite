<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">
<head>
<title><?php print $head_title ?></title>
<meta http-equiv="Content-Style-Type" content="text/css" />
<?php print $head ?><?php print $styles ?>
</head>
<body <?php print theme("onload_attribute"); ?>> 
<div id="container"> 
  <div id="header"> 
      <h1><a href="<?php print url() ?>" title="<?php print($site_name) ?>"><?php print($site_name) ?></a></h1> 
      <div class="slogan"><?php print($site_slogan) ?></div> 
  </div> 

  <div id="navigation">
    <?php if ($search_box): ?> 
    <form action="<?php print $search_url ?>" method="post" id="searchform"> 
      <fieldset>
       <input type="text" value="" name="edit[keys]" id="s" /> 
       <input type="submit" value="Go!" id="searchbutton" /> 
      </fieldset>
    </form> 
    <?php endif; ?>

    <?php if (is_array($primary_links)) : ?> 
    <ul> 
      <?php foreach ($primary_links as $link): ?> 
      <li><?php print $link?></li> 
      <?php endforeach; ?> 
    </ul> 
    <?php endif; ?>
  </div>

<hr class="low" />

  <div id="content"> 
    <div class="navigation"> <?php print $breadcrumb ?> </div> 
    <?php if ($messages != ""): ?> 
    <div id="message"><?php print $messages ?></div> 
    <?php endif; ?> 
    <?php if ($mission != ""): ?> 
    <div id="mission"><?php print $mission ?></div> 
    <?php endif; ?> 
    <?php if ($title != ""): ?> 
    <h2 class="page-title"><?php print $title ?></h2> 
    <?php endif; ?> 
    <?php if ($tabs != ""): ?> 
    <?php print $tabs ?> 
    <?php endif; ?> 
    <?php if ($help != ""): ?> 
    <p id="help"><?php print $help ?></p> 
    <?php endif; ?> 
    <!-- start main content --> 
    <?php print($content) ?> 
    <!-- end main content --> 
  </div>

  <div id="subcontent">  
    <?php print $sidebar_left ?> <?php print $sidebar_right ?>
  </div> 
 
 <hr class="low" /> 

  <div id="footer"> 
    <p> 
      <?php if ($footer_message) : ?> 
      <?php print $footer_message;?><br /> 
      <?php endif; ?> 
    
  </div>

</div> 
<?php print $closure;?> 
</body>
</html>
