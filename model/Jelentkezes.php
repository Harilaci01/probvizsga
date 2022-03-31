<?php 

class Jelentkezes{
    private $id;
    private $nev;
    private $email;
    private $szuletes;
    private $nem;

    public function set_jelentkezes($conn){
        //adatbázisból lekérdezzük
        $sql="SELECT rajtszam, nev,email, szuletes_ido, nem FROM jelentkezes ";
        $result=$conn->query($sql);

        if($result->num_rows > 0){
            $row=$result->fetch_assoc();
            $this->id=$row['rajtszam'];
            $this->nev=$row['nev'];
            $this->email=$row['email'];
            $this->szuletes=$row['szuletes_ido'];
            $this->nem=$row['nem'];           
            return $row;
        }
    }
    public function get_nev(){
        return $this->nev;
    }    
    public function get_email(){
        return $this->email;
    }   
    public function get_szuletes(){
        return $this->szuletes;
    }   
    public function get_nem(){
        return $this->nem;
    }

      public function get_id(){        
        
        return $this->id;            
        
    }
    public function jelentkezoklista($conn){
        $lista=array();
        $sql="SELECT rajtszam FROM jelentkezes";
        if($result=$conn->query($sql)){
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $lista[]=$row['rajtszam'];
                }
            }
        }
        return $lista;
    }
    
}

?>