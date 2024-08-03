<?php 

const DBNAME        = "php2_nguyenthanhtrung_db";
const DBUSER        = "root";
const DBPASSWORD    = "";
const DBHOST        = "127.0.0.1";
const DBCHARSET     = "utf8mb4";

const BASE_URL = "http://php2.gg/nguyen-thanh-trung-base/";

function route ($url) {return BASE_URL.$url;}

function flash($key,$msg,$route)  {
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:'.BASE_URL.$route.'?msg='.$key);die;
}