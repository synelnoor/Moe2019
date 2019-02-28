<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Sambutan;
use App\Models\VisiMisi;
use App\Models\Kalender;
use App\Models\Jurnal;
use App\Models\Buku;
use App\Models\Event;
use App\DataTables\FrontJurnalDataTable;
use App\DataTables\FrontBukuDataTable;
use App\DataTables\FrontKalenderDataTable;







class FrontController extends Controller
{
    // function Word

    function words($value, $words = 100, $end = '...')
    {
        return \Illuminate\Support\Str::words($value, $words, $end);
    }
    //
    public function home(){
        $banner = Banner::get();
        $data= Article::orderBy('id','desc')->paginate(3);
        $botar = Article::orderBy('id','desc')->paginate(5);
        $event = Event::orderBy('tgl','asc')->paginate(5);

        return view('front.home')
        ->with('banner',$banner)
        ->with('data',$data)
        ->with('botar',$botar)
        ->with('event',$event);

    }

    public function artikeldetail($id){
        
        // $data= Article::orderBy('id','desc')->paginate(3);

         $artikel= Article::where('id',$id)->first();
         $botar = Article::orderBy('id','desc')->paginate(5);

        return view('front.artikeldetail',['botar'=> $botar,'artikel'=>$artikel]);
       // return view('front.artikeldetail');
    }
    public function sambutan(){
        // $data= Article::orderBy('id','desc')->paginate(3);
        $dos= Dosen::where('line','1')
                    ->first();
        $sam = Sambutan::get();

        // return view('sambutan',['data'=> $data,'dos'=>$dos]);
        return view('front.sambutan')
                ->with('dos',$dos)
                ->with('sam',$sam);
    }
    public function visimisi(){
        // $data= Article::orderBy('id','desc')->paginate(3);

        // return view('visimisi',['data'=> $data]);
        $visimisi = VisiMisi::where('halaman','=','moes')->get();
        //dd($visimisi);
        return view('front.visimisi')
                    ->with('visimisi',$visimisi);
    }
     public function organisasi(){
        // $data= Article::orderBy('id','desc')->paginate(3);
        // return view('organisasi',['data'=> $data]);
        return view('front.organisasi');
    }
    public function pimpinan(){
        $l1c1 = Dosen::where('line',1)->where('col',1)->get();
        $l2 = Dosen::where('line',2)->orderBy('col','asc')->get();
        $l3 = Dosen::where('line',3)->orderBy('col','asc')->get();
        //dd($l1c1);
        return view('front.pimpinan')
                ->with('l1c1',$l1c1)
                ->with('l2',$l2)
                ->with('l3',$l3);
    }
    public function adminegara(){
        // $data= Article::orderBy('id','desc')->paginate(3);

        // return view('adminegara',['data'=> $data]);
        $visimisi = VisiMisi::where('halaman','=','an')->get();
        return view('front.adminegara')
        ->with('visimisi',$visimisi);
    }
    public function hubinter(){
        // $data= Article::orderBy('id','desc')->paginate(3);
       
        // return view('hubinter',['data'=> $data]);
        $visimisi = VisiMisi::where('halaman','=','hi')->get();
        return view('front.hubinter')
        ->with('visimisi',$visimisi);
    }
    public function kontak(){
       
        return view('front.kontak');
    }
     public function kalender(FrontKalenderDataTable $frontKalenderDataTable){
        // $data= Article::orderBy('id','desc')->paginate(3);
         $kalender= Kalender::all();
       
    
          return $frontKalenderDataTable->render('front.kalender');
    }
     public function jurnal(FrontJurnalDataTable $frontJurnalDataTable){
        // $data= Article::orderBy('id','desc')->paginate(3);
         $jurnal= Jurnal::with('dosen')->get();
        
       
         return $frontJurnalDataTable->render('front.jurnal');
    }
     public function buku(FrontBukuDataTable $frontBukuDataTable){
        // $data= Article::orderBy('id','desc')->paginate(3);
         $buku= Buku::with('dosen')->get();
       
    
         return $frontBukuDataTable->render('front.buku');
    }
    public function pdosen(){
        // $data= Article::orderBy('id','desc')->paginate(3);

        // $dosen= DB::table('dosen')
        // ->whereExists(function ($query) {
        //         $query->select(DB::raw(1))
        //               ->from('jurnals')
        //               ->whereRaw('jurnals.dosen_id = dosen.id');
        //     })

        // ->orWhereExists(function ($query) {
        //         $query->select(DB::raw(1))
        //               ->from('bukus')
        //               ->whereRaw('bukus.dosen_id = dosen.id');
        //     })
        // ->get();
        // return view('pdosen',['data'=> $data,'dosen'=>$dosen]);
        return view('front.pdosen');
    }
     public function jurnaldosen($id){
        
        // $data= Article::orderBy('id','desc')->paginate(3);

        // $Dosen= Dosen::where('id',$id)->first();
        // $jurnal= Jurnal::where('dosen_id',$id)->get();


        // return view('jurnaldosen',['data'=> $data,'jurnal'=>$jurnal]);
        return view('front.jurnaldosen');
    }
    public function bukudosen($id){
        
        // $data= Article::orderBy('id','desc')->paginate(3);
        // $dosen= Dosen::where('id',$id)->first();

        // $buku= Buku::where('dosen_id',$id)->get();

       
        // return view('bukudosen',['data'=> $data,'buku'=>$buku]);
        return view('front.bukudosen');
    }

}
