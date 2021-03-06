<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://aviary/aviary.yaml',
    'modified' => 1505596948,
    'data' => [
        'enabled' => false,
        'language' => 'en',
        'enable_cors' => false,
        'all_tools' => 'all',
        'enhance' => false,
        'effects' => false,
        'frames' => false,
        'overlays' => false,
        'stickers' => false,
        'orientation' => false,
        'crop' => false,
        'resize' => false,
        'lighting' => false,
        'color' => false,
        'sharpness' => false,
        'focus' => false,
        'vignette' => false,
        'blemish' => false,
        'whiten' => false,
        'redeye' => false,
        'draw' => false,
        'colorsplash' => false,
        'text' => false,
        'meme' => false,
        'crop_strict' => false,
        'theme_select' => 'dark',
        'theme_custom_editor' => '/* general font color/reset */
body .avpw *,
body .avpw a,
body .avpw a:link,
body .avpw a:hover,
body .avpw a:visited,
body .avpw a:active {
    color: #444;
}
/* dark background behind image */
.avpw .avpw_canvas_background {
    background: #3e464a;
}
/* dark background behind tools */
.avpw .avpw_inset_background {
    background: #3e464a;
}
/* brushed metal texture */
/* outermost widget body/parent */
body .avpw {
    background: #f0f0f0;
}
/* small icon inside an open tool */
.avpw .avpw_current_tool_icon {
    background: #f0f0f0;
}
/* popups that open within the widget */
.avpw .avpw_app_popup {
    background: #f0f0f0;
}
/* colorpicker popup */
.avpw .avpw_color_picker_container {
    background: #f0f0f0;
}
/* footer text */
.avpw .avpw_footer_text,
.avpw .avpw_footer_text a,
.avpw .avpw_footer_text a:link,
.avpw .avpw_footer_text a:visited,
.avpw .avpw_footer_text a:hover,
.avpw .avpw_footer_text a:active {
    color: #656565;
}
/* tool icons */
/* normal */
.avpw .avpw_tool_icon_image {
    background-color: #efefef;
}
/* hover */
.avpw .avpw_tool_icon:hover .avpw_tool_icon_image {
    background-color: #ffffff;
}
/* pressod */
.avpw .avpw_tool_icon_down .avpw_tool_icon_image,
.avpw .avpw_tool_icon_down:hover .avpw_tool_icon_image {
    background-color: #e2e2e2;
}
/* tools paging inidcator */
body .avpw .avpw_page {
    color: #3d3d3d;
}
body .avpw .avpw_page_selected {
    color: #00a5ff;
}
/* default buttons */
body .avpw .avpw_button {
    background: #efefef;
}
/* hover */
body .avpw .avpw_button:hover {
    background: #ffffff;
}
/* pressod */
body .avpw .avpw_button.avpw_button_down {
    background-color: #e2e2e2;
}
/* primary button
 * (overriding color on these links so
 * we have to be explicit)
 */
body .avpw .avpw_primary_button,
body .avpw .avpw_primary_button:link,
body .avpw .avpw_primary_button:visited,
body .avpw .avpw_primary_button:active {
    background-color: #0084cc;
    color: #ffffff;
}
/* +/- slider label/buttons */
body .avpw .avpw_slider_label {
    color: #707070;
}
/* darker, cut-out color */
.avpw .avpw_inset_background {
    background-color: #3e464a;
}
/* preset icons */
.avpw .avpw_preset_icon {
    border-left-color: #556066;
    border-right-color: #272c2e;
}
.avpw .avpw_preset_icon_active {
    background-color: #718087;
}
/* and light blue indicator */
.avpw .avpw_preset_icon_active .avpw_preset_indicator {
    background-color: #49edfc;
}
/* grouped push-buttons inside tools */
.avpw .avpw_inset_button {
    border-left-color: #556066;
    border-right-color: #272c2e;
}
/* hover */
.avpw .avpw_inset_button:hover {
    background-color: #3c4347;
}
/* pressod */
.avpw .avpw_inset_button_down {
    background: #272c2e;
}
/* text input fields */
body .avpw .avpw_text_input {
    background: #ffffff;
    color: #bcbec0;
}
/* focus */
body .avpw .avpw_text_input_focused {
    color: #3d3f40;
}
/* palette swapped on dark background */
.avpw .avpw_inset_background .avpw_text_input {
    background: #515b60;
}
/* focus */
.avpw .avpw_inset_background .avpw_text_input_focused {
    color: #ffffff;
}
/* labels palette swapped on dark background */
.avpw .avpw_inset_background .avpw_label {
    color: #ffffff;
}
/* frame icon */
/* \'off\'/default state */
.avpw .avpw_inset_button .avpw_frame_toggle_icon {
    border-color: #717171;
}
/* \'on\'/active state */
.avpw  .avpw_inset_button_active .avpw_frame_toggle_icon {
    border-color: #49c0fc;
}
/* lock icon */
/* \'unlocked\'/default state */
.avpw .avpw_inset_button .avpw_lock_icon_top,
.avpw .avpw_inset_button .avpw_lock_icon_bottom {
    background: #a3a3a3;
}
/* \'locked\'/down state */
.avpw .avpw_inset_button .avpw_lock_icon_top_inner,
.avpw .avpw_inset_button .avpw_lock_icon_sep {
    background: #383838;
}
/* \'locked\'/active state */
.avpw .avpw_inset_button_active .avpw_lock_icon_top,
.avpw .avpw_inset_button_active .avpw_lock_icon_bottom {
    background: #49c0fc;
}'
    ]
];
