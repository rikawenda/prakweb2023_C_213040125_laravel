<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rika Wenda',
            'email' => 'wenda@gmail.com',
            'password' => bcrypt('16102022')
        ]);

        User::create([
            'name' => 'Robby',
            'email' => 'robby@gmail.com',
            'password' => bcrypt('20221610')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dolorum maxime numquam quae, omnis dignissimos sed velit ducimus ipsum incidunt tempore architecto assumenda ea fuga ad reiciendis ipsam repellendus saepe? Non reprehenderit optio eos quis.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam fugiat debitis natus libero ipsum recusandae.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit laboriosam consectetur odit commodi eum quod explicabo exercitationem mollitia, vel suscipit iste ut doloribus veniam impedit quo consequatur recusandae ea deleniti dignissimos dolor assumenda! Quibusdam excepturi eligendi molestiae magnam ut.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt aliquid alias rem fuga nam assumenda odio beatae, hic sint ad autem totam atque doloremque perferendis accusamus nulla inventore placeat aperiam tempore, ut sed quos veniam ea! Praesentium dolor totam similique cupiditate nisi perferendis? Doloremque soluta doloribus earum, reiciendis veritatis voluptatem?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia cupiditate iusto natus distinctio omnis voluptatum beatae assumenda id!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vitae perspiciatis repellendus alias at neque pariatur ipsum harum eum, nesciunt aspernatur assumenda beatae enim rem dolorum ipsam natus, exercitationem magnam asperiores? Quaerat beatae amet facilis dignissimos, odio provident aliquid fugiat, sequi maiores, ut enim quod fugit modi molestiae non nemo!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, labore deserunt ducimus quam dolores aut aspernatur, consequuntur nesciunt placeat animi enim iure error? Voluptatibus, magnam!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, doloremque nesciunt? Quis, sit voluptate suscipit incidunt exercitationem esse natus voluptatum distinctio quod iure adipisci nobis nihil voluptatibus inventore ab error eligendi labore atque repellendus vel.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo accusantium est perspiciatis consequuntur, soluta perferendis officia. Culpa voluptate voluptates dignissimos, similique ex temporibus animi vel. Asperiores, at.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium sequi voluptatibus maxime illo cum distinctio, voluptate totam, tenetur nemo accusantium consequuntur tempora earum.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla soluta quam et quasi nihil porro asperiores mollitia eligendi iusto, neque quos illo similique aut ab, eum voluptate iure provident at perferendis a vel repudiandae dolore error. Architecto!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus amet sapiente natus iste cumque! Natus officiis ratione sapiente esse, perferendis ipsam autem optio cum necessitatibus? Maxime nobis, est accusantium soluta aspernatur totam ducimus facere beatae doloremque. Dolores facere tenetur rem? Numquam voluptatum quod itaque!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sequi soluta nemo quae nulla doloribus!</p>',
            'category_id' => 3,
            'user_id' => 1
        ]);

        
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore autem, expedita culpa voluptates incidunt ad quasi sequi assumenda fugiat, dolorem magnam numquam explicabo iure, vitae totam dignissimos. Ad odio ratione soluta sint officiis eveniet atque assumenda voluptatum fugiat similique?',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo unde neque minus! Inventore obcaecati, sequi ab modi minus ipsum dignissimos facilis dolorum, ratione dolorem id animi voluptatibus soluta accusantium illum neque fuga optio aperiam fugit corrupti quas, explicabo error rerum! At ex nisi eius quod assumenda iste, ipsa animi magni quasi earum possimus unde laboriosam eveniet, necessitatibus dicta ea neque molestiae quis fugit maxime temporibus accusamus fugiat. Reiciendis voluptatum culpa quisquam numquam, ea eaque minima est rerum voluptas! Dolor!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ipsa tempora velit alias? Consequatur error pariatur dicta eum commodi nobis fugiat ipsa! Perspiciatis vel incidunt rerum accusamus magnam placeat itaque consequuntur deleniti tempore officia est, corporis, quaerat cumque!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto inventore non amet impedit at illo? Facere ducimus alias deleniti repellat dignissimos voluptas doloribus.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
