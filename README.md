# Social_Feed
Porting Socialfeed Module from Drupal 7 to Drupal 8

Using the Module from https://www.drupal.org/project/socialfeed
The credit goes to the respective authors for developing this Module.
This module is available for Drupal 7.
Here, I am trying porting this module for Drupal 8.

This module is easy and simple to install and use if the project page
description or the README.txt file is followed correctly.

CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers

INTRODUCTION
------------

 - Social Feed module provides the user to fetch feeds from their respective
 Facebook, Twitter, and Instagram profiles and then display them using the Drupal 
 block system according to the requirements.

 - Facebook APIs will allow you to display particular post types,
 pictures, videos of your posts and feeds also the date of your post with
 provision to provide number of count and reaction to the Post.


 - Instagram APIs will allow you to display pictures from your
 instagram profile with provision to provide number of count to be displayed
 also provision to select the resolution of the image with options and you can
 also provide the post link and rection to the post.

 - Twitter APIs will allow you get the latest tweets with date
 of your format and provision to provide number of count. Twitter APIs will
 not work locally but only on live sites as RSS feeds.

 - This module is highly recommended for the both developers & non-developers
 since the default layout of the blocks are plain and in simple text hence if
 you're aware of working with CSS then this module will work for you like a
 charm.

REQUIREMENTS
------------

 - PHP 5.4 and above.
 - PHP Curl Extension

INSTALLATION
------------

 - Install as usual, see https://www.drupal.org/node/1294804 for further
 information.
 - Now, in your sites/all/modules/ directory download the Social Feed module
 downloaded from https://www.drupal.org/project/socialfeed
 - Enable the Social Feed module.
 
 OR
 -Goto https://www.drupal.org/project/socialfeed , and copy its download link to Clipboard
  either of tar or zip file.
 -Now, in your sites/extend/ install new Module and paste the URL link there. and click Install
 -Enable the Socialfeed Module.
 

CONFIGURATION
-------------

For removing the module:
 - Disable the Social Feed module.
 - Uninstall the Social Feed module.
 - Clear Caches.

This module has menu or modifiable settings. There is configuration link for
this which you can access at admin/config/services/socialfeed.

When enabled and configured properly, this module will display the Social Feed
form at admin/config/services/socialfeed, after this step you can use the
blocks from Drupal system to show the feeds from their respective services.

MAINTAINERS
-----------

 - Hemangi Gokhale    - https://www.drupal.org/user/2008064/
 - Rishi Kulshreshtha -https://www.drupal.org/u/rishi-kulshreshtha
