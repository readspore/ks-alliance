<?php 

function send_form_with_file() {

    /* Забираем отправленные данные */
    // dd($_POST);
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $title = $_POST['form-name'];
    // $email = $_POST['client_email'];
    // $quest = $_POST['client_quest'];

    $res = "Уведомление с сайта '".get_bloginfo('name')."' <br/><br/>
    Имя:  $name <br/><br/>
    Телефон: $phone <br/><br/>";

    /* Отправляем нам письмо */
    $emailTo = get_field('email', 7);
    $subject = $title;
    $headers = "Content-type: text/html; charset=\"utf-8\"";
    $mailBody = $res;

    if(!empty($_FILES['file-upload']['tmp_name'])){
        //rename the uploaded file
        $file_path = dirname($_FILES['file-upload']['tmp_name']);
        $new_file_uri = $file_path.'/'.$_FILES['file-upload']['name'];
        $moved = move_uploaded_file($_FILES['file-upload']['tmp_name'], $new_file_uri);
        $attachment_file = $moved ? $new_file_uri : $_FILES['file-upload']['tmp_name'];
        $attachments[] = $attachment_file;
    }

if ($attachment_file) {
    $send = wp_mail($emailTo, $subject, $mailBody, $headers, $attachment_file);
    unlink($attachment_file);
} else {
    $send = wp_mail($emailTo, $subject, $mailBody, $headers);
}

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
add_action("wp_ajax_form_with_file", "send_form_with_file");
add_action("wp_ajax_nopriv_form_with_file", "send_form_with_file");
