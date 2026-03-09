<?php
    $file=fopen("example.txt","w");

    //r-read, w-write, a-append
    //x-create a new file, r+- read and write

    $text = "Hello, this is my first PHP file";
    fwrite($file, $text);

    $append_text = "\nThis line was added later.";
    fwrite($file, $append_text);

    //$file = fopen("example.txt", "r");
    //echo fread($file, filesize("example.txt"));

    //while(!feof($file)){
    //    echo fgets($file)."<br>";

    //}

    //rename a file
    //rename("example.txt", "newfile.txt");
    //echo "file renamed successfully!";

    //fopen() - open or create file
    //fwrite() - write data
    //fread() - read file
    //fgets() - read line
    //fclose() - close file
    //rename() - rename file
    //unlink() - delete file
    //file_exists() - check if file exists 

    fclose($file);
?>