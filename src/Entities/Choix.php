


<?php


class Choix{
     
    private int $id;
    private string $name ;
    private string $img_path;
    private string $img_alt;


public function __construct(int $id , string $name , string $img_path, string $img_alt)
{
     $this->id = $id;
     $this->name = $name;
     $this->img_path = $img_path;
     $this->img_alt = $img_alt;
}



}