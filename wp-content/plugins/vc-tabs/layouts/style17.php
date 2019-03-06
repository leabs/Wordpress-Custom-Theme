<?php
if (!defined('ABSPATH'))
    exit;
responsive_tabs_with_accordions_user_capabilities();
$styledata = Array('id' => 17, 'style_name' => 'style17', 'css' => 'heading-font-size |20| heading-font-color |#ffffff| heading-background-color |rgba(149, 21, 163, 1)| heading-font-active-color |#ffffff| heading-background-active-color |rgba(217, 14, 240, 1)| heading-font-familly |Open+Sans| heading-font-weight |500| heading-text-align |center| heading-border |1| heading-border-color |#94a8b0| heading-width |187| heading-padding |16| heading-margin-right |5| heading-margin-bottom |11| heading-border-radius |15| heading-box-shadow-Blur |10| heading-box-shadow-color |rgba(224, 224, 224, 0.19)| content-font-size |16| content-font-color |#595959| content-background-color || content-padding-top |30| content-padding-right |30| content-padding-bottom |30| content-padding-left |30|content-line-height |1.5| content-font-familly |Open+Sans| content-font-weight |300| content-font-align |center| content-border-radius |23|content-box-shadow-Blur |0| content-box-shadow-color || heading-font-style |normal| content-box-shadow-Horizontal |0| content-box-shadow-Vertical |0| content-box-shadow-Spread |0| heading-box-shadow-Horizontal |0| heading-box-shadow-Vertical |0| heading-box-shadow-Spread |0| custom-css |||');
$listdata = Array(
    0 => Array('id' => 1, 'styleid' => 17, 'title' => 'Default Title', 'files' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at justo iaculis, placerat tellus at, convallis nisi. Nam imperdiet mi sed lacus feugiat tempor. Proin consectetur metus dolor, at tempor risus rhoncus id. Quisque rhoncus elit quis elit volutpat, at ultrices lectus rhoncus. Vestibulum at consequat neque, ut ultrices quam. Aliquam metus est, placerat eu lectus ultrices, elementum accumsan nisl. Cras pulvinar arcu quis dui interdum, sit amet feugiat metus ultrices. Nulla facilisi. Quisque et sem cursus sapien finibus imperdiet sollicitudin eu arcu. Praesent eleifend nibh et libero porttitor viverra. Nam convallis dapibus accumsan. Mauris molestie efficitur augue, eu facilisis nibh hendrerit sed. Pellentesque eu tellus pretium, egestas turpis et, accumsan ante. Donec mollis condimentum nibh, mollis imperdiet lorem malesuada bibendum.</p> <p>&nbsp;</p> <p>Nulla eget tortor dignissim, vulputate mi eu, ultricies neque. Proin ut nunc vel purus elementum rhoncus. Sed aliquet dolor et nibh consectetur, sed sodales elit varius. Vivamus aliquam hendrerit viverra. Mauris neque mi, consequat quis urna quis, aliquam pellentesque lorem. Quisque urna felis, rhoncus at vestibulum vitae, pharetra vitae lectus. Nunc eget orci in leo dignissim luctus. Nam ac nisl sed lectus ultrices ultricies non id dui. Nulla a tincidunt leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla sit amet tincidunt ex. Aenean a elementum nulla.</p>', 'css' => 'fas fa-address-book'),
    1 => Array('id' => 2, 'styleid' => 17, 'title' => 'Default Title', 'files' => '<p>Nulla eget tortor dignissim, vulputate mi eu, ultricies neque. Proin ut nunc vel purus elementum rhoncus. Sed aliquet dolor et nibh consectetur, sed sodales elit varius. Vivamus aliquam hendrerit viverra. Mauris neque mi, consequat quis urna quis, aliquam pellentesque lorem. Quisque urna felis, rhoncus at vestibulum vitae, pharetra vitae lectus. Nunc eget orci in leo dignissim luctus. Nam ac nisl sed lectus ultrices ultricies non id dui. Nulla a tincidunt leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla sit amet tincidunt ex. Aenean a elementum nulla.</p> <p>&nbsp;</p> <p>Morbi tempor quam porta lobortis sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi placerat volutpat purus. Sed eget imperdiet mauris, sit amet convallis quam. Phasellus et urna vitae libero pulvinar tempor id vel velit. Mauris posuere sagittis dui, vel eleifend tellus. Nam ultrices erat et placerat mollis.</p>', 'css' => 'fab fa-algolia'),
    2 => Array('id' => 3, 'styleid' => 17, 'title' => 'Default Title', 'files' => '<p>Morbi tempor quam porta lobortis sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi placerat volutpat purus. Sed eget imperdiet mauris, sit amet convallis quam. Phasellus et urna vitae libero pulvinar tempor id vel velit. Mauris posuere sagittis dui, vel eleifend tellus. Nam ultrices erat et placerat mollis.</p><p>&nbsp;</p><p>In placerat et nulla ac tempor. Pellentesque commodo, augue eget dictum vulputate, urna ex pretium ligula, quis varius urna felis in nisl. Quisque sit amet odio imperdiet, pellentesque erat at, auctor felis. Praesent posuere porttitor sem non placerat. Nam a risus nibh. Maecenas vulputate varius erat. Vivamus sed nisi non ex pulvinar feugiat vitae ac nibh. Aliquam egestas dolor sit amet mauris faucibus rutrum. Aliquam nec erat porttitor, commodo sem quis, convallis felis. Duis congue, augue a ultrices sollicitudin, nulla risus aliquet lacus, ut pretium leo massa at neque. Proin aliquam urna eleifend nisi commodo, non vehicula nulla molestie. Nulla ut augue vel arcu aliquam commodo. Nam ut nulla in sapien lobortis blandit in in diam. Proin in aliquam justo. Sed scelerisque ornare condimentum. Quisque molestie, eros eget efficitur sagittis, mi mi pulvinar risus, eget pellentesque sapien dui vel libero.</p>', 'css' => 'fab fa-adn'),
    3 => Array('id' => 4, 'styleid' => 17, 'title' => 'Default Title', 'files' => '<p>In placerat et nulla ac tempor. Pellentesque commodo, augue eget dictum vulputate, urna ex pretium ligula, quis varius urna felis in nisl. Quisque sit amet odio imperdiet, pellentesque erat at, auctor felis. Praesent posuere porttitor sem non placerat. Nam a risus nibh. Maecenas vulputate varius erat. Vivamus sed nisi non ex pulvinar feugiat vitae ac nibh. Aliquam egestas dolor sit amet mauris faucibus rutrum. Aliquam nec erat porttitor, commodo sem quis, convallis felis. Duis congue, augue a ultrices sollicitudin, nulla risus aliquet lacus, ut pretium leo massa at neque. Proin aliquam urna eleifend nisi commodo, non vehicula nulla molestie. Nulla ut augue vel arcu aliquam commodo. Nam ut nulla in sapien lobortis blandit in in diam. Proin in aliquam justo. Sed scelerisque ornare condimentum. Quisque molestie, eros eget efficitur sagittis, mi mi pulvinar risus, eget pellentesque sapien dui vel libero.</p> <p>&nbsp;</p> <p>Proin non sagittis dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu neque nisl. Quisque tempus condimentum porta. Sed laoreet vitae nibh sit amet facilisis. Sed laoreet eu est vitae tempus. Duis quis fringilla nibh. Nam rutrum mi eget enim aliquet dictum. Praesent quam dui, blandit ac eros a, eleifend lobortis est. Vivamus in imperdiet elit. Quisque ultricies eu urna quis pulvinar. Fusce dignissim aliquet dui, vel eleifend orci egestas vel. Praesent ut suscipit lacus. Maecenas tincidunt tortor vel posuere blandit. Integer cursus quam turpis, vel sagittis risus rhoncus ac.</p>', 'css' => 'fas fa-ambulance')
);
echo '<input type="hidden" name="oxi-tabs-data-' . $styledata['id'] . '" id="oxi-tabs-data-' . $styledata['id'] . '" value="' . $styledata['css'] . '">';
echo ctu_admin_style_layouts($styledata, $listdata);