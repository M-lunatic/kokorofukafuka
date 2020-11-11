<?php

namespace App\Http\Controllers;
use App\Diagnaosis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
class DiagnosisController extends Controller
{
    
    protected function validator(array $data)
    {
        return Validator::make($data, [

            
            'EorI1' => ['required', 'string', 'max:255'],
            'EorI2' => ['required', 'string', 'max:255'],
            'EorI3' => ['required', 'string', 'max:255'],
            'EorI4' => ['required', 'string', 'max:255'],
            'EorI5' => ['required', 'string', 'max:255'],
            'SorN1' => ['required', 'string', 'max:255'],
            'SorN2' => ['required', 'string', 'max:255'],
            'SorN3' => ['required', 'string', 'max:255'],
            'SorN4' => ['required', 'string', 'max:255'],
            'SorN5' => ['required', 'string', 'max:255'],
            'TorF1' => ['required', 'string', 'max:255'],
            'TorF2' => ['required', 'string', 'max:255'],
            'TorF3' => ['required', 'string', 'max:255'],
            'TorF4' => ['required', 'string', 'max:255'],
            'TorF5' => ['required', 'string', 'max:255'],
            'JorP1' => ['required', 'string', 'max:255'],
            'JorP2' => ['required', 'string', 'max:255'],
            'JorP3' => ['required', 'string', 'max:255'],
            'JorP4' => ['required', 'string', 'max:255'],
            'JorP5' => ['required', 'string', 'max:255'],

            
        ]);
    }
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //診断いろいろ
        return view('diagnosises.diagnosis-top');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    

        //診断‐問題文
        return view('diagnosises.diagnosis-16type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        //集計
        $ei = 0;
        $sn = 0;
        $tf = 0;
        $jp = 0;

        //DBに診断結果の登録
        $diagnosis = new \App\Diagnosis;
        
        $user = Auth::user();    //現在認証されているユーザーの取得


        $reqArray = [$request->input('EorI1'),$request->input('EorI2'),$request->input('EorI3'),$request->input('EorI4'),$request->input('EorI5'),
                    $request->input('SorN1'),$request->input('SorN2'),$request->input('SorN3'),$request->input('SorN4'),$request->input('SorN5'),
                    $request->input('TorF1'),

                ];

        //取得した値を配列化 

        for($i = 0; $i<$request.Length; $i++){
            if(preg_match( '/^EorI/', $request)){ //前方一致の場合に変数に足しこんでいく
                $ei += value;
            }
            else if(preg_match( '/^SorN/', $request)){
                $sn += value;
            }
            else if(preg_match( '/^TorF/', $request)){
                $tf += value;
            }
            else if(preg_match( '/^JorP/', $request)){
                $jp += value;
            }

        }

        if($ei > 0){
            $ei = 'E';
        }
        else{
            $ei ='I';
        }

        if($sn > 0){
            $sn = 'S';
        }
        else{
            $sn ='N';
        }

        if($tf > 0){
            $tf = 'T';
        }
        else{
            $tf ='F';
        }
        if($jp > 0){
            $jp = 'J';
        }
        else{
            $jp ='P';
        }

        /*
        return Diagnosis::create([
            
            'user_id' => $user,
            $request->all():

            
            'EorI1' => $request['EorI1'],
            'EorI2' => $request['EorI2'],
            'EorI3' => $request['EorI3'],
            'EorI4' => $request['EorI4'],
            'EorI5' => $request['EorI5'],
            'SorN1' => $request['SorN1'],
            'SorN2' => $request['SorN2'],
            'SorN3' => $request['SorN3'],
            'SorN4' => $request['SorN4'],
            'SorN5' => $request['SorN5'],
            'TorF1' => $request['TorF1'],
            'TorF2' => $request['TorF2'],
            'TorF3' => $request['TorF3'],
            'TorF4' => $request['TorF4'],
            'TorF5' => $request['TorF5'],
            'JorP1' => $request['JorP1'],
            'JorP2' => $request['JorP2'],
            'JorP3' => $request['JorP3'],
            'JorP4' => $request['JorP4'],
            'JorP5' => $request['JorP5'],
        ]);
            */
        
        
        

        //診断結果登録表示 Viewメソッドに引数を指定して返す
        return view('diagnosises.diagnosis-16type-result',['type' => $type ,]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //いままでの結果画面の表示
        /*
        $result = DiagnosisResult::find($id);
        return $result->toArray();
*/
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //過去の診断結果の編集
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
        //診断結果の更新

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //診断結果の消去
    }
}
