<?php

if (!defined('ABSPATH'))
    exit;
responsive_tabs_with_accordions_user_capabilities();
$styledata = Array('id' => 4, 'style_name' => 'style4', 'css' => 'heading-font-size |20| heading-font-color |#8f8f8f| heading-background-color |rgba(241, 245, 248, 1)| heading-border-color |#dedede| heading-font-active-color |#00bda1| heading-font-familly |Open+Sans| heading-font-weight |500| heading-width |150| heading-padding-up-bottom |10| heading-padding-left-right |20| heading-padding-box |20| content-font-size |16| heading-padding-box-left |25| content-font-color |#808080| content-background-color |rgba(255, 255, 255, 1)| content-border-left-color |#b3b3b3| span-margin-bottom |25| content-padding-top |30| content-padding-right |30| content-padding-bottom |30| content-padding-left |30| content-line-height |1.5| content-font-familly |Open+Sans| content-font-weight |300| content-font-align |left| content-box-shadow-Blur |20| content-box-shadow-color |#c2c2c2| content-border-radius |5| content-box-shadow-Horizontal |0| content-box-shadow-Vertical |0| content-box-shadow-Spread |0| heading-font-style |normal| content-width |1000| custom-css ||');
$listdata = Array(
    0 => Array('id' => 1, 'styleid' => 4, 'title' => 'Default Title', 'files' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue lorem vel molestie rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam arcu nunc, hendrerit sed vestibulum ut, semper eu lectus. Curabitur non ex fringilla, cursus quam eu, hendrerit lectus. Mauris tempor nibh erat, eget lacinia justo porta ut.</p> <p>&nbsp;</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste</p>', 'css' => 'fas fa-address-book'),
    1 => Array('id' => 2, 'styleid' => 4, 'title' => 'Default Title', 'files' => '<p>Morbi facilisis erat urna, vitae convallis mi hendrerit sit amet. Maecenas hendrerit accumsan commodo. Pellentesque congue sem sit amet tempor egestas. Pellentesque ac cursus sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam at viverra urna. Aliquam tristique aliquet varius.</p><p>Nunc porttitor vel dolor et mattis. Aenean interdum rutrum tempor. Aenean nec aliquet neque. Aliquam in ante eget eros luctus dictum. Suspendisse potenti. Phasellus mattis mattis porttitor.</p>', 'css' => 'fab fa-algolia'),
    2 => Array('id' => 3, 'styleid' => 4, 'title' => 'Default Title', 'files' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at nisl at dolor imperdiet bibendum. Suspendisse ligula augue, vestibulum vitae eleifend nec, cursus eu odio. Nunc a mauris eget enim lacinia faucibus convallis non risus. Integer neque nisi, malesuada a erat vitae, ullamcorper faucibus erat. Duis iaculis a dui sed tincidunt. Aliquam lobortis faucibus urna pharetra scelerisque. Maecenas eget erat sit amet arcu bibendum porttitor sit amet id dui. Ut feugiat tempor porta. Maecenas quam diam, sodales ut pharetra tristique, congue sed lectus.</p> <p>&nbsp;</p> <p>Aliquam scelerisque dui sed velit euismod condimentum. Suspendisse a aliquet ligula. Nullam at purus vehicula, hendrerit enim eget, tempor sapien. Duis tortor urna, commodo nec sollicitudin quis, fermentum non mi. Proin sed quam augue. Sed tempus ut elit quis tempus. Pellentesque sed mauris id risus convallis commodo sed quis diam. Nullam bibendum congue gravida. Aenean ante turpis, pharetra placerat pulvinar eget, dignissim et est. Etiam ac vulputate enim, sit amet ultricies nulla.</p>', 'css' => 'fab fa-adn'),
    3 => Array('id' => 4, 'styleid' => 4, 'title' => 'Default Title', 'files' => '<p>Sed ligula ex, condimentum vitae dapibus vitae, pulvinar eu libero. Pellentesque id dolor mollis, suscipit orci viverra, blandit tellus. Donec suscipit cursus risus sed imperdiet. Aenean luctus turpis tellus, a egestas diam pulvinar at. Morbi ultricies hendrerit magna, eget lobortis ligula. Integer ut felis tincidunt, lacinia ligula sed, rhoncus orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ornare malesuada orci nec tincidunt. In tempor sem sed lacus condimentum, id vulputate ipsum vehicula. Aenean fermentum varius nunc at posuere. Proin ultricies a ipsum eget mollis. Aliquam porta varius consequat.</p>  <p>Quisque feugiat sit amet lectus sit amet tempus. Nam pellentesque tincidunt faucibus. Nullam iaculis lorem vel commodo fringilla. Etiam sed quam nibh. Nunc accumsan semper tortor. Pellentesque ornare est at felis porta, eget mattis lorem tempus. Etiam ornare lacinia nunc, nec tincidunt velit ultrices non. Morbi ullamcorper suscipit leo, ac dignissim turpis aliquam quis. Donec pellentesque diam lorem, at suscipit ligula consectetur sed. Cras sagittis ex eget pellentesque porttitor. Morbi nec orci non elit lacinia fringilla vel at tellus.</p>', 'css' => 'fas fa-ambulance')
);
echo '<input type="hidden" name="oxi-tabs-data-' . $styledata['id'] . '" id="oxi-tabs-data-' . $styledata['id'] . '" value="' . $styledata['css'] . '">';
echo ctu_admin_style_layouts($styledata, $listdata);