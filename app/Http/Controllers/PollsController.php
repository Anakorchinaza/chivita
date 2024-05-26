<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Answers;
use App\Models\Results;
use App\Models\UsersAnswers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PollsController extends Controller
{
    public function thankYou(){
        return view('thankyou');
    }

    public function saveAnswers(Request $request)
    {
        $formData = $request->all();

        // Process and save the data into the appropriate table
        foreach ($formData as $question => $answer) {
            // Save the data into the users_answers table or whichever table is appropriate
            UsersAnswers::create([
                'question_id' => $question,
                'answer_id' => $answer,
                'user_id'=> auth()->user()->id,
                'created_at' => Carbon::now(),
            ]);
        }

        // Join users_answers with answers to get the variant information
        $userAnswers = DB::table('users_answer')
        ->join('answers', 'users_answer.answer_id', '=', 'answers.id')
        ->where('users_answer.user_id', auth()->user()->id)
        ->orderBy('users_answer.id', 'DESC')
        ->select('answers.variant')
        ->limit(8)
        ->get();

          // Count the occurrences of each variant
        $variantCounts = [];
        foreach ($userAnswers as $answer) {
            if (isset($variantCounts[$answer->variant])) {
                $variantCounts[$answer->variant]++;
            } else {
                $variantCounts[$answer->variant] = 1;
            }
        }

         // Determine the highest occurring variant
        $highestVariant = array_keys($variantCounts, max($variantCounts))[0];

        // Fetch the variant information from the result table
        $variantInfo = DB::table('result')
            ->where('variant', $highestVariant)
            ->first(['img', 'description']);

       
        if (!$variantInfo) {
            return response()->json([
                'message' => 'Variant information not found',
            ], 404);
        }

        // Store the highest variant information in the session
        session([
            'variant' => $highestVariant,
            'image' => $variantInfo->img,
            'description' => $variantInfo->description
        ]);

        // Return success response
        return response()->json(['success' => true]);
        
    }

    






}
