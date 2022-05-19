<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'O Príncipe',
            'author' => 'Maquiavel',
            'year' => 2004,
            'synopsis' => 'Àqueles que chegam desavisados ao texto límpido e elegante de Nicolau Maquiavel pode parecer que o autor escreveu, na Florença do século XVI, um manual abstrato para a conduta de um mandatário. Entretanto, esta obra clássica da filosofia moderna, fundadora da ciência política, é fruto da época em que foi concebida. solução do governo republicano de Florença e do retorno da família Médici ao poder, Maquiavel é preso, acusado de conspiração. Perdoado pelo papa Leão X, ele se exila e passa a escrever suas grandes obras. O príncipe, publicado postumamente, em 1532, é uma esplêndida meditação sobre a conduta do governante e sobre o funcionamento do Estado, produzida num momento da história ocidental em que o direito ao poder já não depende apenas da hereditariedade e dos laços de sangue. Mais que um tratado sobre as condições concretas do jogo político, O príncipe é um estudo sobre as oportunidades oferecidas pela fortuna, sobre as virtudes e os vícios intrínsecos ao comportamento dos governantes, com sugestões sobre moralidade, ética e organização urbana que, apesar da inspiração histórica, permanecem espantosamente atuais.',
            'genre_id' => 4,
            'price' => 24.90
        ]);

        DB::table('books')->insert([
            'title' => 'Harry Potter e a Câmara Secreta',
            'author' => 'J.K. Rowling',
            'year' => 2000,
            'synopsis' => 'É pura magia! Aranhas gigantes, cobras que matam só com o olhar, varinhas mágicas com defeito... Muitas histórias contribuem para que o leitor se encante com Harry Potter e a câmara secreta , onde ele vai reencontrar todos os pequenos heróis e amigos do livro anterior. Mas isto não será para sempre. J. K. Rowling, a autora da saga de Harry Potter, já avisou que até o sétimo livro da série, que promete ser o último, alguns personagens do bem vão morrer. ',
            'genre_id' => 1,
            'price' => 35.40
        ]);

        DB::table('books')->insert([
            'title' => 'Nunca Desista de Seus Sonhos',
            'author' => 'Augusto Cury',
            'year' => 2004,
            'synopsis' => 'Com mais de um milhão de livros vendidos sobre temas como crescimento pessoal, inteligência e qualidade de vida, o psiquiatra Augusto Cury debruça-se aqui sobre nossa capacidade de sonhar e o quanto ela é fundamental na realização de nossos projetos de vida. Os sonhos são como uma bússola, indicando os caminhos que seguiremos e as metas que queremos alcançar. São eles que nos impulsionam, nos fortalecem e nos permitem crescer. Se os sonhos são pequenos, nossas possibilidades de sucesso também serão limitadas. ',
            'genre_id' => 2,
            'price' => 26.00
        ]);

        DB::table('books')->insert([
            'title' => 'Os Lusíadas',
            'author' => 'Luís de Camões',
            'year' => 2012,
            'synopsis' => 'A obra máxima da língua portuguesa, Os Lusíadas, de Luís de Camões, recebeu sua versão HQ por meio do traço marcante do cartunista Fido Nesti.',
            'genre_id' => 3,
            'price' => 29.70
        ]);
    }
}
