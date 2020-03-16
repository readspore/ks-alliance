<?php 
if (! function_exists('dd')) {
    function dd(...$args){
        echo "<pre>";
        echo "<hr>";
        foreach ($args as $val) {
            echo "<hr>";
            var_dump($val);
            echo "<hr>";
        }
        echo "</pre>";
        die;
    }
}

if (! function_exists('d_')) {
    function d_(...$args){
        echo "<pre>";
        echo "<hr>";
        foreach ($args as $val) {
            echo "<hr>";
            var_dump($val);
            echo "<hr>";
        }
        echo "</pre>";
    }
}

if (!function_exists('rs_get_call_phone')) {
    function rs_get_call_phone($phone){
        return preg_replace("/[^0-9]/", '', $phone);
    }
}

if (!function_exists('rs_get_view_phone')) {
    function rs_get_view_phone($phone, $delimeter, $before, $after){
        $splited_phone = explode($delimeter, $phone);
        if (count($splited_phone) == 0)
            return rs_get_call_phone($splited_phone[0]);
        return 
            $splited_phone[0] . 
            $before . 
            $splited_phone[1] . 
            $after;
    }
}

if (!function_exists('rs_exec_flex_content')) {
    function rs_exec_flex_content(){
      $rs_flex_content = get_field('rs_flex_content', get_the_ID());
      if (!empty($rs_flex_content)) {
        foreach ($rs_flex_content as $data) {
          echo rs_render_flex_content_part($data);
        }
      }
    }
}