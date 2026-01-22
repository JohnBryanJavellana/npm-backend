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
                'category' => 'BOOK',
                'author' => 'Elias Vance',
                'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what11',
                'publication_year' => 2045,
                'max_copies' => 10,
            ],
            [
                'title' => 'Whispers of the Old Manor',
                'genre' => 'Mystery',
                'category' => 'BOOK',
                'author' => 'Clara Hawthorne',
                 'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what1',
                'publication_year' => 1998,
                'max_copies' => 8,
            ],
            [
                'title' => 'Code 404: The Human Factor',
                'genre' => 'Computer Science',
                'category' => 'BOOK',
                'author' => 'Dr. Lena Sharma',
                'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what2',
                'publication_year' => 2023,
                'max_copies' => 10,
            ],
            [
                'title' => 'The Alchemist\'s Garden',
                'genre' => 'Fantasy',
                'category' => 'BOOK',
                'author' => 'Seraphina Moon',
                'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what3',
                'publication_year' => 2011,
                'max_copies' => 10,
            ],
            [
                'title' => 'Statistical Mechanics: A Primer',
                'genre' => 'Physics',
                'category' => 'BOOK',
                'author' => 'J.R. Oppenauer',
                'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what4',
                'publication_year' => 2005,
                'max_copies' => 10,
            ],
            [
                'title' => 'Sabor Tropical',
                'genre' => 'Cookbook',
                'category' => 'BOOK',
                'author' => 'Sofia Morales',
                'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what5',
                'publication_year' => 2015,
                'max_copies' => 6,
            ],
            [
                'title' => 'Marketing in the Digital Age',
                'genre' => 'Business',
                'category' => 'NON-BOOK',
                'author' => 'P.F. Drucker Jr.',
                'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what6',
                'publication_year' => 2022,
                'max_copies' => 10,
            ],
            [
                'title' => 'The Silence Between Stars',
                'genre' => 'Romance',
                'category' => 'NON-BOOK',
                'author' => 'Ava Chen',
                'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what7',
                'publication_year' => 2019,
                'max_copies' => 10,
            ],
            [
                'title' => 'Mastering Digital Photography',
                'genre' => 'Art',
                'category' => 'NON-BOOK',
                'author' => 'Michael Adams',
                'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what8',
                'publication_year' => 2021,
                'max_copies' => 10,
            ],
            [
                'title' => 'Biomechanics of Sport Performance',
                'genre' => 'Kinesiology',   
                'category' => 'NON-BOOK',
                'author' => 'K.W. Johnson',
                'editor' => 'English',
                'publisher' => 'A starship captain races against time to uncover an ancient alien device that holds the key to intergalactic peace or total war.',
                'type' => 'First',
                'pages' => '5',
                'call_number' => '978-1566199094',
                'price' => 10.00,
                'isbn' => '1566199094',
                'file_location' => 'what9',
                'publication_year' => 2014,
                'max_copies' => 10,
            ],
        ];

        DB::beginTransaction();
        try {
            foreach ($booksData as $data) {
                $genre = BookGenre::firstOrCreate(
                    [
                        "name" => $data["genre"],
                        "category" => $data["category"],
                        "status" => "ACTIVE"
                    ]
                    // ['name' => $data['genre']],
                    // ['status' => 'ACTIVE']
                );

                $catalog = BookCatalog::create([
                    'book_genre_id' => $genre->id,
                    'title' => $data['title'],
                    'author' => $data['author'],
                    'editor' => $data['editor'],
                    'publisher' => $data['publisher'],
                    'type' => $data['type'],
                    'pages' => $data['pages'],
                    'call_number' => $data['call_number'],
                    'price' => $data['price'],
                    'isbn' => $data['isbn'],
                    'file_location' => $data['file_location'],
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
                    $new_book_copy = new BookCopy;
                    $new_book_copy->book_id = $book->id;
                    $new_book_copy->unique_identifier = GenerateTrace::createTraceNumber(BookCopy::class, '-BOOKQR-', 'unique_identifier', 10, 99);
                    $new_book_copy->status = 'AVAILABLE';
                    $new_book_copy->save();
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
