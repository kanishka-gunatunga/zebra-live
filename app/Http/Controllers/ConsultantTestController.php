<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use File;
use Mail;
use PDF;
use Image;
use Redirect;
use Session;
use Carbon\Carbon;

use App\Models\User;
use App\Models\Questions;
use App\Models\ChildQuestions;

use App\Models\DimensionQuestions;
use App\Models\ConsultantAnswers;
use App\Models\SkillTestQuestionAnswers;
use App\Models\CustomerDetails;
use App\Models\BrainScores;
use App\Models\DimensionalQuestionAnswerMain;
use App\Models\DimensionalQuestionAnswers;
use App\Models\ConsultantTestQuestions;

use App\Http\Controllers\BrainResultsController;

class ConsultantTestController extends Controller
{

 public function complete_profile(Request $request) {
    if ($request->isMethod('get')) {
        if (!ConsultantAnswers::where('user_id', session('user_id'))
        ->where('status', 'complete')->exists()) {
        $dob = session('user_dob'); 
        $age = \Carbon\Carbon::parse($dob)->age;
        
        if ($age < 12) {
            $category_from_age = 'child';
        } elseif ($age >= 12 && $age < 18) {
            $category_from_age = 'teenager';
        } else {
            $category_from_age = 'adult';
        }
           
        $question = ConsultantTestQuestions::where('id', 1)->first();
         return view('consultant-test/question', ['question' => $question, 'category_from_age' => $category_from_age]);
        }
        else{
            return redirect('profile')->with('fail', 'You have already submited your answers.');
        }
    }
    if ($request->isMethod('post')) {
        $questions = $request->input('questions', []);
        $answers   = $request->input('answers', []);
        
     
        // Combine into [{question, answer}, ...]
        $data = [];
        foreach ($questions as $index => $q) {
            $data[] = [
                'question' => $q,
                'answer'   => $answers[$index] ?? null
            ];
        }

        ConsultantAnswers::create([
            'user_id' => session('user_id'),
            'answers' => json_encode($data),
            'status'  => 'complete',
        ]);

        return redirect('profile')->with('success', 'Your answers have been submitted successfully.');
    }
   
}

    

    
}
