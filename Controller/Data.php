<?php


class Data
{
    private $data = null;
    public function __construct(string $filePath){
        $this->data = $this->getJsonData($filePath);
    }

    private function getJsonData (string $filePath) :array {
    // Check the existence of file
    if (file_exists($filePath)) {
        // Open the file for reading
        $handle = fopen($filePath, "r") or die("ERROR: Cannot open the" . $filePath);
        /* Some code to be executed */
        $content = fread($handle, filesize($filePath));
        // Closing the file handle
        fclose($handle);
        return json_decode($content);
    } else {
        die( "ERROR:" . $filePath . "does not exist.");
    }
    }


}