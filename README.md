Block Title Link
================

Block Title Link allows a block to link its title. It works by adding new
properties to the $block object. It then uses hook_preprocess_block to wrap a
link around the current block title.

There is a also a option to disable the link from rendering around the title.
This is useful for using the link elsewhere in the block template. For example:
to link an icon, or add a "more" link.

This module adds the following properties to the $block object:
  - `$block->title_link`: The URL or path stored with each block.
  - `$block->title_link_title`: The title attribute for the link.
  - `$block->title_link_target`: The target attribute for the link.


Installation <!-- This section is required. -->
------------

- Install this module using the [official Backdrop CMS instructions](https://docs.backdropcms.org/documentation/extend-with-modules).

- Manage blocks on any page via the configuration page under **Administration >
  Structure > Layouts** (admin/structure/layouts) and provide the title link
  information.


Differences from Drupal 7 <!-- Do not include if there are no differences. -->
-------------------------

- Block Title Link settings are not available on the "Add block" form for custom
  blocks. They are only available for each block instance, accessible from the
  layout configuration.

Issues <!-- This section is required. -->
------

Bugs and feature requests should be reported in [the Issue Queue](https://github.com/backdrop-contrib/block_titlelink/issues).

Current Maintainers <!-- This section is required. -->
-------------------

- [Jen Lampton](https://github.com/jenlampton).
- [Laryn Kragt Bakker](https://github.com/laryn).

Credits <!-- This section is required. -->
-------

- Ported to Backdrop CMS by [Jen Lampton](https://github.com/jenlampton).
- Maintained for Drupal by [Adam Malone](https://drupal.org/adammalone).
- Maintained for Drupal by [Nick Maloney](https://drupal.org/ngmaloney).
- Maintained for Drupal by [Julian Pustkuchen](https://drupal.org/Anybody).
- Maintained for Drupal by [Thomas Frobieter](https://drupal.org/thomas.frobieter).
- Maintained for Drupal by [James Gilliland](https://drupal.org/neclimdul).

License <!-- This section is required. -->
-------

This project is GPL v2 software.
See the LICENSE.txt file in this directory for complete text.
