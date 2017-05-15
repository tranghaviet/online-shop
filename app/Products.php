<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Nicolaslopezj\Searchable\SearchableTrait;

class Products extends Model {

    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'Name' => 10,
            'Describe' => 8,
            'Price' => 5,
            'Promotion' => 2,
            'Nickname' => 5,
        ],
    ];

    protected $fillable = [
        'Name', 'Description', 'price', 'promotion', 'picture', 'categoryid', 'ceasefire', 'nickname',
    ];

    public static function latest_products() {
        return DB::select('SELECT * FROM products ORDER BY UpdateDay DESC LIMIT 6;');
    }

    public static function men_clothes() {
        return DB::select('SELECT p.ID, p.Name, p.Describe, p.Price, p.Picture FROM products p, categories c, groups g WHERE p.categoryid = c.ID and c.GroupID = g.ID AND g.ID = 2 LIMIT 8;');
    }

    public static function women_clothes() {
        return DB::select('SELECT p.ID, p.Name, p.Describe, p.Price, p.Picture FROM products p, categories c, groups g WHERE p.categoryid = c.ID and c.GroupID = g.ID AND g.ID = 1 LIMIT 8;');
    }

    public static function fashion_accessories() {
        return DB::select('SELECT p.ID, p.Name, p.Describe, p.Price, p.Picture FROM products p, categories c, groups g WHERE p.categoryid = c.ID and c.GroupID = g.ID AND g.ID = 3 LIMIT 8;');
    }

    public static function products_in_groups() {
        return DB::select('SELECT COUNT(p.id) AS quantity FROM groups g, products p, categories c WHERE g.id = c.GroupID and p.categoryid = c.ID GROUP BY g.id');
    }

    public static function recommended_items() {
        return DB::select('SELECT * FROM products ORDER BY rand() LIMIT 6;');
    }
}
