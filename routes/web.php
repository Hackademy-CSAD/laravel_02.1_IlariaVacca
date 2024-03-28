<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/macchine', function () {
 
    $macchine = [
        ["nome" => "Ferrari", "anno" => 2000, "modello" => "Corsa", "description" => "John Wick trova una via per sconfiggere la Gran Tavola. Ma prima di guadagnare la libertà, Wick deve affrontare un nuovo nemico che ha potenti alleanze in tutto il mondo e ha mezzi tali da tramutare vecchi amici in nuovi nemici.", "img" => "/images/ferrari.jpg"],
        ["nome" => "Lamborghini", "anno" => 2007, "modello" => "Tiger", "description" => "Ethan Hunt e la sua squadra dell'IMF si trovano di fronte alla sfida più pericolosa che abbiano mai affrontato: trovare e disinnescare una nuova terrificante arma che minaccia l’ intera umanità. Con il destino del mondo e il controllo del futuro appesi a un filo, la squadra inizierà una frenetica missione in tutto il mondo, per impedire che l’arma cada nelle mani sbagliate. Messo di fronte a un nemico misterioso e onnipotente, tormentato da forze oscure del passato, Ethan sarà costretto a decidere se sacrificare tutto per questa missione, comprese le vite di coloro che gli stanno più a cuore.", "img" => "/images/lamborghini.jpg"],
        ["nome" => "Fiat", "anno" => 2020, "modello" => 'Panda', "description" => "Peter Quill, ancora provato dalla perdita di Gamora, deve riunire la sua squadra per difendere l'universo e proteggere uno di loro. Una missione che, se non sarà portata a termine con successo, potrebbe portare alla fine dei Guardiani così come li conosciamo.", "img" => "/images/fiat.jpg"]
    ];

    return view('macchina', ["data" => $macchine]);
});

route::get('/macchina/{nome}', function ($nome){
    $macchine = [
        ["nome" => "Ferrari", "anno" => 2000, "modello" => "Corsa", "description" => "John Wick trova una via per sconfiggere la Gran Tavola. Ma prima di guadagnare la libertà, Wick deve affrontare un nuovo nemico che ha potenti alleanze in tutto il mondo e ha mezzi tali da tramutare vecchi amici in nuovi nemici.", "img" => "/images/ferrari.jpg"],
        ["nome" => "Lamborghini", "anno" => 2007, "modello" => "Tiger", "description" => "Ethan Hunt e la sua squadra dell'IMF si trovano di fronte alla sfida più pericolosa che abbiano mai affrontato: trovare e disinnescare una nuova terrificante arma che minaccia l’ intera umanità. Con il destino del mondo e il controllo del futuro appesi a un filo, la squadra inizierà una frenetica missione in tutto il mondo, per impedire che l’arma cada nelle mani sbagliate. Messo di fronte a un nemico misterioso e onnipotente, tormentato da forze oscure del passato, Ethan sarà costretto a decidere se sacrificare tutto per questa missione, comprese le vite di coloro che gli stanno più a cuore.", "img" => "/images/lamborghini.jpg"],
        ["nome" => "Fiat", "anno" => 2020, "modello" => 'Panda', "description" => "Peter Quill, ancora provato dalla perdita di Gamora, deve riunire la sua squadra per difendere l'universo e proteggere uno di loro. Una missione che, se non sarà portata a termine con successo, potrebbe portare alla fine dei Guardiani così come li conosciamo.", "img" => "/images/fiat.jpg"]
    ];
    
    // //vai nell'array $movie
    //     //se il titolo è uguale al parametro
    //         //hai trovato il film
    foreach($macchine as $macchina){
        if($nome == $macchina['nome']){
                return view('detail', ['macchina'=>$macchina]);
            }
    }
})->name('macchina.show');

