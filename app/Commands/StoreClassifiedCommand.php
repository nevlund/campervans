<?php

namespace App\Commands;

use App\Commands\Command;
//use Illuminate\Contracts\Bus\SelfHandling;
use App\Classified;

class StoreClassifiedCommand extends Command  {
    public $title;
    public $category_id;
    public $description;
    public $image;
    public $price;
    public $condition;
    public $location;
    public $email;
    public $phone;
    public $user_id;

    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($title, $category_id, $description, $image, $price, $condition, $location, $email, $phone, $user_id)
    {
        $this->title = $title;
        $this->category_id = $category_id;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
        $this->condition = $condition;
        $this->location = $location;
        $this->email = $email;
        $this->phone = $phone;
        $this->user_id = $user_id;
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
            'image' => $this->image,
            'price' => $this->price,
            'condition' => $this->condition,
            'location' => $this->location,
            'email' => $this->email,
            'phone' => $this->phone,
            'id' => $this->user_id,
        ]);
    }
}

