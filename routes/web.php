<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/Route::get('/', function () {
    
    $article = [
        [
            'text' => 'As 48 Leis do Poder', 'content' => 'Em As 48 leis do poder, o leitor aprende a manipular pessoas e situações para alcançar seus objetivos. E descobre por que alguns conseguem ser tão bem-sucedidos, enquanto outros estão sempre sendo passados para trás. Querer ser melhor do que o chefe, por exemplo, é um erro fatal. “Faça com que as pessoas acima de você se sintam confortavelmente superiores(…) Faça com que seus mestres pareçam mais brilhantes do que são na realidade e você alcançará o ápice do poder”, diz Robert Greene no capítulo “Não ofusque o brilho do mestre”.', 'img' => 'https://cdn.dooca.store/81243/products/jfvszjm4odf108n5przqm2kmmuxglctak03d_640x640+fill_ffffff.jpg?v=1690544885&webp=0'
        ],
        [
            'text' => 'O poder do Hábito', 'content' => 'Charles Duhigg, repórter investigativo do  New York Times , mostra que a chave para o sucesso é entender como os hábitos funcionam - e como podemos transformá-los.

            Durante os últimos dois anos, uma jovem transformou quase todos os aspectos de sua vida. Parou de fumar, correu uma maratona e foi promovida. Em um laboratório, neurologistas descobriram que os padrões dentro do cérebro dela mudaram de maneira fundamental. Publicitários da Procter & Gamble observaram vídeos de pessoas fazendo a cama. Tentavam desesperadamente descobrir como vender um novo produto chamado Febreze, que estava prestes a se tornar um dos maiores fracassos na história da empresa. De repente, um deles detecta um padrão quase imperceptível - e, com uma sutil mudança na campanha publicitária, Febreze começa a vender um bilhão de dólares por anos. Um diretor executivo pouco conhecido assume uma das maiores empresas norte-americanas. Seu primeiro passo é atacar um único padrão entre os funcionários - a maneira como lidam com a segurança no ambiente de trabalho, e logo a empresa começa a ter o melhor desempenho no índice Dow Jones.
            ', 'img' => 'https://emmatogrosso.com.br/wp-content/uploads/2024/01/O-poder-do-Habito.jpeg'
        ],
        [
            'text' => 'Biblia Sagrada', 'content' => 'A Bíblia é um conjunto de livros sagrados que contém a palavra de Deus, escrita por profetas e historiadores antigos. A palavra Bíblia vem do grego biblos, que significa "livro". 
            A Bíblia é considerada um livro por excelência, superior às demais obras literárias, e é conhecida como as Sagradas Escrituras.', 'img' => 'https://publicacoespaodiario.com.br/wp-content/uploads/2023/11/15229408139_15227507453_Biblia20Evangelize20Preta20-20TL71620FLAT.png'
        ],
    ];

    $books = [
        ['text' => 'O poder da Ação', 'content' => 'Acorde para os objetivos que quer conquistar. Já aconteceu a você de se olhar no espelho e não gostar daqueles quilos a mais? De observar seu momento profissional somente com frustração? De se sentir desconectado dos seus familiares, dos seus amigos? Se você acha que essas são situações normais, pense de novo! Só porque isso acontece com várias pessoas não quer dizer que a vida deva ser assim. Só porque algo se torna comum, não significa que seja normal! Neste livro, Paulo Vieira lhe convida a quebrar o ciclo vicioso e iniciar um caminho de realização.', 'img' => 'https://m.media-amazon.com/images/I/71vrSJIKk3L._SY466_.jpg'],

            ['text' => 'MindSet', 'content' => 'Carol S. Dweck, ph.D., professora de psicologia na Universidade Stanford e especialista internacional em sucesso e motivação, desenvolveu, ao longo de décadas de pesquisa, um conceito fundamental: a atitude mental com que encaramos a vida, que ela chama de “mindset”, é crucial para o sucesso. Dweck revela de forma brilhante como o sucesso pode ser alcançado pela maneira como lidamos com nossos objetivos. O mindset não é um mero traço de personalidade, é a explicação de por que somos otimistas ou pessimistas, bem-sucedidos ou não. Ele define nossa relação com o trabalho e com as pessoas e a maneira como educamos nossos filhos. É um fator decisivo para que todo o nosso potencial seja explorado.
            ', 'img' => 'https://i.zst.com.br/thumbs/12/11/12/179112584.jpg'],

            ['text' => 'Nunca é hora de Parar', 'content' => ' “A única coisa que sei é: eu sou David Goggins. Existo, logo termino o que começo. Tenho orgulho do meu esforço. E, enquanto eu estiver no planeta Terra, não vou fazer nada pela metade.” – David Goggins

            “David Goggins é um tipo raro de ser humano. Seu compromisso com sua filosofia, que destaca a importância de alcançar a grandeza através de resiliência mental e disciplina, dando tudo de si, tem servido de inspiração e motivação para milhões de pessoas em todo o mundo, inclusive para mim.” – Dwayne Johnson , “The Rock”', 'img' => 'https://m.media-amazon.com/images/I/81eOYoxFp4L._SY342_.jpg']
    ];
    return view('components.templates.home', compact('article', 'books'));
});