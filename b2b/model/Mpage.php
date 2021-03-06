<?php
namespace Ky\Model;

use Ky\Core\Core\Db;
use Ky\Core\Core\Sql;
use Ky\Core\Core\Page;

class Mpage
{
    private static $table = 'company_page';
    public static function add($data)
    {
        $sql = "insert into company_page (". join(',',array_keys($data)) . ",ts) values(" . Db::addValues($data). ",".time().")";
        Db::query($sql);
    }
    
    public static function lists($columns="*",$where=null,$data=array(),$page=false)
    {
        $sql  = 'select ' . $columns . ' from ' . self::$table . ' ' ;
        $where  = Sql::where($where,$data);
        
        $page = self::page($where,$page);    
         
        $sql .= $where . ' ' . $page['sql'];
        $data = Db::getRows($sql);       

        return array(
            'data'  => $data,
            'page'  => $page['data'],
        );
    }
    
    private static function page($where,$page)
    {
        if(!$page) return array(
            'sql'   => '',
            'data'  => ''
        );
        
        $sql = ' limit ' . ($page['curPage'] - 1)*$page['numPerPage'] . ',' . $page['numPerPage'];

        $page['nums'] = self::getQueryNums($where); 
        $page = Page::show($page);

        return array(
            'sql'   => $sql,
            'data'  => $page
        );
    }

    public static function getQueryNums($where)
    {
        $sql    = 'select count(1) as num from ' . self::$table . ' ' . $where;
        $data   = Db::getRow($sql);
        return $data['num'];
    }
    
    public static function update($data)
    {
        $id = $data['id'];
        unset($data['id']);
    
        $sql = 'update company_page set ' . Db::updateValues($data) . ' where id=' . $id;
        Db::query($sql);
    }
    
    public static function detail($id)
    {
        $sql = 'select * from company_page where id='.$id;
        return Db::getRow($sql);
    }

    public static function getOption()
    {
        $data = self::getOptionData();
        return self::formatOption($data);
    }

    public static function getOPtionData()
    {
        $sql = 'select id,name from company_page where corpid='.$_SESSION['id'];
        return Db::getRows($sql);
    }
    private static function formatOption($data)
    {
        if(empty($data)) return '';
        $ret = '';
        
        foreach($data as $option){
            $ret .= '<option value="' .$option['id']. '"';
            $ret .= ' >'.$option['name'].'</option>';
        }
        
        return $ret;
    }
    
    public static function delete($id)
    {
        $sql = "delete from company_page where id=".$id;
        return Db::query($sql);
    }
}
