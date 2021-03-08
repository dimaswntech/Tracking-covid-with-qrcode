<?php 

    function ambil_url($url){
        $client=curl_init($url);
        curl_setopt($client,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($client,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response=curl_exec($client);
        return json_decode($response);
    }

    //AMBIL DATA POSITIF GLOBAL
    $url_global_positif="https://api.kawalcorona.com/positif/";
    $result=ambil_url($url_global_positif);
    $jumlah_positif=$result->value;

    //AMBIL DATA SEMBUH GLOBAL
    $url_global_sembuh="https://api.kawalcorona.com/sembuh/";
    $result=ambil_url($url_global_sembuh);
    $jumlah_sembuh=$result->value;

    //AMBIL DATA MENINGGAL GLOBAL
    $url_global_meninggal="https://api.kawalcorona.com/meninggal/";
    $result=ambil_url($url_global_meninggal);
    $jumlah_meninggal=$result->value;

    $url_indo="https://api.kawalcorona.com/indonesia/";
    $result=ambil_url($url_indo);
    $positif=$result[0]->positif;
    $meninggal=$result[0]->meninggal;
    $sembuh=$result[0]->sembuh;
    
    $url_provinsi="https://api.kawalcorona.com/indonesia/provinsi/";
    $data_prov=ambil_url($url_provinsi);
?>