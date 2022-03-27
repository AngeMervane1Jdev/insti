<?php

use App\Models\Field;
use App\Models\Tfe;
use Illuminate\Support\Facades\Auth;

if(!function_exists("Fields")){
            function Fields(){
             return Field::all();
      }
    }
     if(!function_exists("has_tfe")){
            function has_tfe(){
            $tfe=Tfe::where("user_id",'=',Auth::user()->id)->first();
            return $tfe;
       }
     }
?>