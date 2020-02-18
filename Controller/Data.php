<?php


class Data
{
    private $data;
    public function __construct(string $filePath){
         $this->data = $this->getJsonData($filePath);
    }
    public function getData()
    {
        return $this->data;
    }
    private function getJsonData ( $filePath)  {
    // Check the existence of file
    if (file_exists($filePath)) {
        // Open the file for reading
        $handle = fopen($filePath, 'rb') or die('ERROR: Cannot open the' . $filePath);
        /* Some code to be executed */
        $content = fread($handle, filesize($filePath));
        // Closing the file handle
        fclose($handle);
        return json_decode($content);
    } else {
        die( 'ERROR:' . $filePath . 'does not exist.');
    }
    }


}