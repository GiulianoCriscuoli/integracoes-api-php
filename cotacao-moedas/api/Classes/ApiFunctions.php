<?php

class ApiFunctions {

    private function api_endpoint(string $endpoint) {

        return API_URL .'/'.$endpoint;
    }

    public function searchCotation($cotation1, $cotation2) {
        
        $url = $this->api_endpoint('last/'.$cotation1.'-'.$cotation2);

        $client = curl_init($url);

        curl_setopt_array($client, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);

        $response = curl_exec($client);

        curl_close($client);

        if($response === null) {

            die('A API NÃO RETORNOU NENHUM RESULTADO');
        }

        return json_decode($response, true);
    }
}