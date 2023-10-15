<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Course;
use Illuminate\Pagination\LengthAwarePaginator;
class CourseController extends Controller
{
    public function homecour()
    {
        $courdata = Course::paginate(1);
        return view('course.index', compact('courdata'));
    }

    public function add()
    {
        return view('course.ajoute');
    }

    public function addstore(Request $request)
    {
        $courses = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
        ]);

        $data = new Course();
        $data->Title = $request->input('Title');
        $data->Description = $request->input('Description');
        $data->save();

        return redirect()->route('home')->with('success', 'Les données sont enregistrées avec succès');
    }

    public function editcour($id)
    {
        $courses = Course::find($id);
        return view('course.edit', compact('courses'));
    }

    public function courpost(Request $request, $id)
    {
         $request->validate([
            'Title' => 'required',
            'Description' => 'required',
        ]);

        $course = Course::find($id);

        if (!$course) {
            return redirect()->route('home')->with('error', 'Cours non trouvé');
        }

        $course->Title = $request->input('Title');
        $course->Description = $request->input('Description');
        $course->save();

        return redirect()->route('home')->with('success', 'Modification du cours effectuée avec succès');
    }
    public function viewcour()
    {
        // Récupérer toutes les instances de la classe Course à partir de la base de données
        $course = Course::all();
    
        // Retourner la vue 'course.show' en transmettant les données de $course à la vue
        return view('course.show', ['course' => $course]);
    }
    public function del($id)
    {
        $course = Course::find($id);
        if(!$course){

            abort('404');
        }
        $course->delete();
        return view('course.index', compact('course'));
    }
}