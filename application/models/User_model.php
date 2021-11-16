<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
  
   class User_model extends CI_model{
 
     function create($fromArray){
      
       $this -> db-> insert("users",$fromArray);//insert name and email
     }

     function list_all(){
       //get all users
       return $this -> db -> get("users") ->result_Array();
     }
     
     function get_user($user_id){
         $this -> db -> where("user_id",$user_id);
         $user = $this -> db -> get("users") -> row_array();
         return $user;
     }

     function delete_user($user_id){
        $this -> db -> where("user_id",$user_id);
        $this -> db -> delete("users");
     }

     function update_user($user_id,$fromArray){
       $this -> db -> where("user_id",$user_id);
       $this -> db -> update("users",$fromArray);//update user
     }
   }
 
?>