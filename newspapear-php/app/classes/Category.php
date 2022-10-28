<?php


namespace App\classes;


class Category

{
    public $categories;
    public function getCategoryInfo($id)
    {
        $this->categories= $this->getAllCategory();
        foreach ($this->categories as $category)
        {
            if ($category['id']==$id)
            {
                return $category;
            }
        }
    }
    public function getAllCategory ()
    {

            return[
                0=> [
                    'id'    => 1,
                    'name'  =>'বিশেষ সংবাদ',
                ],
                1=> [
                    'id'    => 2,
                    'name'  => 'সর্বশেষ',
                ],
                2=> [
                    'id'    => 3,
                    'name'  => 'রাজনীতি',
                ],
                3=> [
                    'id'    => 4,
                    'name'  => 'জীবনযাপন',
                ],
                4=> [
                    'id'    => 5,
                    'name'  => 'বিনোদন',

                ],
                5=> [
                    'id'    => 6,
                    'name'  => 'খেলা',
                ],
                6=> [
                    'id'    => 7,
                    'name'  => 'বাংলাদেশ',
                ],
                7=> [
                    'id'    => 8,
                    'name'  => 'চাকরি',
                ],
            ];
    }

}