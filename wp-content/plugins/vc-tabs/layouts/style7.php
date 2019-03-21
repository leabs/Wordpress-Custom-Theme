<?php 
if (!defined('ABSPATH'))
    exit;
responsive_tabs_with_accordions_user_capabilities();
$styledata = Array('id' => 7, 'style_name' => 'style7', 'css' => 'heading-font-size |20| heading-font-color |#ffffff| heading-background-color |rgba(34, 130, 117, 1)| heading-font-active-color |#228275| heading-background-active-color |#ffffff| heading-border-color |#c1c7c5| heading-font-familly |Open+Sans| heading-font-weight |500| heading-width |350| heading-text-align |flex-start| heading-padding |15| content-font-size |16| content-font-color |#7a7a7a| content-background-color |rgba(255, 255, 255, 1)| content-padding-top |30| content-padding-right |30| content-padding-bottom |30| content-padding-left |30| content-line-height |1.5| content-font-familly |Open+Sans| content-font-weight |300| content-font-align |left| content-border-color |rgba(193, 199, 197, 1)| content-box-shadow-Blur |20| content-box-shadow-color |rgba(224, 224, 224, 0.5)| content-box-shadow-Horizontal |0| content-box-shadow-Vertical |0| content-box-shadow-Spread |0| heading-font-style |normal| content-border-radius |10| custom-css ||');
$listdata = Array(
    0 => Array('id' => 1, 'styleid' => 7, 'title' => 'Default Title', 'files' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sodales urna. Donec ac aliquam magna. Integer vulputate nibh consequat, ultricies dui non, vehicula neque. Sed auctor ante vel massa fermentum, at tincidunt nunc mattis. Curabitur porta ipsum id enim elementum pretium. Cras hendrerit mattis leo, non ultrices felis aliquet ac. Maecenas quam ipsum, vehicula elementum dapibus sed, lobortis sed massa.   Donec mollis felis in magna vehicula suscipit. Sed ullamcorper lacinia est sed malesuada.</p> <p>&nbsp;</p><p>Sed ut vehicula ex, vitae imperdiet purus. Mauris ornare auctor tristique. Cras et magna velit. Morbi tempor facilisis sapien, at tristique ipsum rhoncus at. Nulla porta libero eget mi sodales, nec sodales quam malesuada. Integer nisi enim, commodo consectetur condimentum eu, pellentesque vitae quam. Cras at sollicitudin eros. Ut at odio euismod, vulputate tortor condimentum, dapibus risus. Aliquam et quam lacus. Quisque euismod nisl quam, in pharetra arcu elementum sed.</p>', 'css' => 'fas fa-address-book'),
    1 => Array('id' => 2, 'styleid' => 7, 'title' => 'Default Title', 'files' => '<p>Donec mollis felis in magna vehicula suscipit. Sed ullamcorper lacinia est sed malesuada. Sed ut vehicula ex, vitae imperdiet purus. Mauris ornare auctor tristique. Cras et magna velit. Morbi tempor facilisis sapien, at tristique ipsum rhoncus at. Nulla porta libero eget mi sodales, nec sodales quam malesuada. Integer nisi enim, commodo consectetur condimentum eu, pellentesque vitae quam. Cras at sollicitudin eros. Ut at odio euismod, vulputate tortor condimentum, dapibus risus. Aliquam et quam lacus.</p><p>&nbsp;</p> <p>Quisque euismod nisl quam, in pharetra arcu elementum sed.   Donec vitae commodo dui, vel imperdiet magna. Mauris eu est libero. Donec vulputate a elit hendrerit interdum. Sed ullamcorper sollicitudin urna ac venenatis. Praesent a tortor feugiat, ultrices mauris sit amet, sodales libero. Praesent arcu metus, venenatis nec sem accumsan, ultricies accumsan mi. Proin venenatis lorem metus. Duis nibh risus, finibus at lacus sed, consequat sagittis velit.</p>', 'css' => 'fab fa-algolia'),
    2 => Array('id' => 3, 'styleid' => 7, 'title' => 'Default Title', 'files' => '<p>Donec vitae commodo dui, vel imperdiet magna. Mauris eu est libero. Donec vulputate a elit hendrerit interdum. Sed ullamcorper sollicitudin urna ac venenatis. Praesent a tortor feugiat, ultrices mauris sit amet, sodales libero. Praesent arcu metus, venenatis nec sem accumsan, ultricies accumsan mi. Proin venenatis lorem metus.</p> <p>&nbsp;</p> <p>Duis nibh risus, finibus at lacus sed, consequat sagittis velit.   Vivamus eget eros dignissim, aliquam lacus eu, varius sapien. Maecenas vitae neque at erat vestibulum malesuada. Cras suscipit eros eget lacus iaculis viverra. Morbi quis dui sit amet nisl vehicula rutrum id in libero. Aenean aliquam neque non magna tempor, quis dapibus augue malesuada. Etiam sodales consectetur sollicitudin. In hac habitasse platea dictumst.</p>', 'css' => 'fab fa-adn'),
    3 => Array('id' => 4, 'styleid' => 7, 'title' => 'Default Title', 'files' => '<p>Vivamus eget eros dignissim, aliquam lacus eu, varius sapien. Maecenas vitae neque at erat vestibulum malesuada. Cras suscipit eros eget lacus iaculis viverra. Morbi quis dui sit amet nisl vehicula rutrum id in libero. Aenean aliquam neque non magna tempor, quis dapibus augue malesuada. Etiam sodales consectetur sollicitudin. In hac habitasse platea dictumst.   Cras pretium nunc malesuada est varius luctus.</p>  <p>&nbsp;</p> <p>Nunc tempor eros non sem convallis, id congue ipsum sollicitudin. Quisque erat orci, molestie vitae ullamcorper eu, feugiat in massa. Nullam sed orci blandit, ultrices odio vitae, finibus lorem. Quisque vitae diam pulvinar, molestie justo sit amet, posuere elit. Fusce dui purus, ultricies in quam sit amet, tincidunt rhoncus mi. Ut blandit ex purus, in facilisis erat congue in. Aenean velit nulla, convallis quis semper non, varius tristique odio. Cras eu facilisis nunc, id aliquet mauris.</p>', 'css' => 'fas fa-ambulance')
);
echo '<input type="hidden" name="oxi-tabs-data-' . $styledata['id'] . '" id="oxi-tabs-data-' . $styledata['id'] . '" value="' . $styledata['css'] . '">';
echo ctu_admin_style_layouts($styledata, $listdata);