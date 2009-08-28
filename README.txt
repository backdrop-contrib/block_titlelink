=====
Block Title Link

-----
Block Title Link is a simple module that creates a link field in the Block Admin page. It works by creating a new template variable in the $block object called $block->title_link. One would access it via the template.

For the variable to display the block.tpl.php needs to be modified. The following code demonstrates how to implement the title_link:

<a href="<? print $block->title_link ?>"><?php print $block->subject; ?></a>
