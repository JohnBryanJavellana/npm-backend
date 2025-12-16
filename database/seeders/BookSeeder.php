<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Utils\GenerateTrace;
use App\Models\{
    Book,
    BookCatalog,
    BookGenre,
    BookCopy
};
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $booksData = [
            [
                'title' => 'The Nebula\'s Secret',
                'genre' => 'Science Fiction',
                'author' => 'Elias Vance',
                'abstract' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'language' => 'English',
                'isbn' => '978-1566199094',
                'edition' => 'First',
                'bibliography' => 'N/A',
                'description' => 'A thrilling space opera with high stakes.', // Using 'description' for 'Abstract' field
                'publication_year' => 2045,
                'max_copies' => 10,
            ],
            [
                'title' => 'Whispers of the Old Manor',
                'genre' => 'Mystery',
                'author' => 'Clara Hawthorne',
                'abstract' => 'A young detective inherits a decaying country estate and must solve a decades-old disappearance tied to its shadowy history.',
                'language' => 'English',
                'isbn' => '978-0385542797',
                'edition' => 'Re-release',
                'bibliography' => 'Includes character sketches.',
                'description' => 'A classic who-done-it with a gothic setting.',
                'publication_year' => 1998,
                'max_copies' => 8,
            ],
            [
                'title' => 'Code 404: The Human Factor',
                'genre' => 'Computer Science',
                'author' => 'Dr. Lena Sharma',
                'abstract' => 'An in-depth exploration of human-computer interaction, focusing on error states, cognitive load, and intuitive design principles.',
                'language' => 'English',
                'isbn' => '978-1449363380',
                'edition' => 'Second',
                'bibliography' => 'Extensive references to seminal HCI papers.',
                'description' => 'Essential reading for UX designers and programmers.',
                'publication_year' => 2023,
                'max_copies' => 10,
            ],
            [
                'title' => 'The Alchemist\'s Garden',
                'genre' => 'Fantasy',
                'author' => 'Seraphina Moon',
                'abstract' => 'A young apprentice discovers a magical garden where plants grant extraordinary, and sometimes dangerous, abilities to those who tend them.',
                'language' => 'English',
                'isbn' => '978-0061120084',
                'edition' => 'Collector\'s',
                'bibliography' => 'Glossary of mythical flora.',
                'description' => 'A whimsical tale of magic and botany.',
                'publication_year' => 2011,
                'max_copies' => 10,
            ],
            [
                'title' => 'Statistical Mechanics: A Primer',
                'genre' => 'Physics',
                'author' => 'J.R. Oppenauer',
                'abstract' => 'A comprehensive introductory textbook covering fundamental concepts of thermodynamics and statistical ensemble theory.',
                'language' => 'English',
                'isbn' => '978-0521731679',
                'edition' => 'Third',
                'bibliography' => 'Detailed problem sets at end of each chapter.',
                'description' => 'An academic text for advanced students.',
                'publication_year' => 2005,
                'max_copies' => 10,
            ],
            [
                'title' => 'Sabor Tropical',
                'genre' => 'Cookbook',
                'author' => 'Sofia Morales',
                'abstract' => 'A guide to authentic Caribbean cuisine, featuring recipes for classic dishes, fresh ingredients, and cultural notes.',
                'language' => 'Spanish',
                'isbn' => '978-8423985172',
                'edition' => 'N/A',
                'bibliography' => 'Photos and cultural context included.',
                'description' => 'Recipes for flavorful tropical meals.',
                'publication_year' => 2015,
                'max_copies' => 6,
            ],
            [
                'title' => 'Marketing in the Digital Age',
                'genre' => 'Business',
                'author' => 'P.F. Drucker Jr.',
                'abstract' => 'Focuses on SEO, content strategy, and social media metrics for successful campaign execution in a rapidly evolving market.',
                'language' => 'English',
                'isbn' => '978-0134488402',
                'edition' => 'Fifth',
                'bibliography' => 'Case studies from leading global brands.',
                'description' => 'A guide to modern marketing strategies.',
                'publication_year' => 2022,
                'max_copies' => 10,
            ],
            [
                'title' => 'The Silence Between Stars',
                'genre' => 'Romance',
                'author' => 'Ava Chen',
                'abstract' => 'Two childhood friends reconnect years later while working on a remote astronomical research station, exploring second chances under the cosmos.',
                'language' => 'English',
                'isbn' => '978-1250314457',
                'edition' => 'N/A',
                'bibliography' => 'N/A',
                'description' => 'A heartwarming story set in a unique location.',
                'publication_year' => 2019,
                'max_copies' => 10,
            ],
            [
                'title' => 'Mastering Digital Photography',
                'genre' => 'Art',
                'author' => 'Michael Adams',
                'abstract' => 'A practical guide covering camera settings, composition techniques, and post-processing workflows for beginner and intermediate photographers.',
                'language' => 'English',
                'isbn' => '978-0134423456',
                'edition' => 'Fourth',
                'bibliography' => 'Recommended gear list and software tutorials.',
                'description' => 'An instructional book on modern photography.',
                'publication_year' => 2021,
                'max_copies' => 10,
            ],
            [
                'title' => 'Biomechanics of Sport Performance',
                'genre' => 'Kinesiology',
                'author' => 'K.W. Johnson',
                'abstract' => 'Advanced analysis of human movement during athletic activities, focusing on force, torque, and kinematic principles.',
                'language' => 'English',
                'isbn' => '978-0736067980',
                'edition' => 'Second',
                'bibliography' => 'Detailed anatomical diagrams and mathematical derivations.',
                'description' => 'Advanced textbook on physical performance science.',
                'publication_year' => 2014,
                'max_copies' => 10,
            ],
        ];

        DB::beginTransaction();
        try {
            foreach ($booksData as $data) {
                $genre = BookGenre::firstOrCreate(
                    ['name' => $data['genre']],
                    ['status' => 'ACTIVE']
                );

                $catalog = BookCatalog::create([
                    'book_genre_id' => $genre->id,
                    'title' => $data['title'],
                    'author' => $data['author'],
                    'language' => $data['language'],
                    'isbn' => $data['isbn'],
                    'edition' => $data['edition'],
                    'bibliography' => $data['bibliography'],
                    'description' => $data['abstract'],
                    'publication_year' => $data['publication_year'],
                ]);

                $book = Book::create([
                    'book_catalog_id' => $catalog->id,
                    'status' => 'ACTIVE',
                    'photo' => '1e0613c5-94cd-4cb1-b720-9dd2af8c5948.png',
                    'pdf_copy' => null,
                ]);

                $numCopies = rand(1, $data['max_copies']);

                for ($i = 1; $i <= $numCopies; $i++) {
                    $new_book_ui = GenerateTrace::createTraceNumber(BookCopy::class, '-BOOKQR-', 'unique_identifier', 10, 99);

                    $new_book_copy = new BookCopy;
                    $new_book_copy->book_id = $book->id;
                    $new_book_copy->unique_identifier = $new_book_ui;
                    $new_book_copy->qr = "$new_book_ui.png";
                    $new_book_copy->status = 'AVAILABLE';
                    $new_book_copy->save();

                    $qr_path = public_path("qr/book/$new_book_ui.png");
                    QrCode::format('png')
                        ->size(500)
                        ->style('round')
                        ->margin(1)
                        ->backgroundColor(255, 255, 255)
                        ->merge('/public/system-images/62334fcadd0d9e6d0a152aca.png', 0.19)
                        ->generate($new_book_ui, $qr_path);
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
