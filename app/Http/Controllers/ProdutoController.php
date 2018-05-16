<?php
    namespace estoque\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use estoque\produto;
    use Request;

    class ProdutoController extends Controller {

        public function lista() {
            $produtos = DB::select('select * from produtos');
            return view('produtos-listagem')->with('produtos',$produtos);
        }
        public function mostra(){
            //$id = Request::input('id','1');
            id = Request::route 
            $resposta = DB::select('select * from produtos where id = ?',[$id]);
            return view ("produtos-mostra.php")->width('p',$resposta[0]);
        }
    }
?>