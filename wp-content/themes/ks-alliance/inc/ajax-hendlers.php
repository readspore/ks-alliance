<?php 

function send_rs_want_to_work() {

    /* Отправляем нам письмо */
    $send = rs_send_form_mail("rs_want_to_work");

    /* Завершаем выполнение ajax */
    if( $send ){
        $response = [
            'success' => true
        ];
    } else {
        $response = [
            'success' => false
        ];
    }
    echo json_encode($response);
    die();

}
add_action("wp_ajax_rs_want_to_work", "send_rs_want_to_work");
add_action("wp_ajax_nopriv_rs_want_to_work", "send_rs_want_to_work");


function send_rs_want_to_work_second() {

    /* Отправляем нам письмо */
    $send = rs_send_form_mail("send_rs_want_to_work_second");

    /* Завершаем выполнение ajax */
    if( $send ){
        $response = [
            'success' => true
        ];
    } else {
        $response = [
            'success' => false
        ];
    }
    echo json_encode($response);
    die();

}
add_action("wp_ajax_rs_want_to_work_second", "send_rs_want_to_work_second");
add_action("wp_ajax_nopriv_rs_want_to_work_second", "send_rs_want_to_work_second");




function rs_send_form_mail($form_type)
{
    $res = "";
    switch ($form_type) {
        case 'rs_want_to_work':
            $company_name = $_POST['company_name'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $about = $_POST['about__tender'];
            $res = "Уведомление с сайта '".get_bloginfo('name')."' <br/><br/>
            Имя:  $name <br/><br/>
            Компания:  $company_name <br/><br/>
            О тендере:  $about <br/><br/>
            Телефон: $phone <br/><br/>";
            break;
        case 'send_rs_want_to_work_second':
            $service = $_POST['service'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $res = "Уведомление с сайта '".get_bloginfo('name')."' <br/><br/>
            Имя:  $name <br/><br/>
            Услуга:  $service <br/><br/>
            Телефон: $phone <br/><br/>";
            break;
        default:
            # code...
            break;
    }
    $emailTo = get_field('email', 22);
    $subject = $_POST['form-title'];
    $headers = "Content-type: text/html; charset=\"utf-8\"";
    $mailBody = $res;
    dd($res);
    return wp_mail($emailTo, $subject, $mailBody, $headers);
}