<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 13.10
 */

namespace vestervang\rsApi\RS3;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use vestervang\rsApi\RS3\GE\Item;

class GE
{

    protected $endpoints = [
        'details' => 'http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=%d',
        'price'   => 'http://services.runescape.com/m=itemdb_rs/api/graph/%d.json'
    ];

    protected $guzzle;

    public function __construct()
    {
        $this->guzzle = new Guzzle([
            'headers' => [
                'User-Agent' => 'Rs api'
            ]
        ]);
    }


    public function getItemById($id)
    {
        $detailsResponse = $this->guzzle->request('GET', sprintf($this->endpoints['details'], $id));
        $priceResponse   = $this->guzzle->request('GET', sprintf($this->endpoints['price'], $id));

        if ($detailsResponse->getStatusCode() != 200) {
            throw new RequestException();
        }

        if ($priceResponse->getStatusCode() != 200) {
            throw new RequestException();
        }

        $decodedDetailsResponse = json_decode($detailsResponse->getBody()->getContents());
        $decodedPriceResponse   = json_decode($priceResponse->getBody()->getContents());
        $priceHistory           = (array)$decodedPriceResponse->daily;
        $price                  = end($priceHistory);

        $item = new Item(
            $decodedDetailsResponse->item->icon,
            $decodedDetailsResponse->item->icon_large,
            $decodedDetailsResponse->item->id,
            $decodedDetailsResponse->item->type,
            $decodedDetailsResponse->item->typeIcon,
            $decodedDetailsResponse->item->name,
            $price,
            $decodedPriceResponse
        );

        return $item;
    }

    public function getItemByName($name)
    {

    }
}