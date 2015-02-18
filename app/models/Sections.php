<?php

class Sections extends Eloquent {

	protected $fillable = ['name', 'slug_url', 'type', 'menu', 'menu_order', 'published'];
 
}