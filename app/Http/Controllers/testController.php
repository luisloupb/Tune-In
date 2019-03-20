<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

class testController extends Controller
{
    function NavDir(Request $path) {
    // $dirList = scandir($path->dir);
    // for ($i=0; $i < sizeof($dirList); $i++) {
    //     try {
    //         if (opendir($path.$dirList[$i])) {
    //             echo '<button onclick="NavDir()";>'.$dirList[$i].'</button> <br>';
                return redirect('home');
         //    }
             
         // } catch (Exception $e) {
            // echo $dirList[$i]." no es directorio";
    //      }   
    // }

	}
}
