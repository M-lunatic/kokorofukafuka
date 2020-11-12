<?php

namespace App\Http\Controllers;
use App\Diagnosis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
class DiagnosesController extends Controller
{
    
    protected function validator(array $data)
    {
        return Validator::make($data, [

            
            'EorI1' => ['required', 'integer', 'max:10'],
            'EorI2' => ['required', 'integer', 'max:10'],
            'EorI3' => ['required', 'integer', 'max:10'],
            'EorI4' => ['required', 'integer', 'max:10'],
            'EorI5' => ['required', 'integer', 'max:10'],
            'SorN1' => ['required', 'integer', 'max:10'],
            'SorN2' => ['required', 'integer', 'max:10'],
            'SorN3' => ['required', 'integer', 'max:10'],
            'SorN4' => ['required', 'integer', 'max:10'],
            'SorN5' => ['required', 'integer', 'max:10'],
            'TorF1' => ['required', 'integer', 'max:10'],
            'TorF2' => ['required', 'integer', 'max:10'],
            'TorF3' => ['required', 'integer', 'max:10'],
            'TorF4' => ['required', 'integer', 'max:10'],
            'TorF5' => ['required', 'integer', 'max:10'],
            'JorP1' => ['required', 'integer', 'max:10'],
            'JorP2' => ['required', 'integer', 'max:10'],
            'JorP3' => ['required', 'integer', 'max:10'],
            'JorP4' => ['required', 'integer', 'max:10'],
            'JorP5' => ['required', 'integer', 'max:10'],

            
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
        return view('diagnoses.diagnosis-top');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    

        //診断‐問題文
        return view('diagnoses.diagnosis-16type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //取得した値を変数に
        $ei1 = $request->input('EorI1');
        $ei2 = $request->input('EorI2');
        $ei3 = $request->input('EorI3');
        $ei4 = $request->input('EorI4');
        $ei5 = $request->input('EorI5');
        $sn1 = $request->input('SorN1');
        $sn2 = $request->input('SorN2');
        $sn3 = $request->input('SorN3');
        $sn4 = $request->input('SorN4');
        $sn5 = $request->input('SorN5');
        $tf1 = $request->input('TorF1');
        $tf2 = $request->input('TorF2'); 
        $tf3 = $request->input('TorF3'); 
        $tf4 = $request->input('TorF4'); 
        $tf5 = $request->input('TorF5');
        $jp1 = $request->input('JorP1');
        $jp2 = $request->input('JorP2');
        $jp3 = $request->input('JorP3');
        $jp4 = $request->input('JorP4');
        $jp5 = $request->input('JorP5');

        //集計用の変数
        $eiSum = 0;
        $snSum = 0;
        $tfSum = 0;
        $jpSum = 0;

        //取得した値を配列化
        $reqArray = [
            $ei1,$ei2,$ei3,$ei4,$ei5,$sn1,$sn2,$sn3,$sn4,$sn5,$tf1,$tf2,$tf3,$tf4,$tf5,$jp1,$jp2,$jp3,$jp4,$jp5,];

        $arrayCount = 20;

        $i = 0;
        while($i<$arrayCount){
            if($i >=0 && $i<=4){
                $eiSum += $reqArray[$i];
                $i++;
            }
            else if($i>4 && $i<=9){
                $snSum += $reqArray[$i];
                $i++;
            }
            else if($i>9 && $i<=14){
                $tfSum += $reqArray[$i];
                $i++;
            }
            else if($i>14 && $i<$arrayCount){

                $jpSum += $reqArray[$i];
                $i++;
            }

        }

        //typeを出す　数字がプラスの時XorY？のXタイプになる　数字がマイナスの時XorYのYタイプになる
        $eistr = '';
        $snstr = '';
        $tfstr = '';
        $jpstr = '';

        if($eiSum > 0){
            $eistr .= 'E';
        }
        else if($eiSum<=-1){
            $eistr .='I';
        }

        if($snSum > 0){
            $snstr .= 'S';
        }
        else if($snSum<=-1){
            $snstr .= 'N';
        }

        if($tfSum > 0){
            $tfstr .= 'T';
        }
        else if($tfSum<=-1){
            $tfstr .='F';
        }
        if($jpSum > 0){
            $jpstr .= 'J';
        }
        else if($jpSum<=-1){
            $jpstr .='P';
        }

        //表示されない
        $type = $eistr.$snstr.$tfstr.$jpstr;
        
        //現在認証されているユーザーの取得
        $user = Auth::id();

        //DBに診断結果の登録
        Diagnosis::create([
            
            'user_id' => $user,
            'EorI1' => $ei1,
            'EorI2' => $ei2,
            'EorI3' => $ei3,
            'EorI4' => $ei4,
            'EorI5' => $ei5,
            'SorN1' => $sn1,
            'SorN2' => $sn2,
            'SorN3' => $sn3,
            'SorN4' => $sn4,
            'SorN5' => $sn5,
            'TorF1' => $tf1,
            'TorF2' => $tf2,
            'TorF3' => $tf3,
            'TorF4' => $tf4,
            'TorF5' => $tf5,
            'JorP1' => $jp1,
            'JorP2' => $jp2,
            'JorP3' => $jp3,
            'JorP4' => $jp4,
            'JorP5' => $jp5,
        ]);
        
        //診断結果登録表示 Viewメソッドに引数を指定して返す
        return view('diagnoses.diagnosis-16type-result',compact('type'));
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
