<?php
include_once __DIR__ . '/../../vendor/SimpleOrm.class.php';

class Annonces extends SimpleOrm
{
    public $id;
    public $titre;
    public $message;
    public $image;
}
