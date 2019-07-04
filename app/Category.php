<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	/**
	 * @var  string
	 */
	protected $table = 'categories';

	protected $casts = [
																																		'created_at' => 'datetime',
												'updated_at' => 'datetime',
						];
 
																						}
