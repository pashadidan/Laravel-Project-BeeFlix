<?php

use Illuminate\Database\Seeder;

class seedermovie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            //drama
            [
                'genre_id' => '1',
                'title' => '18 Again',
                'photo' => 'Assets/Drama/18Again.jpg',
                'description' => 'After nearly twenty years of marriage, Jung Da Jung and Hong Dae Young seem to be well settled in their domestic lives. The proud parents of a pair of eighteen year old twins, the devoted couple have worked hard to build a happy home together. But what seems like an ideal life on the outside is really anything but. Fed up with Dae Young’s incessant nonsense, Da Jung is at her wits’ end. When Dae Young announces that he’s been fired, Da Jung gives up completely. Convinced life would be better without her husband in it, Da Jung wastes no time in filing for divorce.',
                'rating' => '4'
            ],
            [
                'genre_id' => '1',
                'title' => 'Itaewon Class',
                'photo' => 'Assets/Drama/ItaewonClass.jpg',
                'description' => 'Park Saeroyi life has been turned upside down after he gets expelled from school for punching a bully and his father is killed in an accident. Following his father steps, he opens a pub named DanBam in Itaewon and, along with his manager and staff, strive towards success and reaching greater heights.',
                'rating' => '5'
            ],
            [
                'genre_id' => '1',
                'title' => 'Crash Landing on You',
                'photo' => 'Assets/Drama/CrashLandingonYou.jpg',
                'description' => 'Tells the story of two star crossed lovers, a South Korean heiress and a North Korean elite who also happens to be an army officer. One day, while paragliding, Yoon Se Ri has an accident caused by strong winds, leading her to crash land in North Korea, where she meets Ri Jung Hyuk, a North Korean army officer, who agrees to help her return to South Korea. Over time, they fall in love, despite the divide and dispute between their respective countries.',
                'rating' => '5'
            ],
            [
                'genre_id' => '1',
                'title' => 'Start Up',
                'photo' => 'Assets/Drama/StartUp.jpg',
                'description' => 'Startup is set in South Koreas fictional Silicon Valley, called Sandbox, and tells the story of people in the world of startup companies. Seo Dal Mi dreams of becoming Koreas Steve Jobs. Shes an adventurer who doesnt own much, but has a grand plan for herself. She also has experience in a wide range of part-time jobs and is a person of great vitality.',
                'rating' => '4'
            ],
            //kids
            [
                'genre_id' => '2',
                'title' => 'Spongebob',
                'photo' => 'Assets/Kids/Spongebob.jpg',
                'description' => 'SpongeBob SquarePants is an American animated comedy television series created by marine science educator and animator Stephen Hillenburg for Nickelodeon. The series chronicles the adventures and endeavors of the title character and his aquatic friends in the fictional underwater city of Bikini Bottom.',
                'rating' => '5'
            ],
            [
                'genre_id' => '2',
                'title' => 'Naruto',
                'photo' => 'Assets/Kids/Naruto.jpg',
                'description' => 'Naruto Uzumaki, is a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village. The story is told in two parts – the first set in Narutos pre-teen years, and the second in his teens.',
                'rating' => '5'
            ],
            [
                'genre_id' => '2',
                'title' => 'Boruto',
                'photo' => 'Assets/Kids/Boruto.jpg',
                'description' => 'Several years after the end of the Shinobi War, Narutos son, Boruto, began his adventure with his teammates Sarada and Mitsuki.',
                'rating' => '4'
            ],
            [
                'genre_id' => '2',
                'title' => 'Adventure Time',
                'photo' => 'Assets/Kids/AdventureTime.jpg',
                'description' => 'the series follows the adventures of a boy named Finn and his best friend and adoptive brother Jake a dog with the magical power to change size and shape at will. Finn and Jake live in the post-apocalyptic Land of Ooo, where they interact with Princess Bubblegum, the Ice King (, Marceline, BMO, and others.',
                'rating' => '4'
            ],
            //tvshow
            [
                'genre_id' => '3',
                'title' => 'RunningMan',
                'photo' => 'Assets/TVShows/RunningMan.jpg',
                'description' => 'In each episode, the members and sometimes guests must complete missions at famous landmarks to win the race. The missions almost always feature running, hence the title, and the name tag ripping game is filled with tension as each member struggles to survive.',
                'rating' => '4'
            ],
            [
                'genre_id' => '3',
                'title' => 'Knowing Brothers',
                'photo' => 'Assets/TVShows/KnowingBros.jpg',
                'description' => 'It is a sitcom talk show program set in a school. In each episode, new celebrity guests appear as transfer students at the Brother School where seven mischievous brother students wait for them. The show consists of several dynamic sessions. In Guess About Me, Celebrity guests create random, secret questions about themselves. Then the hosts called Knowledgeable Bros make humorous guesses to get the answers. Another session is Bros Inside, an ad-lib skit show, where entertainers are given only the setting for a story and have to perform completely ad-libbed skits.',
                'rating' => '5'
            ],
            [
                'genre_id' => '3',
                'title' => 'Late Night Seth Meyers',
                'photo' => 'Assets/TVShows/LateNightShow.jpg',
                'description' => 'Late Night with Seth Meyers is an American late-night and news satire talk show hosted by Seth Meyers on NBC. The show premiered on February 24, 2014, and is produced by Broadway Video and Universal Television. It is the fourth iteration of NBCs Late Night franchise. The show also stars bandleader Fred Armisen and the 8G Band, the shows house band. Late Night is produced by former Saturday Night Live producer Mike Shoemaker and executive-produced by Lorne Michaels.',
                'rating' => '4'
            ],
            [
                'genre_id' => '3',
                'title' => 'The Show James Corden',
                'photo' => 'Assets/TVShows/TheLateShow.jpeg',
                'description' => 'The Late Late Show with James Corden (also known as Late Late) is an American late-night talk show hosted by James Corden on CBS. It is the fourth and current iteration of The Late Late Show. Airing in the U.S. from Monday to Friday nights, it is taped in front of a studio audience Monday through Thursday afternoons – during weeks in which first-run episodes are scheduled to air – at CBS Television City',
                'rating' => '4'
            ]
        ]);
    }
}
