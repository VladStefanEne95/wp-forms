<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AddFilterController extends Controller
{
    public function addForm(Request $request)
    {
        $id = DB::table('proiecte')->where('titlu', '=', $request->id_proiect)->value('id');

         DB::table('formulare')->insert(
         ['body' => $request->sendObject, 'id_proiect' => $id, 'titlu' => $request->titlu2,'created_at' => new \DateTime(),
        'updated_at' => new \DateTime()]
         );
    $date = \DB::table('proiecte')->pluck('titlu');
    return view('adauga-formular',['titles'=>$date]);
  }

    public function addProject(Request $request)
    {
        DB::table('proiecte')->insert(
        ['body' => $request->body, 'titlu' => $request->titlu,'created_at' => new \DateTime(),
       'updated_at' => new \DateTime()]
        );
        return view('adauga-proiect');
    }

    public function upload(Request $request) {

        $uploadDir = 'uploads';

        if (!empty($_FILES)) {
            $tmpFile = $_FILES['file']['tmp_name'];
            $filename = $uploadDir.'/'.time().'-'. $_FILES['file']['name'];
            move_uploaded_file($tmpFile, $filename);
        }

      $success_message = array( 'success' => 200,
                        'filename' => $pubpath.$foldername.'/'.$filename,
                        );
     return json_encode($success_message);



    }
}
