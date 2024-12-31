<?php 

    function getFileContent($filePath)
    {
        if(!file_exists($filePath))
        {
            return [];
        }
        return json_decode(file_get_contents($filePath));
    }

    function putFileContent($filePath, $data)
    {
        file_put_contents($filePath, json_encode($data, JSON_PRETTY_PRINT));
    }



















?>