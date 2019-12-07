<?php


namespace App\CustomClass;

use App\Download;

class DownloadData
{

    private $id;
    private $download_data;

    function __construct($download_id)
    {
        $download = Download::findOrFail($download_id);
        $this->id = $download->id;
        $this->setDownloadData($download);
    }

    /**
     * @return mixed
     */
    public function getDownloadData()
    {
        $this->download_data['photo_url'] = Path::$domain_url . 'upload/pdf/pdf_photo/' . $this->download_data['photo'];

        $this->download_data['pdf_url'] = Path::$domain_url . 'upload/pdf/' . $this->download_data['pdf'];
        return $this->download_data;
    }

    /**
     * @param mixed $blog_data
     */
    private function setDownloadData($download_data)
    {
        $this->download_data = $download_data;
    }





}
