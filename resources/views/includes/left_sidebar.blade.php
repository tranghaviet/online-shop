{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: HAVIETTRANG--}}
{{--* Date: 19-Apr-17--}}
{{--* Time: 8:39 AM--}}
{{--*/--}}
<div class="left-sidebar">
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian">
        <!--category-productsr-->
        @foreach($categories as $category)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="/products/{{$category->Nickname}}">
                            {{$category->Name}}</a></h4>
                </div>
            </div>
        @endforeach

    </div><!--/category-products-->

    <div class="brands_products"><!--brands_products-->
        <h2>Groups Products</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                @foreach($groups as $group)
                    <li><a href="/groups/{{$group->Nickname}}"> <span class="pull-right">Count(so lg)</span>{{$group->NameGroup}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div><!--/brands_products-->

    <div class="price-range"><!--price-range-->

        <div class="well">
            <h2>Price Range</h2>
            <div id="slider-range"></div>
            <br>
            <b class="pull-left">$
                <input size="2" type="text" id="amount_start" name="start_price"
                       value="15"
                       style="border:0px; font-weight: bold; color:green"
                       readonly="readonly"/></b>

            <b class="pull-right">$
                <input size="2" type="text" id="amount_end" name="end_price"
                       value="65"
                       style="border:0px; font-weight: bold; color:green"
                       readonly="readonly"/></b>
        </div>

    </div><!--/price-range-->

    <div class="shipping text-center"><!--shipping-->
        <img src="images/home/shipping.jpg" alt=""/>
    </div><!--/shipping-->

</div>