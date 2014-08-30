<?
/*
 класс для ведения лог-файла
*/
class LogClass{
    private $fileName;
    private $fileSource;
    function __construct($fileName){
        if( strlen($fileName) == 0 ) $fileName="LogClassFile.txt";
        
        $this->fileName = $fileName;
        $this->open();
        
    }
    function __destruct(){
        $this->close();
    }
    
    function open(){
        $this->fileSource = fopen($this->fileName,"a");        
        if (!$this->fileSource) die("Cann't open {$this->fileName}"); 
    }
    
    function close(){
        fclose($this->fileSource);
    }
    
    function write($message = "", $type = "log"){
         $dt = new DateTime();
         fputs($this->fileSource, $dt->format('Y-m-d H:i:s').': '.$type.': '.$message."\n"); 
    }
    
    function log($message = ""){
        $this->write($message,"Log");
    }
    
    function debug($message = ""){
        $this->write($message,"Debug");
    }
    
    function error($message = ""){
        $this->write($message,"Error");
    }
    
    function stop($message = ""){
        $this->error($message);
        $this->close();
        die;
    }
    
}
?>