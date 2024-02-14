<?php

// class name to StudlyCaps
class PostsModel {
    public $title = '';

    public $description = '';

    public $image = '';

    public $created_at;

    public CategoryModel $category;

    public function __construct($title = '', $description = '', $image = '', $created_at = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->created_at = $created_at;
    }

    // method`s names to camelCase
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setDesc(string $description)
    {
        $this->description = $description;
    }

    public function setCategory(CategoryModel $cate)
    {
        $this->category = $cate;
    }

    public function getCategory()
    {
        return $this->category;
    }

    // Braces Placement
    public function setImage($img) 
    {
        $this->image = $img; 
    }

    // constant to upper case
    const TIMEZONE = 'UTC';
}