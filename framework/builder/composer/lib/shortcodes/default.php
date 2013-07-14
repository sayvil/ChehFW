<?php
/**
 */

/* This shortcode is used for columns and text containers output
---------------------------------------------------------- */

class WPBakeryShortCode_VC_Column_text extends WPBakeryShortCode {

    public function content( $atts, $content = null ) {

        $el_class = $width = $el_position = '';

        extract(shortcode_atts(array(
            'el_class' => '',
            'el_position' => '',
            'width' => '1/2'
        ), $atts));

        $output = '';

        $el_class = $this->getExtraClass($el_class);
        $width = '';//wpb_translateColumnWidthToSpan($width);

        $output .= "\n\t".'<div class="wpb_text_column wpb_content_element '.$width.$el_class.'">';
        $output .= "\n\t\t".'<div class="wpb_wrapper">';
        $output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
        $output .= "\n\t\t".'</div> ' . $this->endBlockComment('.wpb_wrapper');
        $output .= "\n\t".'</div> ' . $this->endBlockComment($width);

        //
        $output = $this->startRow($el_position) . $output . $this->endRow($el_position);
        return $output;
    }
}



class WPBakeryShortCode_VC_Separator extends WPBakeryShortCode {

    protected function content( $atts, $content = null ) {
        $with_line = '';
        extract(shortcode_atts(array(
            'style' => '1',
            'margin' => '15px 0 15px 0',
            'with_line' => ''
        ), $atts));
        
        $output = '';
        $output .= '<div class="hr hr'.$style.'" style="margin:'.$margin.';"></div>'.$this->endBlockComment('separator')."\n";
        return $output;
    }

    public function outputTitle($title) {
        return '';
    }
}

class WPBakeryShortCode_VC_Text_separator extends WPBakeryShortCode {

    protected function content( $atts, $content = null ) {
        $title = $title_align = $el_class = '';
        extract(shortcode_atts(array(
            'title' => __("Title", "js_composer"),
            'title_align' => 'separator_align_center',
            'heading' => 'h3',
            'el_class' => ''
        ), $atts));
        $output = '';
        $extra = '';
        $head_size = '';
        switch ($heading) {
            case 'h1':
                $head_size='1';
                break;
            case 'h2':
                $head_size='2';
                break;
            case 'h3':
                $head_size='3';
                break;
            case 'h4':
                $head_size='4';
                break;
            case 'h5':
                $head_size='5';
                break;
            case 'h6':
                $head_size='6';
                break;
            
            default:
                 $head_size='3';
                break;
        }
        $output .= '<h'.$head_size.' class="wpb_content_element title '.$title_align.' '.$el_class.'">'.strip_tags($title).'</h'.$head_size.'>'.$this->endBlockComment('separator')."\n";

        return $output;
    }
    public function outputTitle($title) {
        return '';
    }
}

class WPBakeryShortCode_VC_Message extends WPBakeryShortCode {

    protected function content( $atts, $content = null ) {
        $color = '';
        extract(shortcode_atts(array(
            'color' => 'alert-info',
        ), $atts));
        $output = '';
        if ($color == "alert-block") $color = "alert-danger";
        $color = ( $color != '' ) ? ' wpb_'.$color : '';

        $output .= '<div class="wpb_alert wpb_content_element '.$color.'"><div class="messagebox_text">'.wpb_js_remove_wpautop($content).'</div></div>'.$this->endBlockComment('alert box')."\n";
        //$output .= '<div class="wpb_vc_messagebox message '.$color.'"><div class="messagebox_text">'.wpb_js_remove_wpautop($content).'</div></div>';
        return $output;
    }
    public function outputTitle($title) {
        return '';
    }
}



class WPBakeryShortCode_VC_Toggle extends WPBakeryShortCode {

    protected function content( $atts, $content = null ) {
        $title = $el_class = $open = null;
        extract(shortcode_atts(array(
            'title' => __("Click to toggle", "js_composer"),
            'el_class' => '',
            'open' => 'false'
        ), $atts));
        $output = '';

        $el_class = $this->getExtraClass($el_class);
        $open = ( $open == 'true' ) ? ' active' : '';

        $output .= '<div class="toggle '.$el_class.'"><div class="toggle-title '.$open.'"><div class="status-icon"></div><h3>'.$title.'</h3></div>';
        $output .= '<div class="toggle-inner">'.wpb_js_remove_wpautop($content).'</div></div>';

        return $output;
    }

    public function outputTitle($title) {
        return '';
    }
}

class WPBakeryShortCode_VC_Widget_sidebar extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        $el_position = $title = $width = $el_class = $sidebar_id = '';
        extract(shortcode_atts(array(
            'el_position' => '',
            'title' => '',
            'width' => '1/1',
            'el_class' => '',
            'sidebar_id' => ''
        ), $atts));
        if ( $sidebar_id == '' ) return null;

        $output = '';
        $el_class = $this->getExtraClass($el_class);
        $width = '';//wpb_translateColumnWidthToSpan($width);

        ob_start();
        dynamic_sidebar($sidebar_id);
        $sidebar_value = ob_get_contents();
        ob_end_clean();

        $sidebar_value = trim($sidebar_value);
        $sidebar_value = (substr($sidebar_value, 0, 3) == '<li' ) ? '<ul>'.$sidebar_value.'</ul>' : $sidebar_value;
        //
        $output .= "\n\t".'<div class="wpb_widgetised_column wpb_content_element'.$width.$el_class.'">';
        $output .= "\n\t\t".'<div class="wpb_wrapper">';
        //$output .= ($title != '' ) ? "\n\t\t\t".'<h2 class="wpb_heading wpb_widgetised_column_heading">'.$title.'</h2>' : '';
        $output .= wpb_widget_title(array('title' => $title, 'extraclass' => 'wpb_widgetised_column_heading'));
        $output .= "\n\t\t\t".$sidebar_value;
        $output .= "\n\t\t".'</div> '.$this->endBlockComment('.wpb_wrapper');
        $output .= "\n\t".'</div> '.$this->endBlockComment($width);
        //
        $output = $this->startRow($el_position) . $output . $this->endRow($el_position);
        return $output;
    }
}