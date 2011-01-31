<?php
namespace Ky\Core\Store;

/**
 *  class pdo mysql interface
 */

class PdoMysql
{
    private $link   = null;
    public  $query  = null;

    public function connect($host,$user,$pass,$dbname)
    {
        $dsn = 'mysql:dbname='.$dbname.';host='.$host;

        try{
            $this->$link = new \PDO($dsn,$user,$pass);
        }catch(PDOException $e){
            die('Connection failed: ' . $host . ':' . $user . ':' . $pass . ':' . $dbname . ':' . $e->getMessage() );
        }
    }

    public function select($sql,$data=array(),$filter=null)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll();
    }

    public function insert($sql,$data)
    {
         
    }

    public function update($sql,$where,$data)
    {
         
    }

    public function delete($sql,$data)
    {
         
    }

    public function replace()
    {
         
    }

    public function query($sql)
    {
        $this->query = $this->link->query($sql);
        return $this->query;
    }

    public function getOneRow($sql)
    {
        return $this->query($sql);
    }

    public function getRows($sql)
    {
        $ret = array();
        while($ret[] = $this->link->query($sql));
        array_pop($ret);
        return $ret;
    }

    public function exec($sql)
    {
        return $this->link->exec($sql);
    }
}