<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inquiryee;
use App\Models\Question;
use App\Models\Questionfurnishedrental;
use App\Models\QuestionVactionalHome;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::get();
        return view('backend.questions.questionstable',compact('questions'));
    
    }   
   
    public function updateQuestion($id)
    {
        $question = Question::where ('id', '=', $id)->first();
     
        return view('backend.questions.questionsForm',compact('question'));
    
    }   
    public function updateQuestionPost($id,Request $request)
    {
        $question = $request->question;
        $rate = $request->rate;
        $tittle = $request->tittle;

        $Question = Question::where('id', $id)
        ->update(['questions' => $question,'rate' => $rate ,'tittle'=>$tittle]);
        return redirect('admin/questions');

    } 

    public function furnishedrental()
    {
        $questions = Questionfurnishedrental::get();
   
        return view('backend.questions.furnished.furnishedquestionstable',compact('questions'));
    
    }   

       
    public function furnisheUupdateQuestion($id)
    {
        $question = Questionfurnishedrental::where ('id', '=', $id)->first();
    

        return view('backend.questions.furnished.furnishedquestionsForm',compact('question'));
    
    }   
    public function furnishedUpdateQuestionPost($id,Request $request)
    {
        $question = $request->question;
        $rate = $request->rate;
        $tittle = $request->tittle;

        $Question = Questionfurnishedrental::where('id', $id)
        ->update(['questions' => $question,'rate' => $rate ,'tittle'=>$tittle]);
        return redirect('admin/furnishedrental');

    } 
  
    public function vactionalHome()
    {
        $questions = QuestionVactionalHome::get();
   
        return view('backend.questions.vactional.vactionalquestionstable',compact('questions'));
    
    }   
    public function vactionalHomeQuestion($id)
    {
        $question = QuestionVactionalHome::where ('id', '=', $id)->first();
     
        return view('backend.questions.vactional.questionForm',compact('question'));
    
    }   
    public function vactionalUpdateQuestionPost($id,Request $request)
    {
        $question = $request->question;
        $rate = $request->rate;
        $tittle = $request->tittle;
        $des = $request->des;

        $Question = QuestionVactionalHome::where('id', $id)
        ->update(['questions' => $question,'rate' => $rate ,'tittle'=>$tittle ,'description'=>$des]);
        return redirect('admin/vactionalHome');

    } 
}