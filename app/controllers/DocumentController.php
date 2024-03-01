<?php
class DocumentController extends Controller
{
    private $countryData;

    public function __construct(PDO $connection)
    {
        $this->publicMethods = ["countries"];
        $this->countryData = file_get_contents(__DIR__ . '/../documents/country.data.json');
    }

    public function countries()
    {
        $res = new Result();

        $jsonData = json_decode($this->countryData, true);

        $countriesArray = array_map(function ($key) use ($jsonData) {
            $jsonData[$key]['code'] = $key;
            return $jsonData[$key];
        }, array_keys($jsonData));

        $res->success = true;
        $res->message = "información de las ciudades";
        $res->result = $countriesArray;

        echo json_encode($res);
    }
}
