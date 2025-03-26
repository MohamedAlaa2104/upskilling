<?php
class Book 
{
    public function __construct(protected string $booktitle, protected string $auther,
    protected int $ISBN,protected int $borrowed,protected int $returned,protected int $totalcount) {
        
    }
   
    // دالة الاستعارة 
    public function borrowBook(): void {
        if($this->totalcount > 0  ){
            
            $this->totalcount--;
            $this->borrowed++;
            
           
            echo " <br> Book borrowed successfully <br>";
        } else {
            echo "Book is not available <br>";
        }
    }
    
   
// دالة الارجاع 
        public function returnBook(): void {
                if($this->totalcount >=0 && $this->borrowed !=0){
                   
                    echo "Book returned successfully <br>";
                    $this->totalcount++;
                    $this->borrowed--;
                    
                }
                else {
                    echo "Book is already returned <br>";
                
                }
                }

//-------------
             public function gettotalcount(){
            return $this->totalcount ;
                }
                public function getborrowed(){
                    return $this->borrowed ;
                }
                public function isavailable(){
                    if ($this->totalcount > 0  ) {
                        echo "the book is available <br> ";
                    }
                    else {
                        echo "the book is not available <br>";
                    }
                }
                public function displayBookDetails(){
            echo "Book Title: ".$this->booktitle."<br>";
            echo "Book auther: ".$this->auther."<br>";
            echo "Book isbn: ".$this->ISBN."<br>";
            echo "Book amount: {$this->gettotalcount()} <br>";
            echo "Borrowed Books amount: {$this->getborrowed()} <br>";
          
         }
        }