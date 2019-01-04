<?php
$base = "http://fossil-bug.com/";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->
    <url>
        <loc>http://fossil-bug.com/</loc>
        <lastmod>2019-01-04T15:20:19+00:00</lastmod>
    </url>
    <url>
        <loc>http://fossil-bug.com/home</loc>
        <lastmod>2019-01-04T15:20:19+00:00</lastmod>
    </url>
    <url>
        <loc>http://fossil-bug.com/work</loc>
        <lastmod>2019-01-04T15:20:19+00:00</lastmod>
    </url>
    <url>
        <loc>http://fossil-bug.com/play</loc>
        <lastmod>2019-01-04T15:20:19+00:00</lastmod>
    </url>
</urlset>
<!--
    ToDo: when ready to incorporate blog, use https://trinitytuts.com/tips/create-xml-sitemap-cakephp-3/ to update xml for pages and categories
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?=$base?></loc>
        <changefreq>weekly</changefreq>
    </url>
  
    <?php foreach ($categories as $list):?>
    <url>
        <loc><?=$base.$list->slug?></loc>
        <changefreq>weekly</changefreq>
    </url>
    <?php endforeach; ?>
    <?php foreach ($pages as $list):?>
    <url>
        <loc><?=$base.'s/'.$list->slug?></loc>
        <changefreq>weekly</changefreq>
    </url>
    <?php endforeach; ?>
</urlset>
-->