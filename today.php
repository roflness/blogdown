<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Today&rsquo;s Date</title>
    <meta http-equiv="content-type"
        content="text/html; charset=utf-8"/>
  </head>
  <body>
    <p>Today&rsquo;s date is
      <?php
        echo date('l, F dS Y.');
      ?>
    </p>
    <p>We've been together for
      <?php
        $anniversary = strtotime("2015-10-02");
        $now = time();
        $datediff = $now - $anniversary;
        $daysRemaining = floor($datediff/(60*60*24));
        $years = round($daysRemaining / 365, 2);
        global $years;
        echo $years;
      ?>
      years now!
    </p>
  </body>
</html>
