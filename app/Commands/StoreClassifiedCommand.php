<?php

namespace App\Commands;

use App\Commands\Command;
//use Illuminate\Contracts\Bus\SelfHandling;
use App\Classified;

class StoreClassifiedCommand extends Command  {
    public $title;
    public $category_id;
    public $description;
    public $main_image;
    public $price;
    public $condition;
    public $location;
    public $email;
    public $phone;
    public $owner_id;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($title, $category_id, $description, $main_image, $price, $condition, $location, $email, $phone, $owner_id)
    {
        $this->title = $title;
        $this->category_id = $category_id;
        $this->description = $description;
        $this->main_image = $main_image;
        $this->price = $price;
        $this->condition = $condition;
        $this->location = $location;
        $this->email = $email;
        $this->phone = $phone;
        $this->owner_id = $owner_id;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {     
        return Classified::create([
            'title' => $this->title,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'main_image' => $this->main_image,
            'price' => $this->price,
            'condition' => $this->condition,
            'location' => $this->location,
            'email' => $this->email,
            'phone' => $this->phone,
            'owner_id' => $this->owner_id,
        ]);
    }
}

