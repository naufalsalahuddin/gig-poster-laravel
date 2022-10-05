<?php
    namespace App\Models;
    
    class listing{
        public static function all(){
            return[
                [
                    'id' => "01",
                    'title' => "Job 01",
                    'desc' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia unde sequi, aperiam at autem quae fugiat dolor in corrupti, a qui facere id voluptas obcaecati dignissimos. Voluptatum quos quod voluptate!"
                ],
                [
                    'id' => "02",
                    'title' => "Job 02",
                    'desc' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia unde sequi, aperiam at autem quae fugiat dolor in corrupti, a qui facere id voluptas obcaecati dignissimos. Voluptatum quos quod voluptate!"
                ],
                [
                    'id' => "03",
                    'title' => "Job 03",
                    'desc' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia unde sequi, aperiam at autem quae fugiat dolor in corrupti, a qui facere id voluptas obcaecati dignissimos. Voluptatum quos quod voluptate!"
                ]
                ];
        }
        public static function find($id){
            $listings = self::all();
            foreach($listings as $listing):
                if($listing['id']==$id){
                 return $listing;
                }
            endforeach;
        }
    }