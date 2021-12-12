<?php 

class OnlineStore 
{
  public $author;
  public $Productname;
  public $discount;
  public $price;
    public function getProduct()
  {
    return "Автор:".$this->author."<br>Название:".$this->Productname."<br>";
  }
  public function getPrice()
  {
    $this->price=(100 - $this->discount) * $this->price / 100;
    return "Цена:".$this->price."<br><br>";
  }
public  function __construct(string $author,  string $Productname, float $discount, float $price)
    {
        $this -> author = $author;
        $this -> Productname = $Productname;
        $this -> discount = $discount;
        $this -> price = $price;
    }
}

$tovar = new OnlineStore("Дмитрий.Ф.М.", "Кувшин", 50, 5000); 
echo $tovar->getProduct();
echo $tovar->getPrice();



  class MusicStore extends OnlineStore{
    private $playTime;
      public  function __construct(string $author, string $Productname, float $discount, float $price, float $playTime)
      {
          parent :: __construct($author, $Productname,$discount,$price);
          $this -> playTime = $playTime;
      }  
      public  function getProduct()
      {
          $author = parent:: getProduct();
          $Productname = parent:: getProduct();
          $discount = parent:: getProduct();
          $price = parent:: getProduct();
          $playTime = $this->$playTime;
          return "Автор:".$this->author."<br>Название:".$this->Productname."<br>Стоимость:".$this->price."<br>Время воспроизведения:".$this->playTime."c<br><br>"; 
      }     
  }
$musictovar = new MusicStore("Joji","BAllads1",15,2250,4455);
echo $musictovar->getProduct();
echo $musictovar->getPrice();

class BookStore extends OnlineStore{
    private $PoblishinHouse;
      public  function __construct(string $author, string $Productname, string $PoblishinHouse, float $discount, float $price)
      {
          parent :: __construct($author, $Productname,$discount,$price);
          $this -> PoblishinHouse = $PoblishinHouse;
      }  
      public  function getProduct()
      {
          $author = parent:: getProduct();
          $Productname = parent:: getProduct();
          $discount = parent:: getProduct();
          $price = parent:: getProduct();
          $PoblishinHouse = $this->$PoblishinHouse;
          return "Автор:".$this->author."<br>Название:".$this->Productname."<br>Издатель:".$this->PoblishinHouse."<br>Стоимость:".$this->price."<br><br>"; 
      }     
  }
$booktovar = new BookStore("Артур Будикин","ад" ,"book",15,550);
echo $booktovar->getProduct();
echo $booktovar->getPrice();

?>
