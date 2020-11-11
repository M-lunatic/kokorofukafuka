<?php

namespace App\Http\Controllers;
use App\Diagnaosis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
class DiagnosisController extends Controller
{
    /*
    protected function validator(array $data)
    {
        return Validator::make($data, [

            
            'user_id' => ['required', 'string', 'max:255','unique:users'],
            'user_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            
        ]);
    }
    */




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

        //DBに診断結果の登録
        
        //インスタンス作成
        $diagnosis = new Diagnosis();
        

        //saveメソッドが呼ばれると新しいレコードがデータベースに挿入される
        //$diagnosis->save();
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
