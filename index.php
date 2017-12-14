<?php
  Class demo
  {
    //private data member that hold object of class
    private static $instance ;
    public function myfun()
    {
      if(!isset(self::$instance))
      {
        self::$instance = new self();
      }
      return self::$instance;
    } //end of funnction myfun 
  } // end of demo class
  demo1 = demo::myfun();
  demo2 = demo::myfun();
  // demo 1 and demo 2 are variable's that are pointing to same object:
?>
