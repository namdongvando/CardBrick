<?php
namespace CardBrick;

class doithecaoonline
{
    public $telco; //String
    public $amount; //int
    public $serial; //String
    public $code; //String
    static private $partner_key; //String
    public $transaction_id; //String
    public $sign; //String
    public $is_fast; //int

    const linkHost = "https://doithecaoonline.com";
    public function __construct($item = null)
    {
        $this->telco = $item["telco"] ?? null;
        $this->amount = $item["amount"] ?? null;
        $this->serial = $item["serial"] ?? null;
        $this->code = $item["code"] ?? null;
        $this->transaction_id = $item["transaction_id"] ?? null;
        $this->is_fast = $item["is_fast"] ?? null;
    }

    public function sign()
    {
        return md5(self::$partner_key . $this->code . $this->serial);
    }

    public static function SetPartnerKey($key)
    {
        self::$partner_key = $key;
    }

    public function PartnerAddCard()
    {
        $url = self::linkHost . "/api/partner/add-card";
        $http = (new HttpClient())->Post(
            $url,
            [
                "telco" => $this->telco,
                "amount" => $this->amount,
                "serial" => $this->serial,
                "code" => $this->code,
                "partner_key" => self::$partner_key,
                "transaction_id" => $this->transaction_id,
                "sign" => $this->sign(),
                "is_fast" => $this->is_fast,
            ]
        );
        return $http;

    }

    public function PartnerCancelCard($transaction_id = null)
    {
        $transaction_id = $transaction_id ?? $this->transaction_id;
        $url = self::linkHost . "/api/partner/add-card";
        $http = (new HttpClient())->Post(
            $url,
            [

                "transaction_id" => $transaction_id ?? null,
                "partner_key" => self::$partner_key,

            ]
        );
        return $http;
    }

    public function PartnerCheckCard($transaction_id = null)
    {
        $transaction_id = $transaction_id ?? $this->transaction_id;
        $url = self::linkHost . "/api/partner/check-card";
        $http = (new HttpClient())->Post(
            $url,
            [
                "transaction_id" => $transaction_id ?? null,
                "partner_key" => self::$partner_key,
            ]
        );
        return $http;
    }

    public function GetPartner()
    {
        return self::$partner_key;
    }

    public function GetFeess()
    {
        $url = self::linkHost . "/api/partner/getfee";
        $http = (new HttpClient())->Post(
            $url,
            [
                "partner_key" => self::$partner_key,
            ]
        );
        return $http;
    }

}


?>