<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Book {
    private static $bookList = [
        [
            "title" => "Harry Potter and the Philosopher's Stone",
            "slug" => "harry-potter-and-the-philosopher-s-stone",
            "description" => "Harry Potter has no idea how famous he is. That's because he's being raised by his miserable aunt and uncle who are terrified Harry will learn that he's really a wizard, just as his parents were.",
            "author" => "J.K. Rowling",
            "publisher" => "Bloomsbury",
            "year" => "1997",
            "genre" => "Fantasy"
        ],
        [
            "title" => "Harry Potter and the Chamber of Secrets",
            "slug" => "harry-potter-and-the-chamber-of-secrets",
            "description" => "The Dursleys were so mean and hideous that summer that all Harry Potter wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he's packing his bags, Harry receives a warning from a strange, impish creature named Dobby who says that if Harry Potter returns to Hogwarts, disaster will strike.",
            "author" => "J.K. Rowling",
            "publisher" => "Bloomsbury",
            "year" => "1998",
            "genre" => "Fantasy"
        ],
        [
            "title" => "Harry Potter and the Prisoner of Azkaban",
            "slug" => "harry-potter-and-the-prisoner-of-azkaban",
            "description" => "For twelve long years, the dread fortress of Azkaban held an infamous prisoner named Sirius Black. Convicted of killing thirteen people with a single curse, he was said to be the heir apparent to the Dark Lord, Voldemort. Now he has escaped, leaving only two clues as to where he might be headed: Harry Potter's defeat of You-Know-Who was Black's downfall as well. And the Azkaban guards heard Black muttering in his sleep, \"He's at Hogwarts...he's at Hogwarts.\"",
            "author" => "J.K. Rowling",
            "publisher" => "Bloomsbury",
            "year" => "1999",
            "genre" => "Fantasy"
        ],
        [
            "title" => "Harry Potter and the Goblet of Fire",
            "slug" => "harry-potter-and-the-goblet-of-fire",
            "description" => "Harry Potter is midway through his training as a wizard and his coming of age. Harry wants to get away from the pernicious Dursleys and go to the International Quidditch Cup. He wants to find out about the mysterious event that's supposed to take place at Hogwarts this year, an event involving two other rival schools of magic, and a competition that hasn't happened for a hundred years. He wants to be a normal, fourteen-year-old wizard. Unfortunately for Harry Potter, he's not normal - even by wizarding standards. And in this case, different can be deadly.",
            "author" => "J.K. Rowling",
            "publisher" => "Bloomsbury",
            "year" => "2000",
            "genre" => "Fantasy"
        ],
        [
            "title" => "Harry Potter and the Order of the Phoenix",
            "slug" => "harry-potter-and-the-order-of-the-phoenix",
            "description" => "There is a door at the end of a silent corridor. And it's haunting Harry Potters dreams. Why else would he be waking in the middle of the night, screaming in terror? Harry has a lot on his mind for this, his fifth year at Hogwarts: a Defense Against the Dark Arts teacher with a personality like poisoned honey; a big surprise on the Gryffindor Quidditch team; and finally, to his annoyance, a Defense Against the Dark Arts teacher who becomes his close friend. But throughout Harry's classes, he can't help noticing that a strange and mysterious force keeps pulling him away from everything he's doing. Could it have anything to do with that door at the end of the corridor?",
            "author" => "J.K. Rowling",
            "publisher" => "Bloomsbury",
            "year" => "2003",
            "genre" => "Fantasy"
        ],
        [
            "title" => "Harry Potter and the Half-Blood Prince",
            "slug" => "harry-potter-and-the-half-blood-prince",
            "description" => "There is a door at the end of a silent corridor. And it's haunting Harry Potters dreams. Why else would he be waking in the middle of the night, screaming in terror? Harry has a lot on his mind for this, his fifth year at Hogwarts: a Defense Against the Dark Arts teacher with a personality like poisoned honey; a big surprise on the Gryffindor Quidditch team; and finally, to his annoyance, a Defense Against the Dark Arts teacher who becomes his close friend. But throughout Harry's classes, he can't help noticing that a strange and mysterious force keeps pulling him away from everything he's doing. Could it have anything to do with that door at the end of the corridor?",
            "author" => "J.K. Rowling",
            "publisher" => "Bloomsbury",
            "year" => "2005",
            "genre" => "Fantasy"
        ],
        [
            "title" => "Harry Potter and the Deathly Hallows",
            "slug" => "harry-potter-and-the-deathly-hallows",
            "description" => "Harry Potter is leaving Privet Drive for the last time. But as he climbs into the sidecar of Hagrid's motorbike and takes to the skies, he knows Lord Voldemort and the Death Eaters will not be far behind. The protective charm that has kept Harry safe until now is broken, but he cannot keep hiding. The Dark Lord is breathing fear into everything Harry loves, and to stop him Harry will have to find and destroy the remaining Horcruxes. The final battle must begin - Harry must stand and face his enemy.",
            "author" => "J.K. Rowling",
            "publisher" => "Bloomsbury",
            "year" => "2007",
            "genre" => "Fantasy"
        ]
    ];

    public static function all() {

        return collect(self::$bookList);
    }

    public static function find($slug) {
        $books = static::all();
        
        return $books->firstWhere('slug', $slug);
    }
}