<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;
use DB;

class CommonModel extends Model
{
    private $table = '';
    private $where = '';
    private $is_transaction = 1;


    public function  __construct(){

    }

    public function beginTransaction(){
        DB::beginTransaction();
    }


    public function rollback(){
        DB::rollback();
    }


    public function commit(){
        DB::commit();
    }


    public function setWhere($where){
        $this->where = $where;
    }

    /**
     *
     * @param $data
     * @param int $auto
     * @return bool
     */
    public function add($data,$auto=1){

        if($this->is_transaction) $this->beginTransaction();

        $restul = false;

        if($auto==1){
            $restul = DB::table($this->table)->insertGetId($data);
        }else{
            $restul = DB::table($this->table)->insert($data);
        }

        if($this->is_transaction){
            if($restul){
                $this->commit();
            }else{
                $this->rollback();
            }
        }

        return $restul;
    }


    /**
     * @param array $data
     * @param array $where
     * @return bool
     */
    public function update($data,$where){

        $this->where = $where;

        if($this->is_transaction) $this->beginTransaction();

        $restul = false;
        $restul = DB::table($this->table)->where($this->where)->update($data);

        if($this->is_transaction){
            if($restul){
                $this->commit();
            }else{
                $this->rollback();
            }
        }

        return $restul;
    }


    /**
     * @param $data
     * @param $where
     * @return bool
     */
    public function delete($data,$where){

        $this->where = $where;

        if($this->is_transaction) $this->beginTransaction();

        $restul = false;
        if($this->where){//如果没有where会将数据全部删除，这里先暂时屏蔽此种情况
            $restul = DB::table($this->table)->where($this->where)->delete();
        }

        if($this->is_transaction){
            if($restul){
                $this->commit();
            }else{
                $this->rollback();
            }
        }

        return $restul;
    }




}
