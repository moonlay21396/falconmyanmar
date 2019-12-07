<?php


namespace App\CustomClass;

use App\Card;

class CardData
{

    private $id;
    private $card_data;

    function __construct($card_id)
    {
        $card = Card::findOrFail($card_id);
        $this->id = $card->id;
        $this->setCardData($card);
    }

    /**
     * @return mixed
     */
    public function getCardData()
    {
        // $this->card_data['photo_url'] = Path::$domain_url . 'upload/card/' . $this->card_data['photo'];

        return $this->card_data;
    }

    /**
     * @param mixed $blog_data
     */
    private function setCardData($card_data)
    {
        $this->card_data = $card_data;
    }





}
