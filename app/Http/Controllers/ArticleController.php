<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /*
    private $articles = [
        ['title' => 'Ed Sheeran', 'categoria' => 'Music', 'description' => 'Edward Christopher Sheeran (Halifax, 17 febbraio 1991) è un cantautore e chitarrista britannico.Il suo stile musicale non ha mai subito particolari deviazioni artistiche, basato prevalentemente sulla musica pop con elementi folk, soul e contemporary R&B, oltre a forti influenze derivanti dalla musica tradizionale irlandese. Ha ottenuto grande successo e popolarità in America del Nord, Oceania ed Europa, soprattutto nel Regno Unito, suo paese natale, dove ha infranto svariati record di vendite. Nel 2011 l`artista ha firmato un contratto discografico con la Asylum Records, sotto la quale ha raggiunto la fama internazionale con il suo terzo album +, certificato sette volte disco di platino in Regno Unito, dove ha inoltre trascorso 200 settimane nella Official Albums Chart.', 'image' => '/imagini/music.jpg'],

        ['title' => 'Harry Potter: La pietra filosofale', 'categoria' => 'Tv+', 'description' => 'Harry Potter e la pietra filosofale (titolo originale in inglese: Harry Potter and the Philosopher`s Stone) è il primo romanzo della saga high fantasy Harry Potter, scritta da J. K. Rowling e ambientata principalmente nell`immaginario Mondo magico durante gli anni novanta del XX secolo.Ideato proprio nei primi anni novanta, Harry Potter e la Pietra Filosofale fu pubblicato poi nel 1997. Tradotto in 77 lingue, tra cui il latino e il greco antico, resta una delle più popolari opere letterarie del XX secolo con una vendita globale di 120 milioni di copie. In Italia è stato pubblicato da Adriano Salani nel maggio 1998, con illustrazioni di Serena Riglietti e traduzione di Marina Astrologo.Nel 2001 ne è stato tratto un adattamento cinematografico distribuito da Warner Bros. e diretto da Chris Columbus, che ha incassato più di 974 milioni di dollari al botteghino mondiale, inserendosi così al cinquantesimo posto nella classifica dei film con maggiori incassi nella storia del cinema.', 'image' => '/imagini/hary1.jpg'],

        ['title' => 'Call of Duty Mobile', 'categoria' => 'Arcade', 'description' => 'Il gioco è un FPS, nel quale numerosi personaggi - alcuni dei quali compaiono nel corso degli altri capitoli della serie - si combattono in ambientazioni più o meno vaste. Nella modalità battle royale si può giocare tutti contro tutti o in squadre da 2 o 4 persone e l`obiettivo è sopravvivere fino alla fine, impiegando armi da fuoco, da taglio, esplosive, mezzi di trasporto e la propria abilità operatore. In questa modalità è disponibile il gioco sia in prima persona che in terza. Nella modalità multigiocatore, sarà possibile esplorare diverse mappe percorse durante il corso della serie, in prima o in terza persona - nonostante nessuna delle modalità si basi sull`esplorazione, né sul sandbox -, a seconda delle preferenze del giocatore. Una variante della modalità multigiocatore è la cosiddetta ranked: segue le stesse regole di base del multigiocatore, ma ci sono delle classifiche (rank) e vincendo le partite si sale di classifica, viceversa perdendone si scende. Nella modalità zombie sarà necessario sopravvivere ad orde di non morti oppure completare le orde predefinite per poi vincere il boss finale.', 'image' => '/imagini/game.jpg'],

        ['title' => 'The Pragmatic Programmer', 'categoria' => 'iBooks', 'description' => 'The Pragmatic Programmer è un libro scritto da Andrew Hunt e David Thomas, edito nell`ottobre del 1999 e primo di una collana intitolata The Pragmatic Bookshelf. È un libro popolare nel mondo dell`ingegneria del software, ed è usato come testo di riferimento in corsi universitari sulla materia. Il libro non presenta una teoria sistematica, quanto piuttosto una raccolta di suggerimenti per migliorare il processo di sviluppo software in maniera pragmatica. Le principali qualità che gli autori individuano nel programmatore pragmatico sono l`essere early adopter, avere una capacità di rapido adattamento, inquisitività e pensiero critico, realismo, e ampia conoscenza di differenti tecnologie. Il libro usa analogie e brevi storie per presentare le metodologie e i problemi di sviluppo, tra le quali la teoria delle finestre rotte, la zuppa di pietre e la rana bollita. Alcuni concetti sono stati battezzati o resi popolari nel libro, tra i quali i Kata, brevi esercizi per sviluppare abilità di programmazione, e rubber duck debugging, una metodologia di debug il cui nome deriva da una storia contenuta nel libro.', 'image' => '/imagini/book.jpg'],

        ['title' => 'Harry Potter: La camera dei segreti', 'categoria' => 'Tv+', 'description' => 'Harry Potter e la camera dei segreti (titolo originale in inglese: Harry Potter and the Chamber of Secrets) è il secondo romanzo della saga high fantasy Harry Potter, scritta da J. K. Rowling e ambientata principalmente nell`immaginario Mondo magico durante gli anni novanta del XX secolo. Ideato proprio nei primi anni novanta, Harry Potter e la Camera dei Segreti fu pubblicato poi nel 1998. Tradotto in 77 lingue, tra cui il latino e il greco antico, resta una delle più popolari opere letterarie del XX secolo. In Italia è stato pubblicato da Adriano Salani nell`ottobre 1999[1], con illustrazioni di Serena Riglietti e traduzione di Marina Astrologo. Nel 2002 ne è stato tratto un adattamento cinematografico distribuito da Warner Bros. e diretto da Chris Columbus, che ha incassato quasi 880 milioni di dollari al botteghino mondiale', 'image' => '/imagini/hary2.jpg']


    ];
*/




    public function Index()
    {
        $articles=Article::all();
        return view('Articoli', ['titoloArticoli' => 'Articoli'], ['Articoli' => $articles]);
    }






    public function Show($id)
    {
$article=Article::find($id);
       
        return view('Detaglio', ['articolo' =>$article ]);
    }






    public function ShowByCategory($categoria)
    {
       
        $articoliPerCategoria =Article::where('categoria', $categoria)->get();
    
        return view('ArticoliPerCategoria', ['Articoli' => $articoliPerCategoria]);
    }



    public function  store(Request $request)
    {
       
  Article::create($request->all());
  return view('article-create');
    }
   public function create()
   {
  
       return view('create-article');
   }


 
}
