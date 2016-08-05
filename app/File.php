<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'address_id', 'slug', 'filename', 'name', 'description'
    ];

	/**
     * Uploads a new file to the given path.
     *
     * @param  request $file
     * @param  string $path
     * @param  string $type
     * @return boolean
     */
    public function uploadFile($file, $path, $type = 'pdf'){
    	$destinationPath = storage_path() . $path;
    	$this->filename = md5($file->getClientOriginalName() . microtime()) . '.' . $file->getClientOriginalExtension();
    	if(!$file->move($destinationPath, $this->filename)){
    		return false;
    	}
    	else{
    		return $this->filename;
    	}
    }
}
