<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'FastAPI - APIs Modernas e Assíncronas com Python',
            'description' => 'Todo o poder Python assíncrono em APIs com FastAPI, SQL Alchemy, SQL Model NGINX e PostgreSQL.',
            'category_id' => 1,
            'price' => 22.9,
            'author' => 'Geek University',
            'length' => 123000
        ]);

        DB::table('courses')->insert([
            'title' => 'Curso completo de ClickUp - Ferramenta de gestão de projetos',
            'description' => 'Aprenda a gerenciar projetos e equipes com a melhor ferramenta atualmente.',
            'category_id' => 1,
            'price' => 22.9,
            'author' => 'Matthaeus Carvalho',
            'length' => 110000
        ]);

        DB::table('courses')->insert([
            'title' => 'Curso Completo - Asset Allocation e Riscos na Prática!',
            'description' => 'Curso 100% focado na prática! Crie carteiras de investimentos diversificadas e invista como os profissionais.',
            'category_id' => 3,
            'price' => 22.9,
            'author' => 'Paulo Monfort',
            'length' => 33000
        ]);

        DB::table('courses')->insert([
            'title' => 'GitLab CI - Para Pipelines CI/CD & DevOps',
            'description' => 'Mão na massa do zero à produção.',
            'category_id' => 4,
            'price' => 22.9,
            'author' => 'Claudio Antonio da Silva',
            'length' => 43000
        ]);


        DB::table('courses')->insert([
            'title' => 'Power BI - Rápido e Objetivo (+ Excel e PowerPoint)',
            'description' => 'Domine o PowerBI em poucas horas: um guia abrangente sobre como importar, transformar e visualizar dados.',
            'category_id' => 5,
            'price' => 22.9,
            'author' => 'Armanda Pinheiro',
            'length' => 10000
        ]);

        DB::table('courses')->insert([
            'title' => 'Coaching, mindfulness e TCC (3 em 1)',
            'description' => 'Coaching, mindfulness e Terapia Cognitivo Comportamental para você descobrir qual o melhor método para melhorar a sua vida.',
            'category_id' => 6,
            'price' => 22.9,
            'author' => 'Adriano Sugimoto',
            'length' => 40000
        ]);

        DB::table('courses')->insert([
            'title' => 'Curso de design gráfico completo 3 cursos - Zero ao avançado',
            'description' => 'Aprenda Photoshop, Illustrator e Corel Draw 2022. Curso completo com projetos reais para você praticar e aplicar.',
            'category_id' => 7,
            'price' => 22.9,
            'author' => 'Carlinzim',
            'length' => 170000
        ]);

        DB::table('courses')->insert([
            'title' => 'Curso completo de Facebook Ads & Instagram Ads 2022',
            'description' => 'Do zero ao avançado: aprenda a fazer anúncios no Facebook e Instagram + Remarketing.',
            'category_id' => 8,
            'price' => 22.9,
            'author' => 'Lucas Dal Molin',
            'length' => 43000
        ]);

        DB::table('courses')->insert([
            'title' => 'Curso completo de Tarot',
            'description' => 'Aprenda Tarot de modo claro e simples.',
            'category_id' => 9,
            'price' => 189.9,
            'author' => 'Bruno Tavares',
            'length' => 83000
        ]);

        DB::table('courses')->insert([
            'title' => 'Fotografia Masterclass: um guia completo de fotografia',
            'description' => 'A melhor aula de fotografia profissional online: como tirar fotos incríveis para fotógrafos iniciantes e avançados.',
            'category_id' => 10,
            'price' => 22.9,
            'author' => 'Phill Ebiner',
            'length' => 180000
        ]);

        DB::table('courses')->insert([
            'title' => 'Nutrição esportiva',
            'description' => 'Conceitos básicos, bioenergética, suplementação nutricional, nutrição aplicada a diferentes modalidades esportivas.',
            'category_id' => 11,
            'price' => 22.9,
            'author' => 'Sci Nutri',
            'length' => 233000
        ]);

        DB::table('courses')->insert([
            'title' => 'Curso de violão do básico ao intermediário - Método MVB',
            'description' => 'Aprenda violão do básico ao intermediário ao Finger Style.',
            'category_id' => 12,
            'price' => 22.9,
            'author' => 'Max Vasconcelos',
            'length' => 63000
        ]);

        DB::table('courses')->insert([
            'title' => 'O oculto na história: magia, religião e arte',
            'description' => 'O mundo pré-moderno.',
            'category_id' => 13,
            'price' => 79.9,
            'author' => 'Odir Mauro',
            'length' => 20000
        ]);
    }
}
