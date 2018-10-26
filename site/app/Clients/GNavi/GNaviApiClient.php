<?php
/**
 * Created by PhpStorm.
 * User: kirin-dev31
 * Date: 2018/10/26
 * Time: 14:15
 */

namespace App\Clients\Gnavi;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Illuminate\Log;

class GNaviApiClient
{
    /**
     * @var Client
     */
    private $client;
    /**
     * @var mixed
     */
    private $api_key;

    private $master_param;
    /**
     * GNaviApiClient constructor.
     * @param Client $client
     */
    public function __construct()
    {
        $this->client = new Client([RequestOptions::VERIFY => false]);
        $this->api_key = env('GNAVI_API_KEY');
        $this->master_param = [
            'keyid' => $this->api_key,
            'lang'  => 'ja'
        ];
    }

    /**
     * レストラン取得
     * @param $data
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function getRestaurant($data)
    {
        $url = env('GNAVI_RESTRUNT_LIST_URL');

        $res = $this->client->request('POST', $url, $data);
        return $res;
    }

    /**
     * エリア取得
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function getAreaMaster()
    {
        $url = env('GNAVI_AREA_MASTER');

        return $this->client->request('GET', $url, [
            'verify' => false,
            'form_params' => $this->master_param]);
    }

    /**
     * 都道府県取得
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function getPrefMaster()
    {
        $url = env('FNAVI_PREF_MASTER');
        return $this->client->request('GET', $url, [
            'verify' => false,
            'form_params' => $this->master_param]);
    }

    /**
     *
     */
    private function createGetParameter($data)
    {
        $param = '?';
       foreach ($data as $key => $value) {
           $param .=
       }
    }
}