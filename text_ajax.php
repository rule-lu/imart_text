<?php
if ($_POST['scroe1'] != '' && $_POST['scroe2'] != '') {
    if ($_POST['scroe1'] == '0') {
        $return1 = 'love';
    } elseif ($_POST['scroe1'] == '1') {
        $return1 = 'fifteen';
    } elseif ($_POST['scroe1'] == '2') {
        $return1 = 'thirty';
    } elseif ($_POST['scroe1'] == '3') {
        $return1 = 'forty';
    }
    if ($_POST['scroe2'] == '0') {
        $return2 = 'love';
    } elseif ($_POST['scroe2'] == '1') {
        $return2 = 'fifteen';
    } elseif ($_POST['scroe2'] == '2') {
        $return2 = 'thirty';
    } elseif ($_POST['scroe2'] == '3') {
        $return1 = 'forty';
    }
    if ($_POST['scroe1'] == '3' && $_POST['scroe2'] == '3') {
        $all_str = 'duce';
    } else {
        $all_str = $return1 . ' vs ' . $return2;
    }
    echo $all_str;
}
?>
