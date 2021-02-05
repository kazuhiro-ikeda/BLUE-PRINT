<ul class="n3_package">
<?php 
  $catlist = wp_list_categories(array(
    'taxonomy' => 'genre',
    'title_li' => '', 
    'hide_empty' => 0,
  ));
  echo $catlist;
?>
</ul>

<ul class="n3_package">
<?php 
  $catlist = wp_list_categories(array(
    'taxonomy' => 'area',
    'title_li' => '', 
    'hide_empty' => 0,
  ));
  echo $catlist;
?>
</ul>
