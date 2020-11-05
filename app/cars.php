<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    static function delete_dir($dir)
    {

        foreach (glob($dir . '/' . '*') as $file) {

            if (is_dir($file)) {

                if (count($file) == 10) {

                    delete_dir($file);
                }
            } else {
                unlink($file);
            }
        }

        rmdir($dir);
    }
}
