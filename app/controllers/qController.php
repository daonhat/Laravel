<?php
    class qController extends Controller {
//    public function getDatabase(){
//        return View::make('database');
//    }

//    public function  postDatabase(){
//        DB::table('question')->insert(array('idq'=>null,'titleq'=>Input::get('qora')));
//        echo 'Da them cau hoi thanh cong';
//
//    }
        public function  postAdda(){
            DB::table('answer')->insert(array('ida'=>null,'titlea'=>Input::get('qora')));
            echo 'Da them câu trả lời thanh cong';

        }

        public function getQuestion(){
            return View::make('question');
        }
    public function postQuestion(){
        $questions = DB::table("question")->where("idq","=",rand(1,10))->get(); //tam thoi xet trong csdl chi co 10 cau hoi la max
        foreach($questions as $question)
            echo "</br>".$question->titleq ; //in ra cau hoi

        for($i = 1 ; $i < 5;$i++) //in ra 4 cau tra loi
        {
            $answers = DB::table("answer")->where("ida","=",rand(1,10))->get();
            foreach($answers as $answer)
                echo "</br>".$answer->titlea ;
        }
    }
    public function database(){
        return View::make('database');
    }
    public function  addq(){
        DB::table('question')->insert(array('idq'=>null,'titleq'=>Input::get('qora')));
        echo 'Da them cau hoi thanh cong';

    }
}