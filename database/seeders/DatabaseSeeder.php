<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        News::create([
            'title' => 'Test News 1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec pharetra ante. Donec ac lacus sit amet nisi volutpat sagittis. Mauris ultricies tincidunt urna. Maecenas et diam sodales, ullamcorper odio id, blandit quam. Sed elit libero, accumsan ut sem ac, lacinia iaculis nisl. Curabitur ut magna risus. Proin enim mauris, scelerisque at est vitae, venenatis rutrum eros. Sed justo nisl, maximus rutrum porta vitae, facilisis vel quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

            Nullam egestas lectus in venenatis porta. Integer laoreet congue dui ut feugiat. Vivamus diam magna, tempor id justo eget, venenatis mattis metus. Mauris sed risus neque. Aliquam erat volutpat. Aenean venenatis varius purus. Curabitur euismod eget lorem porta porta. Vivamus commodo est a ultricies egestas.
            
            Nam pellentesque, quam tempus convallis dapibus, augue est consectetur nisi, lacinia interdum elit ligula eu tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam aliquet felis ligula, id aliquet metus sagittis non. Suspendisse nec nunc ante. Curabitur id bibendum elit. Ut sagittis gravida erat, blandit dignissim ex finibus eget. Proin dictum diam elit, quis iaculis mi euismod ut. Donec ex dolor, imperdiet eget iaculis finibus, eleifend et dolor.
            
            Nullam viverra consequat tortor et efficitur. Aliquam neque urna, pretium at est accumsan, tristique lobortis elit. Ut tincidunt ut ipsum ac efficitur. Morbi eget est a dui tristique sagittis quis in sem. Phasellus nisl tortor, dignissim id lectus vitae, tincidunt placerat massa. Aenean sit amet porttitor metus. Nunc efficitur arcu in dignissim condimentum. Donec tincidunt ullamcorper lorem at porta. Pellentesque tempus mauris ac eros bibendum eleifend. Phasellus at sapien eleifend, aliquam est eget, dictum tortor. Integer at nisi nec justo iaculis bibendum. Nulla lobortis semper tristique. Mauris sagittis, sem vitae consectetur aliquam, ante ligula viverra ligula, vitae ultrices nulla enim quis ligula. Praesent quis eros et arcu luctus tempus ac quis ligula.
            
            Duis est mauris, dictum ac pretium sit amet, viverra sit amet metus. Integer lobortis ligula eget lectus vestibulum accumsan. Aenean semper placerat mi sed placerat. Sed ornare lacus ac odio dignissim, cursus vestibulum libero congue. Integer eget erat ut odio rhoncus semper a quis lectus. In id justo mattis lectus maximus fringilla in ut tellus. Suspendisse elementum fermentum mi ac pulvinar. Maecenas gravida lectus sem, id porttitor mi bibendum vel. Maecenas tempor pharetra dolor, eu ornare purus laoreet quis. Suspendisse euismod convallis varius. Proin vitae urna sit amet metus rhoncus eleifend sit amet ut dolor. Curabitur placerat erat vitae interdum luctus.'
        ]);
        
        News::create([
            'title' => 'Test News 2',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec pharetra ante. Donec ac lacus sit amet nisi volutpat sagittis. Mauris ultricies tincidunt urna. Maecenas et diam sodales, ullamcorper odio id, blandit quam. Sed elit libero, accumsan ut sem ac, lacinia iaculis nisl. Curabitur ut magna risus. Proin enim mauris, scelerisque at est vitae, venenatis rutrum eros. Sed justo nisl, maximus rutrum porta vitae, facilisis vel quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

            Nullam egestas lectus in venenatis porta. Integer laoreet congue dui ut feugiat. Vivamus diam magna, tempor id justo eget, venenatis mattis metus. Mauris sed risus neque. Aliquam erat volutpat. Aenean venenatis varius purus. Curabitur euismod eget lorem porta porta. Vivamus commodo est a ultricies egestas.
            
            Nam pellentesque, quam tempus convallis dapibus, augue est consectetur nisi, lacinia interdum elit ligula eu tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam aliquet felis ligula, id aliquet metus sagittis non. Suspendisse nec nunc ante. Curabitur id bibendum elit. Ut sagittis gravida erat, blandit dignissim ex finibus eget. Proin dictum diam elit, quis iaculis mi euismod ut. Donec ex dolor, imperdiet eget iaculis finibus, eleifend et dolor.
            
            Nullam viverra consequat tortor et efficitur. Aliquam neque urna, pretium at est accumsan, tristique lobortis elit. Ut tincidunt ut ipsum ac efficitur. Morbi eget est a dui tristique sagittis quis in sem. Phasellus nisl tortor, dignissim id lectus vitae, tincidunt placerat massa. Aenean sit amet porttitor metus. Nunc efficitur arcu in dignissim condimentum. Donec tincidunt ullamcorper lorem at porta. Pellentesque tempus mauris ac eros bibendum eleifend. Phasellus at sapien eleifend, aliquam est eget, dictum tortor. Integer at nisi nec justo iaculis bibendum. Nulla lobortis semper tristique. Mauris sagittis, sem vitae consectetur aliquam, ante ligula viverra ligula, vitae ultrices nulla enim quis ligula. Praesent quis eros et arcu luctus tempus ac quis ligula.
            
            Duis est mauris, dictum ac pretium sit amet, viverra sit amet metus. Integer lobortis ligula eget lectus vestibulum accumsan. Aenean semper placerat mi sed placerat. Sed ornare lacus ac odio dignissim, cursus vestibulum libero congue. Integer eget erat ut odio rhoncus semper a quis lectus. In id justo mattis lectus maximus fringilla in ut tellus. Suspendisse elementum fermentum mi ac pulvinar. Maecenas gravida lectus sem, id porttitor mi bibendum vel. Maecenas tempor pharetra dolor, eu ornare purus laoreet quis. Suspendisse euismod convallis varius. Proin vitae urna sit amet metus rhoncus eleifend sit amet ut dolor. Curabitur placerat erat vitae interdum luctus.'
        ]);
    }
}
