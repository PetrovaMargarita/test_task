<?php
//получаем данные с формы
foreach ($_POST['form'] as $input ) {
    $data[$input['name']] = $input['value'];
}
$data['arr'] = $_POST['arr'];
print_r(json_encode($data));

?>