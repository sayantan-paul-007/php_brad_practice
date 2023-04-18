<?php 
    class User{
        // Below are the properties of class or a sort of attribute
        // Access modifiers:
        //     public - variable can be used anywhere in the entire program
        //     private - only inside class
        //     protected - only inside class and inherited class
      public $name;
      public $email;
      public $pwd;
    //   Constructor is a method that runs when an object is created
    public function __construct($name,$email, $pwd)
    {
        $this -> name = $name;
        $this -> email = $email;
        $this -> pwd =$pwd;
    }
      function set_name($name){
        $this -> name = $name;
      }
      function get_name(){
        return $this -> name;
      }
    }
    //Instanciate a user
    $new_user = new User('Sayantan','sayantan@gmail.com','21362178');
    $new_user_2 = new User('Shrijan','shrijan@gmail.com','2172319789');
   echo $new_user ->name . '<br>' . $new_user_2 -> email;
//    Inheritance
class Employees extends User{
    public $title;
   public function __construct($name, $email, $pwd,$title)
   {
     parent::__construct($name, $email,$pwd);
     $this->title = $title;
   }
   public function get_title(){
        return $this->title;
   }
}
$employee1 = new Employees('Maya', 'maya@gmail.com', '723687623867','BDO');
echo $employee1->get_title();
?>