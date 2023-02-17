public static function  {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }


     public static function  {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit enim ducimus in nam molestias repellat placeat! Aspernatur quis ex, labore adipisci aperiam autem, doloribus illo saepe esse, provident id quam?'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio labore eos at minima excepturi corporis, aspernatur aperiam officia fugiat facere delectus molestiae neque aliquid, quod necessitatibus, ducimus sit laudantium itaque.'
            ]
            ];
    }
