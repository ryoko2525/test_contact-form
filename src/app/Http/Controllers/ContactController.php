<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

public function index(Request $request)
    {
        // セッションからデータを取得（データがない場合は空の配列を使用）
        $contact = $request->session()->get('contact', []);

        return view('input', compact('contact'));
    }

public function confirm(ContactRequest $request)
    {
        $contact = $request->all();

        // 電話番号の連結、変数への格納
        $tel1 = $request->input('tel1');
        $tel2 = $request->input('tel2');
        $tel3 = $request->input('tel3');
        $tell = $tel1 . '-' . $tel2 . '-' . $tel3;
        $contact['tell'] = $tell;
        $contact['tel1'] = $tel1;
        $contact['tel2'] = $tel2;
        $contact['tel3'] = $tel3;

        //セッションに保存
        $request->session()->put('contact', $contact);

        return view('confirm',compact('contact'));
    }

        public function submitForm(Request $request)
    {
        $contact = $request->all();

        // 性別の数値変換
        $genderMap = ['男性' => 1, '女性' => 2, 'その他'=>3];
        $contact['gender'] = $genderMap[$contact['gender']] ?? null;

        // DB保存
        Contact::create($contact);

        // セッションから入力データを削除→これをしないと登録後もホームに前回の入力が残る
        $request->session()->forget('contact');

        return view('thanks');
    }

public function admin(Request $request)
    {
        $contacts = Contact::with('category')->get();
        // 性別の数値を文字列に変換
        $genderMap = ['1' => '男性', '2' => '女性', '3' => 'その他'];
        foreach ($contacts as $contact) {
        $contact->gender = $genderMap[$contact->gender] ?? '';
        }

        $categories = Category::all();
        $query = Contact::query();

        $contacts = $query->paginate(7);


        return view('admin', compact('contacts','categories'));
    }


public function search(Request $request)
    {

        $query = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)
        ->GenderSearch($request->gender)
        ->DateSearch($request->date);

        $contacts = $query->paginate(7);

        $categories = Category::all();


        return view('admin', compact('contacts','categories'));

    }
}





