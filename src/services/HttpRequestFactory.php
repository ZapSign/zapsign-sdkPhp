<?php

namespace Zapsign\Sdk\services;

class HttpRequestFactory
{
    /**
     * @throws \Exception
     */
    public function getRequest(string $uri): bool|string
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
        ]);

        return $this->responseReturn($curl);
    }

    /**
     * @throws \Exception
     */
    public function postRequest(string $uri, string $body): bool|string
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ],
        ]);

        return $this->responseReturn($curl);
    }

    /**
     * @throws \Exception
     */
    public function deleteRequest(string $uri): bool|string
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_POSTFIELDS => "",
        ]);

        return $this->responseReturn($curl);
    }

    /**
     * @param \CurlHandle|false $curl
     * @return bool|string
     * @throws \Exception
     */
    public function responseReturn(\CurlHandle|false $curl): string|bool
    {
        $response = curl_exec($curl);
        $info = curl_getinfo($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            throw new \Exception("cURL Error #:" . $err);
        } else if ($info["http_code"] !== 200) {
            throw new \Exception("error: " . $info["http_code"] . " - mensage: " . $response);
        } else {
            return $response;
        }
    }
}