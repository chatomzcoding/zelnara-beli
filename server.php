<?php 

function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
}

function link_server()
{
    $url    = 'http://localhost/chatomz/company/api/';
    // $url    = 'https://sistem.zelnara.com/api/';
    return $url;
}

function link_folder()
{
    $url    = 'http://localhost/chatomz/company/';
    // $url    = 'https://sistem.zelnara.com/';
    return $url;
}

function linkgambar($folder,$field)
{
    return link_folder().$folder.'/'.$field;
}

function getdata($url)
{
    $url    = link_server().$url;
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "$url",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return json_decode($response);
}
$listkategori = getdata('kategori?label=produk&token=$2y$10$TPl2v.H1BlYpim.WIgxpa.KHjlXdhVWREbsP1NWs21k46Jn9JEskW');
$listusaha = getdata('usaha?token=$2y$10$TPl2v.H1BlYpim.WIgxpa.KHjlXdhVWREbsP1NWs21k46Jn9JEskW');
$produklimit8 = getdata('produk?token=$2y$10$TPl2v.H1BlYpim.WIgxpa.KHjlXdhVWREbsP1NWs21k46Jn9JEskW&limit=8');



