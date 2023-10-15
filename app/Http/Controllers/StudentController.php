<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home()
    {
        $students = Student::paginate(3);
        return view('student.leyouts', compact('students'));
    }

    public function index()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('etudiant')
            ->with('success', 'Nouvel étudiant ajouté avec succès.');
    }

    public function show(Student $student)
    {
        return view('student.show', [
            'student' => $student
        ]);
    }

    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit')->with('student', $student);
    }

    public function editstore(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
    
        $data = $request->validate([
            // Spécifiez ici les règles de validation pour les champs du formulaire
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "date_naissance"=>"required",
        ]);
    
        $student->fill($data);
        $student->save();
    
        return redirect()->route('etudiant')->with('success', 'Étudiant mis à jour avec succès.');
    }
   

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
    
        $students = Student::where('nom', 'like', '%'.$searchQuery.'%')
                   ->orWhere('prenom', 'like', '%'.$searchQuery.'%')
                   ->orWhere('email', 'like', '%'.$searchQuery.'%')
                   ->orWhere('phone', 'like', '%'.$searchQuery.'%')
                   ->orWhere('date_naissance', 'like', '%'.$searchQuery.'%')
                   ->paginate(3);
    
        return view('student.leyouts', compact('students'));
    }
    public function delete($id)
    {
        $student = Student::find($id);
    
        return view('etudiant', compact('student'));
    }
    
    public function deletestore(Request $request ,$id)
    {
        $student = Student::find($id);
    
        if ($student) {
            $student->delete();
            // Rediriger vers une page appropriée après la suppression
            return redirect()->route('etudiant')->with('success', 'Étudiant supprimé avec succès.');
        } else {
            // Gérer le cas où l'étudiant n'est pas trouvé
            return redirect()->route('etudiant')->with('error', 'Étudiant introuvable.');
        }
    }
}