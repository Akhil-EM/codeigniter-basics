<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class User extends CI_Controller{

    function index(){
      $this -> load -> model("User_model");
      $users = $this -> User_model -> list_all(); 
      
      $data=array();
      $data["users"] = $users;
      $this -> load -> view("List_users",$data);


    }

    public function create(){
      $this -> load -> model("User_model");
      //add user
      $this -> form_validation -> set_rules("name","Name","required");
      $this -> form_validation -> set_rules("email","Email","required");
      
      if($this -> form_validation -> run() == false){
        $this -> load -> view("Add_user");
      }else{
         //save user to db
         $formArray = array();
         $formArray["name"] = $this -> input -> post("name");
         $formArray["email"] = $this -> input -> post("email");
         $formArray["created_at"] = date("Y-m-d");

         $this -> User_model ->create($formArray);
         $this -> session -> set_flashdata("success");
         $this -> session -> set_flashdata("success","Record added successfully");

         redirect(base_url());
      }

      
    }
    


    public function edit($userId){
      $this -> load -> model("User_model");
      $user = $this -> User_model ->get_user($userId);
      $data =array();
      $data["user"] = $user;
    
      $this -> form_validation -> set_rules("name","Name","required");
      $this -> form_validation -> set_rules("email","Email","required");

      if($this -> form_validation -> run() == false){
        $this -> load -> view("Edit_user",$data);
      }else{
         //update user
         $this -> load -> view("Edit_user",$data);
         
         $formArray = array();
         $formArray["name"] = $this -> input -> post("name");
         $formArray["email"] = $this -> input -> post("email");
         

         $this -> User_model -> update_user($userId,$formArray);
         $this -> session -> set_flashdata("success","Record edited successfully");

         redirect(base_url());
      }

      // $this -> load -> view("Edit_user",$data);
    }
    
    public  function delete($userID){
      $this -> load -> model("User_model");
      $this -> User_model -> delete_user($userID);
      redirect(base_url());
    }

  }

 
?>