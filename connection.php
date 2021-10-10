<?php
$conn = mysqli_connect('127.0.0.1','root','','sekolah1');

if(mysqli_connect_errno()){
    printf ('Koneksi gagal : ' .mysqli_connect_errno());
    exit();
}