<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('dfgdfgdf');
        return view('assessment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function similarDoubleChar(Request $request)
    {

        $strarr = str_split($request->string_arr);
        $count = 0;

       $prevchar = '';
       $prev2char = '';
       foreach ( $strarr  as $key => $currchar) {
     
           $prevchar == $currchar;

           if($key > 1){
            if($prevchar == $currchar &&  $prev2char != $currchar){
                $count++;
               }
           }
           else{
            if($prevchar == $currchar){
                $count++;
               }
           }


           $prevchar =  $currchar;
         
           if($key > 1){
            $prev2char = $strarr[$key - 2];
           }
           
           
       }

       return view('assessment.index')->with(compact('count'));
        
    }


    public function vowelConsonant(Request $request)
    {

        $strarr = str_split($request->string_char);
        $countVowel = 0;
        $countConsonant = 0;


        $vowels = ['a','e','i','o','u'];
   
      
       foreach ( $strarr  as $key => $currchar) {
     
         if(in_array(strtolower($currchar), $vowels)){
            $countVowel++;
         }
         else{
            $countConsonant++;
         }  
           
       }

       return view('assessment.index')->with(compact('countVowel' , 'countConsonant'));
        
    }


    public function integerPattern(Request $request)
    {

        $strarr = str_split($request->string_integer);

        $newPattern = '';
        $listPattern = array();
        for ($i=0; $i < count($strarr) ; $i++) { 
            foreach ( $strarr  as $key => $currchar) {
     
                $newPattern .= $currchar;

            }
            array_push($listPattern ,  $newPattern);
            $newPattern = '';
        }

       return view('assessment.index')->with(compact('listPattern'));
        
    }
}
