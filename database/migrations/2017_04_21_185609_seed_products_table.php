<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        DB::table('products')->insert(
                        array(
                                array(
                                        'name' => 'Vegan Chai Latte',
                                        'short_description' => 'Vegan Chai Latte - this authentic, homemade version that is dairy-free and naturally sweetened with a touch of maple syrup.',
                                        'full_description' => 'Ditch the expensive, store-bought coffee shop chai lattes for this authentic, homemade version that is dairy-free and naturally sweetened with a touch of maple syrup.  It is simple to make and so much better than those sneaky chai tea powder mixes with mystery ingredients and additives.  Using freshly brewed black tea and real spices boosts the flavor of this drink and makes it totally addictive.  It is not watered down at all and has a luscious plant-based milk base.',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/vegan_chai_latte.jpg'
                                ),
                                array(
                                        'name' => 'Irish Cream Chai',
                                        'short_description' => 'This boozy Irish cream chai latte is the perfect marriage of warm and cozy flavors.',
                                        'full_description' => 'This irish cream chai latte would be such a perfect drink to make for a holiday party this Christmas season! Pop it in a slow cooker on warm and set out bowls of whipped cream, shakers of cinnamon and nutmeg and of course a little bowl or squeeze bottle of chocolate sauce. Then everyone can fix themselves their perfect version of this drink! Cheers!',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/irish_cream_chai.jpg'
                                ),
                                array(
                                        'name' => 'Chai Spice Steamer',
                                        'short_description' => 'The Chai Spice Steamer is a simple and delicate blend of Indian spices and frothy milk. Sweet, mellow and comforting.',
                                        'full_description' => 'Chai Spice Steamer made with full fat cows milk, which adds a touch of luxury and decadence to this drink. Once heated, it gives the milk a quick whizz in the blender. It’s a hassle-free approach to creating a wonderfully creamy foam to top the drink.',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/chai_spice_steamer.jpg'
                                ),
                                array(
                                        'name' => 'Almond Cake',
                                        'short_description' => 'Almond Cake – a super moist and delicious almond flavored cake, topped with sliced almonds and powdered sugar.',
                                        'full_description' => 'Almond cake is a dense cake, it isn’t your normal light and fluffy cake.  People are a little skeptical when they see there is no frosting involved. But we offer to make an almond glaze to drizzle over the top, because frosting would be way too much.',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/almond_cake.jpg'
                                ),
                                array(
                                        'name' => 'Hazelnut Mousse',
                                        'short_description' => 'Rich and decadent Two Ingredient Chocolate Hazelnut Mousse. Less than 10 minutes to make!',
                                        'full_description' => 'Who doesn’t love a super simple dessert recipe especially one as yummy as this Two Ingredient Chocolate Hazelnut Mousse!  This dessert literally takes 10 minutes to prepare, crazy right!!!  This is my go to dessert when you have those last minute dinner guests that you want to impress but you have literally zero time to bake.',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/hazelnut_mousse.jpg'
                                ),
                                array(
                                        'name' => 'French Crullers',
                                        'short_description' => 'Homemade French Crullers, made with tender, buttery pâte à choux and dipped in sweet honey glaze, are surprisingly simple and oh-so pretty.',
                                        'full_description' => 'Crullers” are kind of a broad category of pastry. Traditional Crullers are fried rectangles of dough twisted into a sort of braided torpedo. Sometimes, Crullers are made with a batter more akin to a cake doughnut. But, French Crullers are lovely fluted, ring-shaped doughnuts made from pâte à choux that’s fried and then dipped in a sweet glaze.',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/french_crullers.jpg'
                                ),
                                array(
                                        'name' => 'Apple Pie',
                                        'short_description' => 'These Apple Pie Crepes are the perfect start to a beautiful day. You will love these light and lacy crepes filled with delicious apples.',
                                        'full_description' => 'The crepes are also light and nice. It’s so easy to make crepes. Don’t look for perfection. None of us are perfect and neither are our crepes. Just enjoy the process of making these delicious apple pie crepes and think about the good days as I do.',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/apple_pie.jpg'
                                ),
                                array(
                                        'name' => 'Tender Lemon Cookies',
                                        'short_description' => 'Tender lemon cookies topped with a rich and creamy buttercream frosting!',
                                        'full_description' => 'Lemon Sour Cream Sugar Cookies. We use a combination of lemon flavor and plenty of fresh lemon zest to give these tender cookies a nice taste of lemon.The cookies are topped with a basic buttercream frosting, and  grated an extra sprinkle of lemon zest on for a little more color and lemon flavor.',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/lemon_cookies.jpg'
                                ),
                                array(
                                        'name' => 'Russian Easter Dessert',
                                        'short_description' => 'This typical Russian Easter dessert made of cheese is so velvety thanks to mascarpone cheese. (in Polish with translator)',
                                        'full_description' => 'Try something a bit different this Easter with Karen’s delicious Pashka recipe. A traditional Russian Easter dessert made from curd cheese, honey, dried fruit and almonds, Pashka has a texture similar to a custardy cheesecake and is traditionally served with slices of kulich (Russian Easter bread).',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/easter_dessert.jpg'
                                ),
                                array(
                                        'name' => 'Glutten free French Toast',
                                        'short_description' => 'This gluten free and dairy free stuffed French toast is decadent. The chocolate coconut peanut butter filling is met with vegan cream cheese.',
                                        'full_description' => 'The inside is stuffed with the vegan cream cheese and chocolate coconut peanut butter. The “sandwich” is then dipped in an egg and milk mixture flavored with cinnamon and vanilla. We cook the French toast on a skillet with coconut oil. The coconut oil gives it amazing flavor.',
                                        'url' => 'https://s3-us-west-2.amazonaws.com/cmpe272/french_toast.jpg'
                                )
                        ));
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
